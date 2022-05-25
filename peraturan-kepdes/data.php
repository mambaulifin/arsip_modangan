<?php
require '../config/config_peraturan_kepdes.php';
$data_smsk = query("SELECT * FROM peraturan_kepdes ORDER BY id_kd DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Peraturan Kepala Desa</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../dist/css/adminlte.min.css">
   <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

   <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <?php include_once 'menu.html'; ?>

      <div class="content-wrapper">
         <!--  Header Konten -->
         <div class="content-header">
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="font-weight-bold badge badge-dark border">Data Peraturan Kepala Desa</h1>
                     </div>
                  </div>
               </div>
            </section>
         </div>

         <!-- Isi Konten -->
         <section class="content">
            <div class="container-fluid">
               <div class="card-body">
                  <table class="table table-bordered table-striped" id="example1">
                     <thead class="thead-dark">
                        <tr>
                           <th>Nomor Register</th>
                           <th>Tentang</th>
                           <th>Uraian Singkat</th>
                           <th>Tanggal BPD</th>
                           <th>Tanggal Dilaporkan</th>
                           <th>Keterangan</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($data_smsk as $key) : ?>
                           <tr>
                              <td><?php echo $key["nomor_register"]; ?></td>
                              <td><?php echo $key["tentang"]; ?></td>
                              <td><?php echo $key["uraian"]; ?></td>
                              <td><?php echo $key["tgl_bpd"]; ?></td>
                              <td><?php echo $key["tgl_lapor"]; ?></td>
                              <td><?php echo $key["keterangan"]; ?></td>
                              <td>
                                 <div class="d-flex justify-content-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                       <a href="edit.php?id=<?= $key["id_kd"]; ?>" class="text-white btn btn-primary btn-sm"><i class="fas fa-edit text-white"></i> Edit</a>
                                       <a href="hapus.php?id=<?= $key["id_kd"]; ?>" class="text-white btn btn-warning btn-sm hapus"><i class="fa fa-trash-alt text-white"></i> Hapus</a>

                                       <?php if (isset($_GET["m"])) : ?>
                                          <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
                                       <?php endif; ?>

                                       <?php if (isset($_GET["n"])) : ?>
                                          <div class="flash-data2" data-flashdata="<?= $_GET['n']; ?>"></div>
                                       <?php endif; ?>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
         </section>
      </div>
   </div>

   <footer class="main-footer dark-mode">
      <div class="float-right d-none d-sm-inline-block">
         <b>Universitas Islam Balitar</b>
      </div>
      <span><strong>Copyright &copy; <a href="#">Buwung Puyuh</a>.</strong>All rights reserved.</span>
   </footer>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="../plugins/jquery/jquery.min.js"></script>
   <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <script src="../dist/js/adminlte.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


   <!-- DataTables  & Plugins -->
   <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
   <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
   <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script src="../plugins/jszip/jszip.min.js"></script>
   <script src="../plugins/pdfmake/pdfmake.min.js"></script>
   <script src="../plugins/pdfmake/vfs_fonts.js"></script>
   <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
   <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
   <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

   <script>
      $(function() {
         $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print", "colvis"]
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
      $('.hapus').on('click', function(e) {

         const href = $(this).attr('href');
         e.preventDefault();

         swal({
               title: "Data akan Dihapus?",
               icon: "warning",
               buttons: true,
               dangerMode: true,
            })
            .then((willDelete) => {
               if (willDelete) {
                  document.location.href = href;
               }
            });
      });
      const flashdata = $('.flash-data').data('flashdata')
      if (flashdata) {
         swal({
            title: "Data Berhasil Dihapus!",
            text: " ",
            icon: "success",
         });
      }
   </script>
   <script>
      const flashdata2 = $('.flash-data2').data('flashdata')
      if (flashdata2) {
         swal({
            title: "Data Gagal di Edit!",
            text: "Ubah data terlebih dahulu!",
            icon: "warning",
         })
      }
   </script>
</body>

</html>