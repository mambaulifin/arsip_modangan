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
      <?php include 'menu-sk.html'; ?>

      <!--  Header Konten -->
      <div class="content-wrapper">
         <div class="content-header">
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0 font-weight-bold badge badge-dark border"> Input Data</h1>
                     </div>
                  </div>
               </div>
            </section>
         </div>

         <!-- Isi Konten -->
         <section class="content">
            <div class="container-fluid">
            <?php
               require '../config/config_sk.php';
               if (isset($_POST['submit'])) {
                  if (tambah_sk($_POST) > 0) {
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
                              document.location.href = 'data-sk.php';
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
                              document.location.href = 'input-sk.php';
                           });
                     </script>
               <?php
                  }
               }
               ?>
               <form action="" method="post">
                  <table class="table text-dark">
                     <tr>
                        <td class="col-lg-2"><label for="no_surat_sk">Nomor Surat</label></td>
                        <td><input type="text" name="no_surat_sk" id="no_surat_sk" class="form-control" value="-/-/409.19.9/2022" required></td>
                     </tr>
                     <tr>
                        <td><label for="tgl_pembuatan_sk">Tanggal Pembuatan</label></td>
                        <td><input type="date" name="tgl_pembuatan_sk" id="tgl_pembuatan_sk" class="form-control" required></td>
                     </tr>
                     <tr>
                        <td><label for="nama_sk">Nama</label></td>
                        <td><input type="text" name="nama_sk" id="nama_sk" class="form-control" required></td>
                     </tr>
                     <tr>
                        <td><label for="jk_sk">Jenis Kelamin</label></td>
                        <td>
                           <?php
                           $jenis_sk = array('Laki - Laki', 'Perempuan');

                           echo "<select name='jk_sk' id='jk_sk' class='form-control'>";
                           foreach ($jenis_sk as $jk) {
                              echo "<option value='$jk'>$jk</option>";
                           }
                           echo "</select>";
                           ?>
                        </td>
                     </tr>
                     <tr>
                        <td><label for="ttl_sk">Tanggal Lahir</label></td>
                        <td><input type="date" name="ttl_sk" id="ttl_sk" class="form-control" required></td>
                     </tr>
                     <tr>
                        <td><label for="agama_sk">Agama</label></td>
                        <td>
                           <?php
                           $agama_sk = array('Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Konghucu');
                           echo "<select name='agama_sk' id='agama_sk' class='form-control'>";
                           foreach ($agama_sk as $jk) {
                              echo "<option value='$jk'>$jk</option>";
                           }
                           echo "</select>";
                           ?>
                        </td>
                     </tr>
                     <tr>
                        <td><label for="status_sk">Status</label></td>
                        <td>
                           <?php
                           $status_sk = array('Kawin Tercatat', 'Belum Kawin', 'Cerai Hidpup', 'Cerai Mati');
                           echo "<select name='status_sk' id='status_sk' class='form-control'>";
                           foreach ($status_sk as $stts) {
                              echo "<option value='$stts'>$stts</option>";
                           }
                           echo "</select>";
                           ?>
                        </td>
                     </tr>
                     <tr>
                        <td><label for="alamat_sk">Alamat</label></td>
                        <td><input type="text" name="alamat_sk" id="alamat_sk" class="form-control" required></td>
                     </tr>
                     <tr>
                        <td><label for="ket_sk">Keterangan</label></td>
                        <td><input type="text" name="ket_sk" id="ket_sk" class="form-control" required></td>
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