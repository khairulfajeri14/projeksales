<?php $i=0; ?>
<div data-role="main"  class="ui-content" id="pageone">

 	<ul data-role="listview" style="background:#f4f4f4; padding-left:2%; padding-right:2%; padding-top:0.01%; padding-bottom:0.01%;" data-inset="true">
    	<h3><?php echo $kendaraanlist[$i]->nama_kendaraan; ?></h3>
    	<?php echo $kendaraanlist[$i]->tanggal; ?>
<a alt="Skaret View" href="#myPopup" data-rel="popup" data-position-to="window">
      	<div data-role="main"  class="ui-content">       <img width="100%" height="40%" class="image" src="<?php echo base_url('assets/gambar_posting/'.$kendaraanlist[$i]->foto); ?>" />
    	</div></a>
        <div data-role="popup" id="myPopup">
      <p>This is my picture!</p>
      <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="<?php echo base_url('assets/gambar_posting/'.$kendaraanlist[$i]->foto); ?>" style="width:100%;height:100%;" alt="Skaret View">
    </div>
    <table border="0" width="100%">
    <tr>

    	<td width="30%">Harga</td><td width="70%">: <?php echo $kendaraanlist[$i]->harga; ?></td>
    </tr>
    <tr>
    	<td>Type</td><td>: <?php echo $kendaraanlist[$i]->nama; ?></td>
    </tr>
    <tr>
      <td>Pabrikan</td><td>: <?php echo $kendaraanlist[$i]->pabrikan; ?></td>
    <tr>
      <td>DP</td>
    </tr>
    	<td>Angsuran</td><td>:</td>
    </tr>
    </table>
      <table width="100%" border="1">
      <tr>
        <th width="50%">Lama</th>
        <th width="50%">Besar</th>
    	</tr>
      <tr>
        <td align="center"><?php echo $kendaraanlist[$i]->lama; ?></td>
        <td><?php echo $kendaraanlist[$i]->besar; ?></td>
      </tr>
      <tr>
        <td><?php echo $kendaraanlist[$i]->lama2; ?></td>
        <td><?php echo $kendaraanlist[$i]->besar2; ?></td>
      </tr>
      <tr>
        <td><?php echo $kendaraanlist[$i]->lama3; ?></td>
        <td><?php echo $kendaraanlist[$i]->besar3; ?></td>
      </tr>
      </table><p></p>
      
    	<p>Deskripsi: <?php echo $kendaraanlist[$i]->deskripsi; ?></p>
  	</ul>

    
  
</div>