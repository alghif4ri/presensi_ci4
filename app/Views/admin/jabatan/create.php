<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>
<a href="<?= base_url('admin/jabatan') ?>" class="btn btn-primary mb-3"><i class="lni lni-arrow-left-circle"></i> Back</a>

<div class="card col-md-6">
    <div class="card-body">
        <form method="POST" action="<?= base_url('admin/jabatan/store') ?>">
            <div class="input-style-1">
                <label>Nama Jabatan</label>
                <input type="text" class="form-control <?= ($validation->hasError('jabatan')) ? 'is-invalid' : '' ?>" name="jabatan" placeholder="Nama Jabatan" />
                <div class="invalid-feedback"><?= $validation->getError('jabatan') ?></div>
            </div>
    </div>
</div>
<button type="submit" class="btn btn-primary mt-3">SAVE</button>
</form>

<?= $this->endSection() ?>