<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>
<a href="<?= base_url('admin/lokasi_presensi/create') ?>" class="btn btn-primary"><i class="lni lni-circle-plus"></i> Add Data</a>

<table class="table table-striped text-center" id="dataLokasiPresensi">
    <thead>
        <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">Nama Lokasi</th>
            <th style="text-align: center;">Alamat Lokasi</th>
            <th style="text-align: center;">Tipe Lokasi</th>
            <th style="text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($lokasi_presensi as $lok) : ?>
            <tr>
                <td style="text-align: center;"><?= $no++ ?></td>
                <td><?= $lok['nama_lokasi'] ?></td>
                <td><?= $lok['alamat_lokasi'] ?></td>
                <td><?= $lok['tipe_lokasi'] ?></td>
                <td>
                    <a href="<?= base_url('admin/lokasi_presensi/detail/' . $lok['id']) ?>" class="badge bg-secondary">Detail</a>
                    <a href="<?= base_url('admin/lokasi_presensi/edit/' . $lok['id']) ?>" class="badge bg-secondary">Edit</a>
                    <a href="<?= base_url('admin/lokasi_presensi/delete/' . $lok['id']) ?>" class="badge bg-danger btn-delete">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection() ?>