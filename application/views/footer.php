 <footer class="main-footer">
   <strong>Copyright &copy; 2020-2021 <a href="#">Ezone Solutions</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
   </div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

 <!-- Bootstrap 4 -->
 <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
 <!-- ChartJS -->
 <script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
 <!-- Sparkline -->
 <script src="<?php echo base_url('assets/plugins/sparklines/sparkline.js') ?>"></script>
 <!-- JQVMap -->
 <script src="<?php echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
 <!-- jQuery Knob Chart -->
 <script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
 <!-- daterangepicker -->
 <script src="<?php echo base_url('assets/plugins/moment/moment.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
 <!-- Summernote -->
 <script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
 <!-- overlayScrollbars -->
 <script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url('assets/dist/js/adminlte.js') ?>"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url('assets/dist/js/demo.js') ?>"></script>
 <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
 <script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
 <!-- DATE PICKER FROM https://gijgo.com/datepicker/example/bootstrap-4 BY CHOLITHA -->
 <script src="<?php echo base_url('assets/build/js/gijgo.min.js') ?>" type="text/javascript"></script>

 <!-- Bootstrap Switch -->
<script src="<?php echo base_url('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>"></script>


 <!-- Page script -->
 <script>
   $(function() {
     //Date range picker
     $('#expireDate').datepicker({
       uiLibrary: 'bootstrap4'
     });
     $('#reservation').daterangepicker();
     $("input[data-bootstrap-switch]").each(function() {
       $(this).bootstrapSwitch('state', $(this).prop('checked'));
     });
   })
 </script>

 <script>
   $(function() {
     $("#usergrid").DataTable();
     $("#debtgrid").DataTable();
     $("#credgrid").DataTable();
     $("#invoicegrid").DataTable();
     $("#itemGrid").DataTable();
     $("#mappingGrid").DataTable();
     $("#grnItemsGrid").DataTable();
   });
 </script>

 </body>

 </html>