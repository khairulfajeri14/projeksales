
	<div class="page-header ">
		<h4>Edit Kendaraan</h4>
	</div>
	<?php 
	echo validation_errors();
	echo form_open_multipart('Kendaraan/update_kendaraan');
	foreach($kendaraan as $a){ 
	?>
	<div class="table-responsive col-md-10">
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Tanggal</th>
			<td>
			<input type="hidden" name="id_kendaraan" class="form-control" value="<?php echo $a->id_kendaraan ?>">
			<input type="text" name="tanggal" class="form-control datepicker" value="<?php echo $a->tanggal ?>">
			</td>
		</tr>
		<tr>
			<th>Nama</th>
			<td><input type="text" name="nama_kendaraan" class="form-control" value="<?php echo $a->nama_kendaraan ?>">
			</td>
		</tr>
		<tr>
			<th>Kategori</th>
			<td>
				<select name="id_kategori" class="form-control">
				<?php foreach($kategori as $k){ ?>
					<option <?php if($a->id_kategori==$k->id){echo "selected='selected'";} ?> value="<?php echo $k->id ?>"><?php echo $k->nama ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Status</th>
			<td>
				<select name="status" class="form-control">
					<?php foreach($kendaraan as $k){ ?>
					<option value="publish" <?php if ($k->status == "publish") { echo 'selected'; } ?>>Publikasikan</option>
			<option value="draft" <?php if($k->status == "draft") { echo 'selected';} ?>>Simpan Sebagai Draft</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Harga</th>
			<td><input type="text" name="harga" class="form-control" value="<?php echo $a->harga ?>">
			</td>
		</tr>
		<tr>
			<th>Foto</th>
			<td>
				<input type="file" value="Posting" class="form-control" name="foto">
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" value="Posting" class="btn btn-sm btn-success">
			</td>
		</tr>
	</table>
	<?php 
	} 
	echo form_close(); 
	?>
</div>