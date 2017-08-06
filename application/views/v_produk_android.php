<div data-role="main"  class="ui-content">
	<?php for ($i = 0; $i < count($kendaraanlist); ++$i) { ?>  
 	<ul data-role="listview" style="background:#f9f9f9; " data-inset="true">
    	
    	<a href="<?php echo base_url().'Kendaraan_android/more/'.$kendaraanlist[$i]->id_kendaraan ?>"><img width="100%" height="40%" class="image" src="<?php echo base_url('assets/gambar_posting/'.$kendaraanlist[$i]->foto); ?>" /></a>
    	
    	<b><div style="font-size: 25px; padding-left:2%; padding-right:2%; "><?php echo $kendaraanlist[$i]->nama_kendaraan; ?></div></b>
  	</ul>

  	<?php } ?>

  
</div>