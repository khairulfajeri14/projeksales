<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judulform ?></title>
</head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
<body>
<div class="container">
<div class="row" style="margin-left:32%; margin-top:10%; margin-right:32%">
<h4 align="center"><?php echo $judul ?></h4><br>
<?php echo form_open('User/proseslogin'); ?>
	<div class="well">
		<!--jalankan validasi pesan-->
		<?php if($this->session->flashdata('pesan1')) {?>
		<div class="alert alert-warning" role="alert">
			<button type="button" class="close" data-dismis="alert">x</button>
			<h4>Peringatan</h4>
			<?php echo $this->session->flashdata('pesan1'); ?>
		</div>

		<?php }else if($this->session->flashdata('pesan2')) {?>
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismis="alert">x</button>
			<h4>Ada Kesalahan</h4>
			<?php echo $this->session->flashdata('pesan2');?>
		</div>

		<?php }else if($this->session->flashdata('pesan3')) {?>
		<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismis="alert">x</button>
			<h4>Ooops</h4>
			<?php echo $this->session->flashdata('pesan3');?>
		</div>

		<?php }; ?>
		<!--end validasi-->

		<div class="form-group">
			<label class="control-label">Username</label>
			<input class="form-control" name="username" type="text" placeholder="username">
		</div>
		<div class="form-group">
			<label class="control-label">Password</label>
			<input class="form-control" name="password" type="password" placeholder="password">
			<span id="pesan"></span>
		</div>
		<div class="form-group">
			<button class="btn btn-info" type="submit">
				<span class="glyphicon glyphicon-log-in"></span> 
				Login
			</button>
			<button class="btn btn-default" type="reset">Batal</button>
		</div>
	</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
</body>
</html>
		