		      <h1 class="page-header">Produk</h1> <div align="right"><a href="<?php echo base_url() ?>Kendaraan/tulis_kendaraan" class="btn btn-success">Create Produk</a></div><br />
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                 <tr>
                    <th width="1%">ID</th>
				<th class="col-md-1">Tanggal</th>
				<th class="col-md-2">Nama</th>
				<th class="col-md-1">Kategori</th>
				<th class="col-md-1">Pabrikan</th>
				
				<th class="col-md-1">Status</th>
				<th class="col-md-2">Foto</th>
				<th class="col-md-1">Harga</th>
				<th class="col-md-1">Opsi</th>	
                    </tr>
              </thead>
              <tbody>
              <?php for ($i = 0; $i < count($kendaraanlist); ++$i) { ?>
                <tr>
                    <td><?php echo $kendaraanlist[$i]->id_kendaraan; ?></td>
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
             <div class="col-md-8 ">
            <?php echo $pagination; ?>
            
        </div>
          </div>