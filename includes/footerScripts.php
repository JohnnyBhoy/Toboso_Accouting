<!-- ./wrapper -->
<?php include '../includes/phpSource/addScripts.php';
include '../includes/modals.php';
?>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../includes/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../includes/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../includes/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../includes/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../includes/plugins/raphael/raphael.min.js"></script>
<script src="../includes/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../includes/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- Select2 -->
<script src="../includes/plugins/select2/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="../includes/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard -->
<script src="../includes/dist/js/pages/dashboard2.js"></script>
            <!-- jQuery -->
            <script src="../includes/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../includes/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../includes/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../includes/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../includes/plugins/jszip/jszip.min.js"></script>
<script src="../includes/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../includes/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../includes/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../includes/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../includes/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../includes/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>

</body>
</html>