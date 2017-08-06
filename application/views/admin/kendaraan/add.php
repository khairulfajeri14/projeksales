<div class="page-header ">
		<h4>Tulis Kendaraan</h4>
	</div>
	<?php echo validation_errors() ?>
	<?php echo form_open_multipart('kendaraan/kendaraan_act'); ?>
	<div class="table-responsive col-md-10">
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Tanggal</th>
			<td>

                <input name="tanggal" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
                
            </td>
		</tr>
		<tr>
			<th>Nama</th>
			<td><input type="text" name="nama_kendaraan" class="form-control"></td>
		</tr>
		<tr>
			<th>Kategori</th>
			<td>
				<select name="id_kategori" class="form-control">
					<?php foreach($kategori as $k){ ?>
					<option value="<?php echo $k->id ?>"><?php echo $k->nama ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Status</th>
			<td>
				<select name="status" id="status" class="form-control">
				<option value="publish">Publikasikan</option>
				<option value="draft">Simpan sebagai draft</option>
			</select>
			</td>
		</tr>
		<tr>
			<th>Harga</th>
			<td><input type="text" name="harga" class="form-control"></td>
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
	<?php echo form_close(); ?>
</div>