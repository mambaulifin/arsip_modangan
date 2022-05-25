<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Input Data Surat Keterangan</title>
   <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../dist/css/adminlte.min.css">
   <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <?php include 'menu-masuk.html'; ?>

      <!--  Header Konten -->
      <div class="content-wrapper">
         <div class="content-header">
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0 font-weight-bold badge badge-dark border"> Input Data Surat Masuk</h1>
                     </div>
                  </div>
               </div>
            </section>
         </div>

         <!-- Isi Konten -->
         <section class="content">
            <div class="container-fluid">
               <?php
               require '../config/config_smsk.php';
               if (isset($_POST['submit'])) {
                  if (tambah_smsk($_POST) > 0) {
               ?>
                     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                     <script>
                        swal({
                              title: "Berhasil!",
                              text: "Data Sudah Ditambahkan!",
                              icon: "success",
                              button: "Oke",
                           })
                           .then((value) => {
                              document.location.href = 'data-smsk.php';
                           });
                     </script>
                  <?php
                  } else { ?>

                     <script>
                        swal({
                              title: "Gagal!!",
                              text: "Data Sudah Ada!!",
                              icon: "Warning",
                              button: "Oke",
                           })
                           .then((value) => {
                              document.location.href = 'input-smsk.php';
                           });
                     </script>
               <?php
                  }
               }
               ?>
               <form action="" method="post">
                  <table class="table text-dark">
                     <tr>
                        <td><label for="tgl_pembuatan">Tanggal Pembuatan</label></td>
                        <td><input type="date" name="tgl_pembuatan" id="tgl_pembuatan" class="form-control" required></td>
                     </tr>
                     <tr>
                        <td class="col-lg-2"><label for="no_surat">Nomor Surat</label></td>
                        <td><input type="text" name="no_surat" id="no_surat" class="form-control" value="-/-/409.044/2014" required></td>
                     </tr>
                     <tr>
                        <td><label for="sifat">Sifat</label></td>
                        <td>
                           <?php
                           $sifat = array('Penting', 'Segera');

                           echo "<select name='sifat' id='sifat' class='form-control'>";
                           foreach ($sifat as $sf) {
                              echo "<option value='$sf'>$sf</option>";
                           }
                           echo "</select>";
                           ?>
                        </td>
                     </tr>
                     <tr>
                        <td><label for="lampiran">Lampiran</label></td>
                        <td>
                           <?php
                           $lampiran = array(' - ','1 Bendel', '1 Bendel', '2 Bendel', '3 Bendel', '4 Bendel');
                           echo "<select name='lampiran' id='lampiran' class='form-control'>";
                           foreach ($lampiran as $jk) {
                              echo "<option value='$jk'>$jk</option>";
                           }
                           echo "</select>";
                           ?>
                        </td>
                     </tr>
                     <tr>
                        <td><label for="perihal">Perihal</label></td>
                        <td><input type="text" name="perihal" id="perihal" class="form-control" required></td>
                     </tr>
                     <tr>
                        <td><label for="from">Dari Instansi</label></td>
                        <td><input type="text" name="from" id="from" class="form-control" required></td>
                     </tr>
                     <tr>
                        <td><label for="keterangan">Keterangan</label></td>
                        <td><input type="text" name="keterangan" id="keterangan" class="form-control" required></td>
                     </tr>
                     <tr>
                        <td colspan="2">
                           <div class="d-flex justify-content-center">
                              <button type="submit" name="submit" class="btn btn-outline-dark col-lg-2 ">
                                 <i class="far fa-check-circle font-weight-bold"> Submit</i>
                              </button>
                           </div>
                        </td>
                     </tr>
                  </table>
               </form>
            </div>
         </section>
      </div>
   </div>

   <footer class="main-footer dark-mode">
      <span><strong>Copyright &copy; <a href="#">Buwung Puyuh</a>.</strong>All rights reserved.</span>
      <div class="float-right d-none d-sm-inline-block">
         <b>Universitas Islam Balitar</b>
      </div>
   </footer>


   <script src="../plugins/jquery/jquery.min.js"></script>
   <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
   <script>
      $.widget.bridge('uibutton', $.ui.button)
   </script>
   <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <script src="../dist/js/adminlte.js"></script>

</body>

</html>