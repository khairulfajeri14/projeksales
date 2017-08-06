<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">


$(document).ready(function() {

    
    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });

});
</script>

    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/datepicker3.css' ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/admin.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/js/jquery-ui/jquery-ui.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-ui.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/ckeditor/ckeditor.js' ?>"></script>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">


<link rel="stylesheet" href="jquery.mobile-1.1.2.css" />
<link rel="stylesheet" href="jqm-docs.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
<link rel="stylesheet" href="style.css">
<script src="jqm-docs.js"></script>
<script src="jquery-1.7.2.min.js"></script>
<script src="jquery.mobile-1.1.2.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" id="pageone" >
  <div data-role="header" data-position="fixed" >
  <a href="#myPanel" data-role="button" data-theme="b" data-icon="grid" data-iconpos="notext" data-rel="dialog">View</a>
  <h1><?php if(isset($news)) echo 'News';
  			else if(isset($kendaraan)) echo 'Products';
  			else if(isset($contact)) echo 'Contact';
  			else if(isset($detail_news)) echo 'News Detail';
  			else if(isset($detail_product)) echo 'Product Detail';
        else if(isset($keduanya)) echo 'News & Product';
        else if(isset($gor)) echo $gor[0]->nama; 
  			else echo 'News & Product'; ?></h1>
  
  
</div>

<div data-role="panel" id="myPanel">
    <h2>Options</h2>
    
  <?php if(isset($detail_news)) echo form_open("Pencarian/news");
        else if(isset($news)) echo form_open("Pencarian/news");
        else echo form_open("Pencarian"); ?>

    <input type="search" placeholder="<?php if(isset($kendaraan))echo 'Search Product';
    else if(isset($detail_product)) echo 'Search Product';
    else if(isset($news)) echo 'Search News';
    else if(isset($detail_news)) echo 'Search News';
    else if(isset($gor)) echo 'Search Product';
    else echo 'Search Product'; ?>" name="nama" id="search-header" value="<?php echo set_value('nama'); ?>"  data-inline="true" data-theme="c" />
  <?php echo form_close(); ?>

    <ul data-role="listview" style="background:#f9f9f9; " data-inset="true">
  
  <?php for ($i = 0; $i < count($kategorilist); ++$i) { ?> 
    <li><a href="<?php echo base_url('Kendaraan_android/kategori/'.$kategorilist[$i]->id) ?>"><?php echo $kategorilist[$i]->nama ?></a></li> 
  <?php } ?>

    </ul>
    
  </div>