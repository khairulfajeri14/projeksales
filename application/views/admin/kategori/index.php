		      <h1 class="page-header">Category</h1> <div align="right"><a href="<?php echo base_url() ?>Kategori/tulis_kategori" class="btn btn-success">Create Category</a></div><br />
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <tr>
                    <th width="2%">ID</th>
				<th class="col-md-1">Nama</th>
				<th class="col-md-1">Pabrikan</th>
												
				<th class="col-md-1">Opsi</th>	
                    </tr>
              </thead>
              <tbody>
                <?php for ($i = 0; $i < count($kategorilist); ++$i) { ?>
                <tr>
                    <td><?php echo $kategorilist[$i]->id; ?></td>
                    <td><?php echo $kategorilist[$i]->nama; ?></td>
                    <td><?php echo $kategorilist[$i]->pabrikan; ?></td>
                    
                    <td>
                    <div class="btn-group">
                    <a href="<?php echo base_url().'kategori/edit_kategori/'.$kategorilist[$i]->id ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
                    <a href="<?php echo base_url().'kategori/hapus_kategori/'.$kategorilist[$i]->id ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
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