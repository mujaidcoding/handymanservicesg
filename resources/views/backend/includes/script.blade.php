 <!-- jQuery -->
 <script src="{{ asset('/') }}Admin/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="{{ asset('/') }}Admin/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
    $.widget.bridge('uibutton', $.ui.button);
 </script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('/') }}Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- Sparkline -->
 <script src="{{ asset('/') }}Admin/plugins/sparklines/sparkline.js"></script>
 <!-- JQVMap -->

 <script src="{{ asset('/') }}Admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="{{ asset('/') }}Admin/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="{{ asset('/') }}Admin/plugins/moment/moment.min.js"></script>
 <script src="{{ asset('/') }}Admin/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="{{ asset('/') }}Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="{{ asset('/') }}Admin/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="{{ asset('/') }}Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('/') }}Admin/js/adminlte.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{ asset('/') }}Admin/js/demo.js"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{ asset('/') }}Admin/js/pages/dashboard.js"></script>

 <script src="{{ asset('/') }}Admin/plugins/datatables/jquery.dataTables.js"></script>
 <script src="{{ asset('/') }}Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

 <script>
    $(function() {
       // Summernote
       $('#addDescription').summernote()

       // CodeMirror
       CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
          mode: "htmlmixed",
          theme: "monokai"
       });
    })
 </script>

 <script>
    $(function() {
       $("#example1").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
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
    $(document).ready(function() {
       // Attach a click event handler to the "Yes, Delete!" button
       $('#deleteButton').on('click', function() {
          // Submit the delete form when the button is clicked
          $('#deleteForm').submit();
       });
    });
 </script>
