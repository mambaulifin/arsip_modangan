<?php
require '../config/config_sklr.php';
$id = $_GET["id"];
$edit = query("SELECT * FROM surat_keluar WHERE id_sklr = $id")[0];
?>

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
        <?php include 'menu-sklr.html'; ?>

        <!--  Header Konten -->
        <div class="content-wrapper">
            <div class="content-header">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 font-weight-bold badge badge-dark border"> Edit Data Surat Keluar</h1>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Isi Konten -->
            <section class="content">
                <div class="container-fluid">
                    <?php

                    if (isset($_POST['submit'])) {
                        if (edit_sklr($_POST) > 0) {
                    ?>
                            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                            <script>
                                swal({
                                        title: "Berhasil!",
                                        text: "Data Sudah Diedit!",
                                        icon: "success",

                                    })
                                    .then((value) => {
                                        document.location.href = 'data-sklr.php';
                                    });
                            </script>
                        <?php
                        } else { ?>
                            <script>
                                document.location.href = 'data-sklr.php?n=1';
                            </script>
                    <?php
                        }
                    }
                    ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $edit["id_sklr"]; ?>">
                        <table class="table text-dark">
                            <tr>
                                <td><label for="tgl_pembuatan">Tanggal Pembuatan</label></td>
                                <td><input type="date" name="tgl_pembuatan" id="tgl_pembuatan" class="form-control" value="<?= $edit["tgl_pembuatan"]; ?>" required></td>
                            </tr>
                            <tr>
                                <td class="col-lg-2"><label for="no_surat">Nomor Surat</label></td>
                                <td><input type="text" name="no_surat" id="no_surat" class="form-control" required value="<?= $edit["no_surat"]; ?>"></td>
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
                                    $lampiran = array('1 Bendel', '1 Bendel', '2 Bendel', '3 Bendel', '4 Bendel');
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
                                <td><input type="text" name="perihal" id="perihal" class="form-control" required value="<?= $edit["perihal"]; ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="send">Dikirim Kepada</label></td>
                                <td><input type="text" name="send" id="send" class="form-control" required value="<?= $edit["send"]; ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="keterangan">Keterangan</label></td>
                                <td><input type="text" name="keterangan" id="keterangan" class="form-control" required value="<?= $edit["keterangan"]; ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="submit" class="btn btn-outline-dark col-lg-2 ">
                                            <i class="far fa-check-circle font-weight-bold"> Simpan</i>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1">
                                        <a href="data-sk.php" class="btn btn-outline-dark font-weight-bold col-lg-2"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
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