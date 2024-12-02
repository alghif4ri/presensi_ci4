<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>
<a href="<?= base_url('admin/jabatan/create') ?>" class="btn btn-primary"><i class="lni lni-circle-plus"></i> Add Data</a>

<table class="table table-striped text-center" id="dataJabatan">
    <thead>
        <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">Nama Jabatan</th>
            <th style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($jabatan as $jab) : ?>
            <tr>
                <td style="text-align: center;"><?= $no++ ?></td>
                <td><?= $jab['jabatan'] ?></td>
                <td>
                    <a href="<?= base_url('admin/jabatan/edit/' . $jab['id']) ?>" class="badge bg-secondary">Edit</a>
                    <a href="<?= base_url('admin/jabatan/delete/' . $jab['id']) ?>" class="badge bg-danger btn-delete">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>