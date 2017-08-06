
	<div class="page-header ">
		<h4>Edit angsuran</h4>
	</div>
	<?php 
	echo validation_errors();
	echo form_open_multipart('Angsuran/update_angsuran');
	foreach($angsuran as $a){ 
	?>
	<div class="table-responsive col-md-10">
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th class="col-md-3">Kendaraan</th>
			<td>
			<input type="hidden" name="id_detail_a" class="form-control" value="<?php echo $a->id_detail_a ?>">
			<select name="id_produk" class="form-control">
				<?php foreach($kendaraan as $k){ ?>
					<option <?php if($a->id_produk==$k->id_kendaraan){echo "selected='selected'";} ?> value="<?php echo $k->id_kendaraan ?>"><?php echo $k->nama_kendaraan ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
		<tr>
			<th>DP</th>
			<td><input type="text" name="dp" class="form-control" value="<?php echo $a->dp ?>">
			</td>
		</tr>

			<th>Lama Angsuran</th>
			<th> Besar Angsuran</div></th>
			
		</tr>
		
		
		<tr>
			
			<td ><input type="text" name="lama" class="form-control" value="<?php echo $a->lama ?>">
			</td>
			<td>
				<input type="text" name="besar" class="form-control" value="<?php echo $a->besar ?>">
			</td>

		</tr>
		<tr>
			
			<td ><input type="text" name="lama2" class="form-control" value="<?php echo $a->lama2 ?>">
			</td>
			<td>
				<input type="text" name="besar2" class="form-control" value="<?php echo $a->besar2 ?>">
			</td>
			
		</tr>
		<tr>
			
			<td ><input type="text" name="lama3" class="form-control" value="<?php echo $a->lama3 ?>">
			</td>
			<td>
				<input type="text" name="besar3" class="form-control" value="<?php echo $a->besar3 ?>">
			</td>
			
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" value="Posting" class="btn btn-sm btn-success">
			</td>
		</tr>
		<tr>
		</tr>
	</table>
	<?php 
	} 
	echo form_close(); 
	?>
</div>