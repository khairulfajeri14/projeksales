
	<div class="page-header ">
		<h4>Edit spek</h4>
	</div>
	<?php 
	echo validation_errors();
	echo form_open_multipart('spek/update_spek');
	foreach($spek as $a){ 
	?>
	<div class="table-responsive col-md-10">
	<table class="table table-bordered table-hover table-striped">
		
		<tr>
			<th>Deskripsi</th>
			
			
			<td>
			<input type="hidden" name="id_kendaraan" class="form-control" value="<?php echo $a->id_kendaraan ?>">
				<textarea class=" ckeditor" id="ckeditor" name="deskripsi"><?php echo $a->deskripsi ?></textarea>
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