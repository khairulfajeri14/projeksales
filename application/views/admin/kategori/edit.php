
	<div class="page-header ">
		<h4>Edit kategori</h4>
	</div>
	<?php 
	echo validation_errors();
	echo form_open_multipart('Kategori/update_kategori');  
	foreach($kategori as $a){ 
	?>
		<div class="table-responsive col-md-10">
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Nama</th>
			<td>
				<input type="hidden" name="id" class="form-control" value="<?php echo $a->id ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $a->nama ?>">
			</td>
		</tr>
		
		<tr>
			<th>Pabrikan</th>
			<td>
				<input type="text" name="pabrikan" class="form-control" value="<?php echo $a->pabrikan ?>">
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