	<div class="page-header ">
		<h4>Tulis Kategori</h4>
	</div>
	<?php echo validation_errors() ?>
	<?php echo form_open_multipart('kategori/kategori_act'); ?>
	<div class="table-responsive col-md-10">
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Nama</th>
			<td><input type="text" name="nama" class="form-control"></td>
		</tr>

		<tr>
			<th>Pabrikan</th>
			<td><input type="text" name="pabrikan" class="form-control"></td>
		</tr>

		

		
		<tr>
			<th></th>
			<td>
				<input type="submit" value="Posting" class="btn btn-sm btn-success">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
	</div>
