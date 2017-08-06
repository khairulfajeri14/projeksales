
	<div class="page-header ">
		<h4>Edit Berita</h4>
	</div>
	<?php 
	echo validation_errors();
	echo form_open_multipart('Berita/update_berita');  
	foreach($berita as $a){ 
	?>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Tanggal</th>
			<td>
				<input type="hidden" name="id" class="form-control" value="<?php echo $a->id ?>">
				<input type="text" name="tanggal" class="form-control datepicker" value="<?php echo $a->tanggal ?>">
			</td>
		</tr>

		<tr>
			<th>Judul</th>
			<td>
				<input type="text" name="judul" class="form-control" value="<?php echo $a->judul ?>">
			</td>
		</tr>

		<tr>
			<th>Isi</th>
			<td>
				<textarea class=" ckeditor" id="ckeditor" name="isi"><?php echo $a->isi ?></textarea>
			</td>
		</tr>

		<tr>
			<th>Status</th>
			<td>
				<select name="status" class="form-control">
					<?php foreach($berita as $k){ ?>
					<option value="publish" <?php if ($a->status == "publish") { echo 'selected'; } ?>>Publikasikan</option>
			<option value="draft" <?php if($k->status == "draft") { echo 'selected';} ?>>Simpan Sebagai Draft</option>
					<?php } ?>
				</select>
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