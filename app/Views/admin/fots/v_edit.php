<section class="content-header">
    <h1>
        Edit Data <a href="<?= base_url('fots') ?>">Fots</a>
    </h1>
    <br>
</section>

<style>
    .box.box-solid.box-u > .box-header {
    color: #fff;
    background: #555299;
    background-color: #555299;
    }
    .box.box-solid.box-u > .box-header a,
    .box.box-solid.box-u > .box-header .btn {
    color: #fff;
    }
    .box.box-solid.box-u {
    border: 1px solid #555299;
    }
</style>

<div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
        <div class="box box-u box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title ?></h3>

                <div class="box-tools pull-right">

                    <!-- <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambahkan</button> -->
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">

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
                echo form_open_multipart('fots/update/' . $fots['id_data']);
                ?>


                <div class="form-group">
                    <label>ID Kontrak</label>
                    <input name="id_kontrak" value="<?= $fots['id_kontrak'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="nama" value="<?= $fots['nama'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Divisi</label>
                    <input name="divisi" value="<?= $fots['divisi'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>NIK</label>
                    <input name="nik" value="<?= $fots['nik'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Golongan</label>
                    <input name="gol" value="<?= $fots['gol'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nomor Telepon/Whatsapp</label>
                    <input name="nomor_wa" value="<?= $fots['nomor_wa'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tanggal Pinjaman</label>
                    <input name="tgl_pinjaman" value="<?= $fots['tgl_pinjaman'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input name="tgl_selesai" value="<?= $fots['tgl_selesai'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jumlah Pinjaman</label>
                    <input name="pinjaman" value="<?= $fots['pinjaman'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Biaya Admin</label>
                    <input name="adm" value="<?= $fots['adm'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tenor Pinjaman ( Bulan )</label>
                    <input name="tenor" value="<?= $fots['tenor'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Bunga</label>
                    <input name="bunga" value="<?= $fots['bunga'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Cicilan</label>
                    <input name="cicilan" value="<?= $fots['cicilan'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tenor Ke-</label>
                    <input name="tenor_jalan" value="<?= $fots['tenor_jalan'] ?>" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?= base_url('fots') ?>" class="btn btn-danger pull-left">Tutup</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <?php echo form_close() ?>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-sm-3">
    </div>
</div>