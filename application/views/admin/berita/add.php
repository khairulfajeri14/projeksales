
  <div class="page-header ">
    <h1 class="page-header">Berita</h1> <h4>Tulis Berita</h4>
  </div>

  <?php echo validation_errors() ?>
  <?php echo form_open_multipart('Berita/berita_act'); ?>

  <div class="table-responsive col-md-10">

  <table class="table table-striped">
    <tr>
      <th>Tanggal</th>
      <td><input  placeholder="yyyy-mm-dd" type="text" name="tanggal" class="form-control datepicker"></td>
    </tr>
    <tr>
      <th>Judul</th>
      <td><input type="text" name="judul" class="form-control"></td>
    </tr>
    <tr>
      <th>Isi</th>
      <td>
        <textarea class=" ckeditor" id="ckeditor" name="isi"></textarea>
      </td>
    </tr>
    <tr>
      <th>Status</th>
      <td>
      
        <select class="form-control" name="status" id="status">
        <option value="publish">Publikasikan</option>
        <option value="draft">Simpan sebagai draft</option>
      </select>
      </td>
    </tr>
    
    <tr>
      <th>Foto</th>
      <td>
        <input type="file" value="Posting" class="form-control" name="foto">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <input type="submit" value="Posting" class="btn btn-sm btn-success">
      </td>
    </tr>
  </table>
  <?php echo form_close(); ?>
  
</div>
