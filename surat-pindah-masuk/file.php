<?php
require '../config/config_spmsk.php';
$id = $_GET["id"];
$info = query("SELECT * FROM surat_pindah_masuk WHERE id_klr = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Pemohon Surat Pindah Masuk</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include 'menu.html'; ?>

        <div class="content-wrapper">
            <!--  Header Konten -->
            <div class="content-header">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class=" badge badge-dark border">Info Detail <?= $info['nama']; ?></h1>
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
                                    <a href="data.php" class="btn btn-outline-dark font-weight-bold bg-dark ml-3"><i class="fas fa-arrow-circle-left"></i></a>
                                    <div class="timeline-item mt-2 bg-light">
                                        <div class="timeline-body ml-3">
                                            <div class="row g-2">
                                                <div class="col-lg-2">
                                                    <p>Nama</p>
                                                    <p>Jenis Kelamin</p>
                                                    <p>Tempat Lahir</p>
                                                    <p>Tanggal Lahir</p>
                                                    <p>Status</p>
                                                    <p>Agama</p>
                                                    <p>Pekerjaan</p>
                                                    <p>NIK</p>
                                                    <p>Alamat Asal</p>
                                                    <p>Alamat Tujuan</p>
                                                    <p>Tanggal Pindah</p>
                                                    <p>Alasan</p>
                                                    <p>Foto</p>
                                                </div>

                                                <div class="col-lg-3">
                                                    <p><?= $info["nama"]; ?></p>
                                                    <p><?= $info["jk"]; ?></p>
                                                    <p><?= $info["tempat"]; ?></p>
                                                    <p><?= $info["tgl"]; ?></p>
                                                    <p><?= $info["status"]; ?></p>
                                                    <p><?= $info["agama"]; ?></p>
                                                    <p><?= $info["pekerjaan"]; ?></p>
                                                    <p><?= $info["nik"]; ?></p>
                                                    <p><?= $info["almt_asal"]; ?></p>
                                                    <p><?= $info["tujuan"]; ?></p>
                                                    <p><?= $info["tgl_pndh"]; ?></p>
                                                    <p><?= $info["alasan"]; ?></p>
                                                    <p><img src="img/<?= $info["foto"]; ?>" class="img-thumbnail"></p>
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