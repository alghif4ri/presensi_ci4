<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => service('validation')
        ];
        return view('login', $data);
    }

    public function login_action()
    {
        // dd($this->request->getVar('username'));
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('login', $data);
        } else {
            $session = session();
            $loginModel = new LoginModel;
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $cekUsername = $loginModel->where('username', $username)->first();
            if ($cekUsername) {
                $password_db = $cekUsername['password'];
                $cekPassword = password_verify($password, $password_db);
                if ($cekPassword) {
                    $session_data = [
                        'logged_in' => 'TRUE',
                        'role_id' => $cekUsername['role']
                    ];
                    $session->set($session_data);
                    switch ($cekUsername['role']) {
                        case "Admin":
                            return redirect()->to('admin/home');
                        case "Pegawai":
                            return redirect()->to('pegawai/home');
                        default:
                            return redirect()->to('/')->with('message', 'Your account not register');
                    }
                } else {
                    // using chaining method without write session->setFlashdata
                    return redirect()->to('/')->with('message', 'invalid password, try again');
                }
            } else {
                // this explicit method to using setFlashdata
                $session->setFlashdata('message', 'invalid username, try again');
                return redirect()->to('/');
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
