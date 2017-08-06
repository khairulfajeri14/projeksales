
	<div class="page-header ">
		<h4>Tulis angsuran</h4>
	</div>
	<?php echo validation_errors() ?>
	<?php echo form_open_multipart('Angsuran/angsuran_act'); ?>
	<div class="table-responsive col-md-10">
	<table class="table table-bordered table-hover table-striped">
		
		<tr>
			<th class="col-md-3">Kendaraan</th>
			<td>
				<select name="id_produk" class="form-control">
					<?php foreach($kendaraan as $k){ ?>
					<option value="<?php echo $k->id_kendaraan ?>"><?php echo $k->nama_kendaraan ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<th>DP</th>
			<td><input type="text" name="dp" class="form-control"></td>
		</tr>
		<tr>
			<th>Lama Angsuran</th>
			<th>Besar Angsuran</div></th>
		</tr>
		<tr>
			
			<td ><input type="text" name="lama" class="form-control">
			</td>
			<td>
				<input type="text" name="besar" class="form-control">
			</td>

		</tr>
		<tr>
			
			<td ><input type="text" name="lama2" class="form-control">
			</td>
			<td>
				<input type="text" name="besar2" class="form-control" ">
			</td>
			
		</tr>
		<tr>
			
			<td ><input type="text" name="lama3" class="form-control">
			</td>
			<td>
				<input type="text" name="besar3" class="form-control">
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