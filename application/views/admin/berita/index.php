		      <h1 class="page-header">Berita</h1> <div align="right"><a href="<?php echo base_url() ?>Berita/tulis_berita" class="btn btn-success">Create Article</a></div><br />
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th width="1%">No</th>
                <th class="col-md-3">Judul</th>
                <th class="col-md-2">Foto</th>
                <th class="col-md-2">Tanggal</th>
                <th class="col-md-2">Status</th>
                                                
                <th class="col-md-2">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = 0; $i < count($beritalist); ++$i) { ?>
                <tr>
                  <td><?php echo ($page+$i+1); ?></td>
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
             <div class="col-md-8 ">
            <?php echo $pagination; ?>
            
        </div>
          </div>