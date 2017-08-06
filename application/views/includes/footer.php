  <div data-role="footer" data-theme="a" data-position="fixed">
    <div data-role="navbar">
      <ul>
        <li><a href="<?php echo base_url('Berita_android') ?>">News</a></li>
        <li><a href="<?php echo base_url('Kendaraan_android') ?>">Product</a></li>
        <li><a href="<?php echo base_url('Contact_android') ?>">Contact</a></li>
      </ul>
    </div>
  </div>
</div>
</div>

</body>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url(); ?>assets/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">


$(document).ready(function() {
	$("p").on("swipeleft",function(){
  alert("You swiped left!");
});

    //datepicker
    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });


});

<script type="text/javascript" src="<?php echo base_url('assets/fancy/lib/jquery-1.10.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/fancy/source/jquery.fancybox.js?v=2.1.5')?>"></script>

<link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/fancy/source/jquery.fancybox.css?v=2.1.5')?> media="screen" />

<script type="text/javascript">
  
  $(document).ready(function(){
    $(".perbesar").fancybox();
  });

</script>    

</script>
</html>
