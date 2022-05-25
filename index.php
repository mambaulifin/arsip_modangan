<?php
include 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>FINAL</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <?php include 'menu.html'; ?>

      <!--  Header Konten -->
      <div class="content-wrapper">
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0 font-weight-bold">Dashboard</h1>
                  </div>
               </div>
            </div>
         </div>

         <!-- Isi Konten -->
         <section class="content">
            <div class="container-fluid">
               <div class="row font-weight-bold">
                  <div class="col-lg-3 col-6">
                     <div class="small-box bg-info">
                        <div class="inner">
                           <h3><?= $count1; ?></h3>
                           <p>Surat Keterangan</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-bag"></i>
                        </div>
                        <a href="surat-keterangan/data-sk.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>

                  <div class="col-lg-3 col-6">
                     <div class="small-box bg-success">
                        <div class="inner">
                           <h3><?= $count3; ?></h3>
                           <p>Surat Masuk</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="surat-masuk/data-smsk.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>

                  <div class="col-lg-3 col-6">
                     <div class="small-box bg-gradient-warning">
                        <div class="inner">
                           <h3><?= $count2 ?></h3>
                           <p>Surat Keluar</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-person-add"></i>
                        </div>
                        <a href="surat-keluar/data-sklr.php" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>

                  <div class="col-lg-3 col-6">
                     <div class="small-box bg-danger">
                        <div class="inner">
                           <h3><?= $count5 ?></h3>
                           <p>Surat Pindah Masuk</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="surat-pindah-masuk/data.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6">
                     <div class="small-box bg-gradient-primary">
                        <div class="inner">
                           <h3><?= $count4 ?></h3>
                           <p>Surat Pindah Keluar</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="surat-pindah-keluar/data.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6">
                     <div class="small-box bg-gradient-success">
                        <div class="inner">
                           <h3><?= $count6 ?></h3>
                           <p>Keputusan Kepala Desa</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="keputusan-kepdes/data.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6">
                     <div class="small-box bg-gradient-warning">
                        <div class="inner">
                           <h3><?= $count7 ?></h3>
                           <p>Data Peraturan Desa</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="peraturan-desa/data.php" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-6">
                     <div class="small-box bg-gradient-danger">
                        <div class="inner">
                           <h3><?= $count8 ?></h3>
                           <p>Data Peraturan Kepala Desa</p>
                        </div>
                        <div class="icon">
                           <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="peraturan-kepdes/data.php" class="small-box-footer text-white">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>

      <footer class="main-footer dark-mode">
         <span><strong>Copyright &copy; <a href="#">Buwung Puyuh</a>.</strong>All rights reserved.</span>
         <div class="float-right d-none d-sm-inline-block">
            <b>Universitas Islam Balitar</b>
         </div>
      </footer>
   </div>
   <script src="plugins/jquery/jquery.min.js"></script>
   <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
   <script>
      $.widget.bridge('uibutton', $.ui.button)
   </script>
   <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <script src="dist/js/adminlte.js"></script>
</body>

</html>