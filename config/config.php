<?php
$conn = mysqli_connect("localhost", "root", "", "kd_modangan");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// =========================================================================================================================

function registrasi_user($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["username_user"]));
    $password = mysqli_real_escape_string($conn, $data["password_user"]);

    //Cek Username
    $result = mysqli_query($conn, "SELECT username_user FROM user WHERE username_user = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar');
				document.location.href = 'Login.php';
			 </script>";
        return false;
    }

    //Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //Tambah Ke Database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");
    return mysqli_affected_rows($conn);
}

// =========================================================================================================================

$get1 = mysqli_query($conn, "SELECT * FROM surat_keterangan");
$count1 = mysqli_num_rows($get1);

// =========================================================================================================================

$get2 = mysqli_query($conn, "SELECT * FROM surat_keluar");
$count2 = mysqli_num_rows($get2);

// =========================================================================================================================

$get3 = mysqli_query($conn, "SELECT * FROM surat_masuk");
$count3 = mysqli_num_rows($get3);

// =========================================================================================================================

$get4 = mysqli_query($conn, "SELECT * FROM surat_pindah_keluar");
$count4 = mysqli_num_rows($get4);

// =========================================================================================================================

$get5 = mysqli_query($conn, "SELECT * FROM surat_pindah_masuk");
$count5 = mysqli_num_rows($get5);

// =========================================================================================================================

$get6 = mysqli_query($conn, "SELECT * FROM keputusan_kepdes");
$count6 = mysqli_num_rows($get6);

// =========================================================================================================================

$get7 = mysqli_query($conn, "SELECT * FROM peraturan_desa");
$count7 = mysqli_num_rows($get7);

// =========================================================================================================================

$get8 = mysqli_query($conn, "SELECT * FROM peraturan_kepdes");
$count8 = mysqli_num_rows($get8);


?>