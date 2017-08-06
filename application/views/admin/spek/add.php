
	<div class="page-header ">
		<h4>Tulis spek</h4>
	</div>
	<?php echo validation_errors() ?>
	<?php echo form_open_multipart('spek/spek_act'); ?>
	<div class="table-responsive col-md-10">
	<table class="table table-bordered table-hover table-striped">
		
		<tr>
			<th>Kendaraan</th>
			<td>
				<select name="id_kendaraan" class="form-control">
					<?php foreach($kendaraan as $k){ ?>
					<option value="<?php echo $k->id_kendaraan ?>"><?php echo $k->nama_kendaraan ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		
		<tr>
			<th>Deskripsi</th>
			<td>
				<textarea class=" ckeditor" id="ckeditor" name="deskripsi"></textarea>
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