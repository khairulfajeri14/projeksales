<h1 class="page-header">Spesefikasi</h1> <div align="right"><a href="<?php echo base_url() ?>Spek/tulis_spek" class="btn btn-success">Create Spesefikasi</a></div><br />
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                    <th width="1%">No</th>

                    <th class="col-md-1">ID Kendaraan</th>
                    <th class="col-md-1">Kendaraan</th>
				<th class="col-md-2">Deskripsi</th>
				<th class="col-md-1">Opsi</th>
                    </tr>
               </thead>
               <tbody>
               	<?php for ($i = 0; $i < count($speklist); ++$i) { ?>
                <tr>
                    <td><?php echo ($page+$i+1); ?></td>
                    <td><?php echo $speklist[$i]->id_kendaraan; ?></td>
                    <td><?php echo $speklist[$i]->nama_kendaraan; ?></td>
                    <td><?php echo $speklist[$i]->deskripsi; ?></td>
                    <td>
                    <div class="btn-group">
                    <a href="<?php echo base_url().'spek/edit_spek/'.$speklist[$i]->id_kendaraan ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
                    <a href="<?php echo base_url().'spek/hapus_spek/'.$speklist[$i]->id_kendaraan ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </td>

                </tr>
                <?php } ?>
               </tbody>