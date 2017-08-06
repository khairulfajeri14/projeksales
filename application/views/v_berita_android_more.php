<?php $i=0; ?>
<div data-role="main"  class="ui-content">

 	<ul data-role="listview" style="background:#f4f4f4; padding-left:2%; padding-right:2%; padding-top:0.01%; padding-bottom:0.01%;" data-inset="true">
    	<h3><?php echo $beritalist[$i]->judul; ?></h3>
    	<?php echo $beritalist[$i]->tanggal; ?>
    	<div data-role="main"  class="ui-content">      <img width="100%" height="40%" class="image" src="<?php echo base_url('assets/gambar_posting/'.$beritalist[$i]->foto); ?>" />
    	</div>
    	<p><?php echo $beritalist[$i]->isi; ?></p>
  	</ul>

  
</div>