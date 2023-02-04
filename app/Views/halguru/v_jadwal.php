<section class="content-header">
    <h1>
        <?= $title ?> TP : <?= $tp['tp'] ?> (<?= $tp['semester'] ?>)
    </h1>
    <br>
</section>

<div class="row">
    <table class="table table-striped table-bordered table-responsive">
        <tr class="label-success">
            <th>#</th>
            <th>Kelas</th>
            <th>Hari / Waktu</th>
            <th>Mata Pelajaran</th>
            <th>KKM</th>
            <th>Rombongan Belajar</th>
        </tr>
        <?php
        $no = 1;
        foreach ($jadwal as $key => $value) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value['kelas'] ?></td>
                <td><?= $value['hari'] ?> / <?= $value['waktu'] ?></td>
                <td><?= $value['nama_mapel'] ?></td>
                <td><?= $value['kkm'] ?></td>
                <td><?= $value['nama_rombel'] ?></td>
                <td></td>
            </tr>

        <?php } ?>
    </table>
</div>