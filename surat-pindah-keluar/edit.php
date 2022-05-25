<?php
require '../config/config_spklr.php';
$id = $_GET["id"];
$edit = query("SELECT * FROM surat_pindah_keluar WHERE id_klr = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Surat Pindah Keluar</title>
    <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include 'menu.html'; ?>

        <!--  Header Konten -->
        <div class="content-wrapper">
            <div class="content-header">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 font-weight-bold badge badge-dark border"> Edit Data Surat Pindah Keluar <?= $edit['nama']; ?></h1>
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
                        if (edit($_POST) > 0) {
                    ?>
                            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                            <script>
                                swal({
                                        title: "Berhasil!",
                                        text: "Data Sudah Diedit!",
                                        icon: "success",

                                    })
                                    .then((value) => {
                                        document.location.href = 'data.php';
                                    });
                            </script>
                        <?php
                        } else { ?>
                            <script>
                                document.location.href = 'data.php?n=1';
                            </script>
                    <?php
                        }
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $edit["id_klr"]; ?>">
                        <input type="hidden" name="fotoLama" value="<?= $edit["foto"]; ?>">
                        <table class="table text-dark">
                            <tr>
                                <td><label for="nama">Nama</label></td>
                                <td><input type="text" name="nama" id="nama" class="form-control" value="<?= $edit['nama']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="jk_sk">Jenis Kelamin</label></td>
                                <td>
                                    <?php
                                    $jenis = array('Laki - Laki', 'Perempuan');

                                    echo "<select name='jk' id='jk' class='form-control'>";
                                    foreach ($jenis as $jk) {
                                        echo "<option value='$jk'>$jk</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="tempat">Tempat Lahir</label></td>
                                <td><input type="text" name="tempat" id="tempat" class="form-control" value="<?= $edit['tempat']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="tgl">Tanggal Lahir</label></td>
                                <td><input type="date" name="tgl" id="tgl" class="form-control" value="<?= $edit['tgl']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="status">Status</label></td>
                                <td>
                                    <?php
                                    $status = array('Kawin', 'Belum Kawin');
                                    echo "<select name='status' id='status' class='form-control'>";
                                    foreach ($status as $stts) {
                                        echo "<option value='$stts'>$stts</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="agama">Agama</label></td>
                                <td>
                                    <?php
                                    $agama = array('Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Konghucu');
                                    echo "<select name='agama' id='agama' class='form-control'>";
                                    foreach ($agama as $jk) {
                                        echo "<option value='$jk'>$jk</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="pekerjaan">Pekerjaan</label></td>
                                <td><input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="<?= $edit['pekerjaan']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="nik">NIK</label></td>
                                <td><input type="text" name="nik" id="nik" class="form-control" value="<?= $edit['nik']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="almt_asal">Alamat Asal</label></td>
                                <td><input type="text" name="almt_asal" id="almt_asal" class="form-control" value="<?= $edit['almt_asal']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="tujuan">Tujuan Pindah</label></td>
                                <td><input type="text" name="tujuan" id="tujuan" class="form-control" value="<?= $edit['tujuan']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="tgl_pndh">Tanggal Pindah</label></td>
                                <td><input type="date" name="tgl_pndh" id="tgl_pndh" class="form-control" value="<?= $edit['tgl_pndh']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="alasan">Alasan</label></td>
                                <td><input type="text" name="alasan" id="alasan" class="form-control" value="<?= $edit['alasan']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="foto">Foto</label></td>
                                <td><span><img src="img/<?= $edit['foto']; ?>" style="width:200px; height:200px;"></span> <input type="file" name="foto" id="foto"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="submit" class="btn btn-outline-dark col-lg-2 ">
                                            <i class="far fa-check-circle font-weight-bold"> Simpan</i>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-center mt-1">
                                        <a href="data.php" class="btn btn-outline-dark font-weight-bold col-lg-2"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
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