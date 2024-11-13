<?= $this->extend('admin/layout.php') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon blue">
                <!-- <i class="lni lni-cart-full"></i> -->
                <i class="lni lni-users"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Total Pegawai</h6>
                <h3 class="text-bold mb-10">0</h3>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon success">
                <i class="lni lni-checkmark-circle"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Hadir</h6>
                <h3 class="text-bold mb-10">0</h3>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon danger">
                <i class="lni lni-cross-circle"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Absen</h6>
                <h3 class="text-bold mb-10">0</h3>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
        <div class="icon-card mb-30">
            <div class="icon orange">
                <i class="lni lni-briefcase"></i>
            </div>
            <div class="content">
                <h6 class="mb-10">Cuti/Izin</h6>
                <h3 class="text-bold mb-10">0</h3>
            </div>
        </div>
        <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
</div>
<?= $this->endSection() ?>