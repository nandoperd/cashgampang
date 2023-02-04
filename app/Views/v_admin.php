<div class="row">
<div class="callout bg-purple">
    <h4>Halo <b><?= session()->get('nama') ?></b>,</h4>
    <h4>Selamat datang di CASHGAMPANG, Anda telah login sebagai <b> <?php if (session()->get('level') == 1) {
                                                                    echo 'Admin';
                                                                } elseif (session()->get('level') == 2) {
                                                                    echo 'Guru';
                                                                } elseif (session()->get('level') == 3) {
                                                                    echo 'Siswa';
                                                                } ?></b>.</h4>

</div>
</div>

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $jml_payroll ?></h3>

                <p>Payroll</p>
            </div>
            <div class="icon">
                <i class="fa fa-file-text-o"></i>
            </div>
            <a href="<?= base_url('payroll') ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $jml_kelas ?></h3>

                <p>Pinjaman Luar PT</p>
            </div>
            <div class="icon">
                <i class="fa fa-group"></i>
            </div>
            <a href="#" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $jml_deposito ?></h3>

                <p>Deposito</p>
            </div>
            <div class="icon">
                <i class="fa fa-handshake-o"></i>
            </div>
            <a href="<?= base_url('deposito') ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= $jml_kelas ?></h3>

                <p>Keluar</p>
            </div>
            <div class="icon">
                <i class="fa fa-sign-out"></i>
            </div>
            <a href="<?= base_url('auth/logout') ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>