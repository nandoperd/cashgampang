<section class="content-header">
    <h1>
        Edit Data <a href="<?= base_url('deposito') ?>">Deposito</a>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title ?></h3>

                <div class="box-tools pull-right">

                    <!-- <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambahkan</button> -->
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li><?= esc($value) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>

                <!-- pesan password salah -->
                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-warning" role="alert">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                } ?>

                <?php
                echo form_open_multipart('deposito/update/' . $deposito['id_deposit']);
                ?>


<div class="container"></div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nomor Urut</label>
                        <input name="no_urut" class="form-control" value="<?= $deposito['no_urut'] ?>" placeholder="000001">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nomor Surat</label>
                        <input name="no_surat" class="form-control" value="<?= $deposito['no_surat'] ?>" placeholder="001/DB-CG/XII/22">
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama_deposit" class="form-control" value="<?= $deposito['nama_deposit'] ?>" placeholder="Nama">
                </div>

                <div class="form-group">
                    <label>NIK</label>
                    <input name="nik_deposit" class="form-control" placeholder="NIK" value="<?= $deposito['nik_deposit'] ?>">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat_deposit" class="form-control" value="<?= $deposito['alamat_deposit'] ?>" placeholder="Alamat">
                </div>

                <div class="col-sm-6">
                <label>Jumlah</label>
                    <input name="jumlah" class="form-control" value="<?= $deposito['jumlah'] ?>" placeholder="1.000.000">
                </div>

                <div class="col-sm-6">
                <label>Terbilang</label>
                    <input name="jumlah_t" class="form-control" value="<?= $deposito['jumlah_t'] ?>" placeholder="Satu Juta Rupiah">
                </div>

                <div class="col-sm-6">
                <label>Tenor</label>
                    <input name="tenor" class="form-control" value="<?= $deposito['tenor'] ?>" placeholder="1">
                </div>

                <div class="col-sm-6">
                <label>Terbilang</label>
                    <input name="tenor_t" class="form-control" value="<?= $deposito['tenor_t'] ?>" placeholder="Satu">
                </div>

                <div class="col-sm-6">
                <label>Suku Bunga</label>
                    <input name="sukubunga" class="form-control" value="<?= $deposito['sukubunga'] ?>" placeholder="10">
                </div>

                <div class="col-sm-6">
                <label>Terbilang</label>
                    <input name="sukubunga_t" class="form-control" value="<?= $deposito['sukubunga_t'] ?>" placeholder="Sepuluh">
                </div>

                <div class="form-group">
                    <label>Bunga</label>
                    <input name="bunga" class="form-control" value="<?= $deposito['bunga'] ?>" placeholder="100.000">
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Awal Setor</label>
                        <input type="date" name="bayar_awal" value="<?= $deposito['bayar_awal'] ?>" class="form-control">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pengambilan</label>
                        <input type="date" name="bayar_ambil" value="<?= $deposito['bayar_ambil'] ?>" class="form-control">
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <a href="<?= base_url('deposito') ?>" class="btn btn-danger pull-left">Tutup</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <?php echo form_close() ?>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-sm-3">
    </div>
</div>