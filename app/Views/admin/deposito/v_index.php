<section class="content-header">
    <h1>
        <?= $title ?>
    </h1>
    <br>
</section>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data <?= $title ?></h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('deposito/add') ?>" class="btn btn-box-tool"><i class="fa fa-plus"></i> Tambahkan</a>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                            <th width="25px" class="text-center">No</th>
                            <th>Nomor urut</th>
                            <th>Nama Deposit</th>
                            <th>Alamat</th>
                            <th>Tenor</th>
                            <th>Awal Setor</th>
                            <th>Pengambilan</th>
                            <th width="150px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($deposito as $key => $value) { ?>
                            <tr>
                                <td width="25px" class="text-center"><?= $no++; ?></td>
                                <td><?= $value['no_urut'] ?></td>
                                <td><?= $value['nama_deposit'] ?></td>
                                <td><?= $value['alamat_deposit'] ?></td>
                                <td><?= $value['tenor'] ?> Bulan</td>
                                <td><?= $value['bayar_awal'] ?></td>
                                <td><?= $value['bayar_ambil'] ?></td>
                                <td class="text-center">
                                <a href="<?= base_url('deposito/edit/' . $value['id_deposit']) ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_deposit']  ?>"><i class="fa fa-trash"></i></button>
                                <a href="<?= base_url('deposito/qrcode/' . $value['id_deposit']) ?>" class="btn btn-info"><i class="fa fa-qrcode"></i></a>
                                <a href="<?= base_url('deposito/print/' . $value['id_deposit']) ?>" target="_BLANK" class="btn btn-success"><i class="fa fa-print"></i></a>
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
    <?php foreach ($deposito as $key => $value) { ?> 
        <div class="modal fade" id="delete<?= $value['id_deposit'] ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Hapus Data Deposito</h4>
                    </div>
                    <div class="modal-body">

                        Apakah Anda Yakin Ingin Menghapus Data Deposito Atas Nama <b><?= $value['nama_deposit'] ?>?</b>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Tutup</button>
                        <a href="<?= base_url('deposito/delete/'. $value['id_deposit']) ?>" class="btn btn-success">Hapus</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php } ?>