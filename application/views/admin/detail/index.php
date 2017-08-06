		      <h1 class="page-header">Detail</h1> <div align="right"><a href="<?php echo base_url() ?>Detail/tulis_detail" class="btn btn-success">Create Detail</a></div><br />
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <tr>
                    <th width="1%">No</th>
                    <th class="col-md-1">ID Kendaraan</th>
                     <th class="col-md-1">Kendaraan</th>
				<th class="col-md-2">Deskripsi</th>
				<th class="col-md-1">Opsi</th>
                                                
                    </tr>
              </thead>
              <tbody>
                <?php for ($i = 0; $i < count($detaillist); ++$i) { ?>
                <tr>
                    <td><?php echo ($page+$i+1); ?></td>
                    <td><?php echo $detaillist[$i]->id_kendaraan; ?></td>
                     <td><?php echo $detaillist[$i]->nama_kendaraan; ?></td>
                    <td><?php echo $detaillist[$i]->deskripsi; ?></td>
                    
                    <td>
                    <div class="btn-group">
                    <a href="<?php echo base_url().'detail/edit_detail/'.$detaillist[$i]->id_kendaraan ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
                    <a href="<?php echo base_url().'detail/hapus_detail/'.$detaillist[$i]->id_kendaraan ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
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