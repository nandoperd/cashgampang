<section class="content-header">
    <h1>
        <?= $title ?>
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
    <div class="col-sm-12">
        <div class="box box-u box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data <?= $title ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('fots/import') ?>" class="btn btn-box-tool"><i class="fa fa-file-excel-o"></i> Import</a>
                    <a href="<?= base_url('fots/add') ?>" class="btn btn-box-tool"><i class="fa fa-plus"></i> Tambahkan</a>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success" role="alert">';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
                ?>
                <!-- The body of the box -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="50px" class="text-center">No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Potongan</th>
                            <th>Gol</th>
                            <th>Bagian</th>
                            <th>Angsuran Ke-</th>
                            <th width="150px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($fots as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['nik'] ?></td>
                                <td><?= $value['cicilan'] ?></td>
                                <td><?= $value['gol'] ?></td>
                                <td><?= $value['divisi'] ?></td>
                                <td><?= $value['tenor_jalan'] ?>/<?= $value['tenor'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('fots/edit/' . $value['id_data']) ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_data']  ?>"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>

    <!-- modal delete -->
    <?php foreach ($fots as $key => $value) { ?>
        <div class="modal fade" id="delete<?= $value['id_data'] ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Hapus Data Siswa</h4>
                    </div>
                    <div class="modal-body">

                        Apakah Anda Yakin Ingin Menghapus Data Siswa <b><?= $value['nama'] ?>?</b>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Tutup</button>
                        <a href="<?= base_url('fots/delete/' . $value['id_data']) ?>" class="btn btn-success">Hapus</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php } ?>