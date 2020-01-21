  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b>
    </div>
    <strong>Copyright &copy; <?=date('Y');?> <a href="<?=base_url()?>">scegroup.in</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>

<!-- ./wrapper -->
<script src="<?=base_url()?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url()?>assets/admin/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url()?>assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?=base_url()?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>assets/admin/bower_components/chart.js/Chart.js"></script>
<script src="<?=base_url()?>assets/admin/dist/js/pages/dashboard2.js"></script>
<script src="<?=base_url()?>assets/admin/dist/js/demo.js"></script>
<script src="<?=base_url()?>assets/admin/bower_components/ckeditor/ckeditor.js"></script>
<script src="<?=base_url()?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?=base_url()?>assets/admin/admin/bower_components/ckeditor/ckeditor.js"></script>
<script src="<?=base_url()?>assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    CKEDITOR.replace('Information');
  });
</script>
	<script>
    $(function () {
      CKEDITOR.replace('Information1');
      $('.textarea').wysihtml5();
    })
  </script>
<script>
  $(function () {
    $('.DataTable').DataTable()
    $('.table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'columnDefs': [{ 'orderable': false, 'targets': 0 }], // hide sort icon on header of firstcolumn
	    'aaSorting': [[1]] // start to sort data in second column
    })
  });

  $(document).ready(function() {
    $(".alert").fadeTo(2000, 500).slideUp(500, function() {
      $(".alert").slideUp(500);
    });

    $('.datepicker').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    });

  });
</script>
<script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  });
</script>
</body>
</html>
