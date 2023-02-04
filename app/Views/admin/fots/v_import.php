<section class="content-header">
    <h1>
        Import Data <a href="<?= base_url('fots') ?>">Fots</a>
    </h1>
    <br>
</section>

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
                echo form_open_multipart('fots/import');
                ?>

		<form method="post" action="/fots/simpanExcel" enctype="multipart/form-data">
			<div class="form-group">
				<label>File Excel</label>
				<input type="file" name="fileexcel" class="form-control" id="file" required accept=".xls, .xlsx" /></p>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Upload</button>
			</div>
		</form>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>NIK</th>
					<th>Nama</th>
					<th>Divisi</th>
				</tr>
			</thead>
			<tbody>
			<?php
			if(!empty($fots)){
				foreach($$fots as $key => $value){
				?>
					<tr>
						<td><?= $value['nik'] ?></td>
						<td><?= $value['nama'] ?></td>
						<td><?= $value['divisi'] ?></td>
					</tr>
				<?php
				}
			}else{
			?>
				<tr>
					<td colspan="3">Tidak ada data</td>		
				</tr>
			<?php
			}
			?>
			</tbody>
		</table>
	</div>
