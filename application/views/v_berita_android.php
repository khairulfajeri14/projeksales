<div data-role="main"  class="ui-content">
	<?php foreach ($beritalist as $value) { ?>  
 	<ul data-role="listview" style="background:#f4f4f4; padding-left:2%; padding-right:2%; padding-top:0.01%; padding-bottom:0.01%;" data-inset="true">
    	<h3><?php echo $value->judul; ?></h3>
    	<?php echo $value->tanggal; ?>
    	<div data-role="main"  class="ui-content">
    	<a href="<?php echo base_url().'Berita_android/more/'.$value->id ?>">      <img width="100%" height="40%" class="image" src="<?php echo base_url('assets/gambar_posting/'.$value->foto); ?>" /></a>
    	</div>
    	<p><?php echo substr($value->isi,0,100); ?>... </p><a href="<?php echo base_url().'Berita_android/more/'.$value->id; ?>">More</a><p></p>
  	</ul>

  	<?php } ?>

  
</div>