<?php
require '../config/config_sklr.php';
$id = $_GET["id"];
$info = query("SELECT * FROM surat_keluar WHERE id_sklr = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pemohonn Surat Keterangan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include 'menu-sklr.html'; ?>

        <div class="content-wrapper">
            <!--  Header Konten -->
            <div class="content-header">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class=" badge badge-dark border">Info Detail</h1>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Isi Konten -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <!-- Main node for this component -->
                            <div class="timeline">
                                <div>
                                    <a href="data-sklr.php" class="btn btn-outline-dark font-weight-bold bg-dark ml-3"><i class="fas fa-arrow-circle-left"></i></a>
                                    <div class="timeline-item mt-2 bg-light">
                                        <div class="timeline-body ml-3">
                                            <div class="row g-2">
                                                <div class="col-lg-2">
                                                    <p>Tanggal Pembuatan</p>
                                                    <p>Nomor Surat</p>
                                                    <p>Sifat</p>
                                                    <p>Lampiran</p>
                                                    <p>Perihal</p>
                                                    <p>Dikirim Kepada</p>
                                                    <p>Keterangan</p>
                                                </div>

                                                <div class="col-lg-3">
                                                    <p><?php echo $info["tgl_pembuatan"]; ?></p>
                                                    <p><?php echo $info["no_surat"]; ?></p>
                                                    <p><?php echo $info["sifat"]; ?></p>
                                                    <p><?php echo $info["lampiran"]; ?></p>
                                                    <p><?php echo $info["perihal"]; ?></p>
                                                    <p><?php echo $info["send"]; ?></p>
                                                    <p><?php echo $info["keterangan"]; ?></p>
                                                </div>
                                                <div class="d-flex justify-content-center mb-3">
                                                    <div class="d-grid">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
</body>

</html>