          <h1 class="page-header">Overview</h1>

          <h2 class="sub-header">Latest News</h2>
           
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th width="1%">No</th>
                <th class="col-md-5">Judul</th>
                <th class="col-md-2">Foto</th>
                <th class="col-md-2">Tanggal</th>
                <th class="col-md-1">Status</th>
                                                
                <th class="col-md-2">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = 0; $i < count($beritalist); ++$i) { ?>
                <tr>
                  <td><?php echo ($i+1); ?></td>
                    <td><?php echo $beritalist[$i]->judul; ?></td>
                    <td align="center">
                    <a href="<?php echo base_url().'assets/gambar_posting/'.$beritalist[$i]->foto ?>" class="perbesar"> 
                    <img src="<?php echo base_url().'assets/timthumb.php?src='?><?php echo base_url().'assets/gambar_posting/'.$beritalist[$i]->foto ?>&w=120&h=100" />
                    </a>
                    </td>
                    <td><?php echo $beritalist[$i]->tanggal; ?></td>
                    <td><?php echo $beritalist[$i]->status; ?></td>
                    <td><a href="<?php echo base_url().'Berita/edit_berita/'.$beritalist[$i]->id ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a> <a href="<?php echo base_url().'Berita/hapus_berita/'.$beritalist[$i]->id ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></a> </td>
                </tr>
                <?php } ?>
                

              </tbody>
            </table>


            
          </div>

<table style="color:blue;" border='1' class="col-md-12">
<tr>
<td></td>
</tr>
</table><br />
          <h2 class="sub-header">Latest Product</h2>
           
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th width="1%">No</th>
        <th class="col-md-1">Tanggal</th>
        <th class="col-md-2">Nama</th>
        <th class="col-md-1">Kategori</th>
        <th class="col-md-1">Pabrikan</th>
        
        <th class="col-md-1">Status</th>
        <th class="col-md-2">Foto</th>
        <th class="col-md-1">Harga</th>
        <th class="col-md-1">Opsi</th>
              </thead>
              <tbody>
                <?php for ($i = 0; $i < count($kendaraanlist); ++$i) { ?>
                <tr>
                    <td><?php echo ($i+1); ?></td>
                    <td><?php echo $kendaraanlist[$i]->tanggal; ?></td>
                    <td><?php echo $kendaraanlist[$i]->nama_kendaraan; ?></td>
                    <td><?php echo $kendaraanlist[$i]->nama; ?></td>
                    <td><?php echo $kendaraanlist[$i]->pabrikan; ?></td>
                  
                    <td><?php echo $kendaraanlist[$i]->status; ?></td>
                    <td align="center">
                    <a href="<?php echo base_url().'assets/gambar_posting/'.$kendaraanlist[$i]->foto ?>" class="perbesar"> 
                    <img src="<?php echo base_url().'assets/timthumb.php?src='?><?php echo base_url().'assets/gambar_posting/'.$kendaraanlist[$i]->foto ?>&w=120&h=100" />
                    </a>
                <td><?php echo $kendaraanlist[$i]->harga ?></td>
                    
                    <td>
                    <div class="btn-group">
                    <a href="<?php echo base_url().'kendaraan/edit_kendaraan/'.$kendaraanlist[$i]->id_kendaraan ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
                    <a href="<?php echo base_url().'kendaraan/hapus_kendaraan/'.$kendaraanlist[$i]->id_kendaraan ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </td>

                </tr>
                <?php } ?>
                

              </tbody>
            </table>

            
            
          </div>