		      <h1 class="page-header">Angsuran</h1> <div align="right"><a href="<?php echo base_url() ?>Angsuran/tulis_angsuran" class="btn btn-success">Create Angsuran</a></div><br />
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                
                    <tr>
                    <th width="1%">No</th>
				<th class="col-md-2">ID Kendaraan</th>
                <th class="col-md-2">Kendaraan</th>
				<th class="col-md-1">DP</th>
        <th class="col-md-2">Lama Angsuran</th>
				
				<th class="col-md-3">Besar Angsuran</th>
				<th class="col-md-1">Opsi</th>
                                              
                    </tr>
              </thead>
              <tbody>
                <?php for ($i = 0; $i < count($angsuranlist); ++$i) { ?>
                <tr>
                    <td><?php echo ($page+$i+1); ?></td>
                    <td><?php echo $angsuranlist[$i]->id_produk; ?></td>
                    <td><?php echo $angsuranlist[$i]->nama_kendaraan; ?></td>
                    <td><?php echo $angsuranlist[$i]->dp; ?></td>
                    <td><?php echo $angsuranlist[$i]->lama; ?></td>
                    
                    <td><?php echo $angsuranlist[$i]->besar; ?></td>
                    
                    <td rowspan="3">
                    <div class="btn-group">
                    <a href="<?php echo base_url().'Angsuran/edit_angsuran/'.$angsuranlist[$i]->id_detail_a ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
                    <a href="<?php echo base_url().'Angsuran/hapus_angsuran/'.$angsuranlist[$i]->id_detail_a ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </td>
                </tr>
                
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $angsuranlist[$i]->lama2; ?></td>
                    
                    <td><?php echo $angsuranlist[$i]->besar2; ?></td>
                     
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $angsuranlist[$i]->lama3; ?></td>
                    
                    <td><?php echo $angsuranlist[$i]->besar3; ?></td>
                     
                </tr>
                <?php } ?>
                

              </tbody>
            </table>
             <div class="col-md-8 ">
            <?php echo $pagination; ?>
            
        </div>
          </div>