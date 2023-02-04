<section class="content-header">
    <h1>
        Tambah <a href="<?= base_url('fots') ?>">Fots</a>
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
                echo form_open_multipart('fots/insert');
                ?>
                      <input type="hidden" name="id_payroll" id="id_payroll" value="1">
                      <div class="form-group">
                        <label for="id_kontrak">ID Kontrak</label>
                        <input type="text" class="form-control" name="id_kontrak" id="id_kontrak" placeholder="Masukkan Nomor Kontrak">
                      </div>
                      <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Anda">
                      </div>
                      <div class="form-group">
                        <label for="divisi">Divisi</label>
                        <input type="text" class="form-control" name="divisi" id="divisi" placeholder="Masukkan Divisi Anda">
                      </div>
                      <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK Anda">
                      </div>
                      <div class="form-group">
                        <label for="gol">Golongan</label>
                        <input type="text" class="form-control" name="gol" id="gol" placeholder="Masukkan Golongan Anda">
                      </div>
                      <div class="form-group">
                        <label for="gol">Nomor Telepon/Whatsapp</label>
                        <input type="text" class="form-control" name="nomor_wa" id="nomor_wa" placeholder="62821535384142">
                      </div>
                      <div class="form-group">
                        <label for="tgl_pinjaman">Tanggal Pinjaman</label>
                        <input type="date" class="form-control" name="tgl_pinjaman" id="tgl_pinjaman" placeholder="Masukkan Tanggal Pinjaman Anda">
                      </div>
                      <div class="form-group">
                        <label for="tgl_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai" placeholder="Masukkan Tanggal Selesai Pinjaman Anda">
                      </div>
                      <div class="form-group">
                        <label for="pinjaman">Jumlah Pinjaman</label>
                        <input type="number" class="form-control" name="pinjaman" id="pinjaman" placeholder="Masukkan Pinjaman Anda">
                      </div>
                      <div class="form-group">
                        <label for="adm">Biaya Admin</label>
                        <input type="number" class="form-control" name="adm" id="adm" placeholder="Masukkan Biaya Admin Anda">
                      </div>
                      <div class="form-group">
                        <label for="tenor">Tenor Pinjaman ( Bulan )</label>
                        <input type="number" class="form-control" name="tenor" id="tenor" placeholder="Masukkan Tenor Pinjaman Anda">
                      </div>
                      <div class="form-group">
                        <label for="bunga">Bunga</label>
                        <input type="number" class="form-control" name="bunga" id="bunga" placeholder="Masukkan Bunga Anda">
                      </div>
                      <div class="form-group">
                        <label for="cicilan">Cicilan</label>
                        <input type="number" class="form-control" name="cicilan" id="cicilan" placeholder="Masukkan Cicilan Anda">
                      </div>
                      <div class="form-group">
                        <label for="tenor_jalan">Tenor Ke-</label>
                        <input type="number" class="form-control" name="tenor_jalan" id="tenor_jalan" placeholder="Tenor ke-">
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