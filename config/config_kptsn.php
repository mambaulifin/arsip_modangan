<?php
$conn=mysqli_connect("localhost","root","","kd_modangan");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows=[];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}

function tambah($data)
{
	global $conn;
	$nomor_register=htmlspecialchars($data['nomor_register']);
	$tentang=htmlspecialchars($data['tentang']);
	$uraian=htmlspecialchars($data['uraian']);
	$tgl=htmlspecialchars($data['tgl']);
	$keterangan=htmlspecialchars($data['keterangan']);
	
	if (isset($_POST['submit'])) {
		
			$query = "INSERT INTO keputusan_kepdes VALUES ('','$nomor_register','$tentang','$uraian','$tgl','$keterangan')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
	}
}

// =========================================================================================================================

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM keputusan_kepdes WHERE id_k = $id");
	return mysqli_affected_rows($conn);
}

// =========================================================================================================================

function edit($data){
	global $conn;

	$id = $data["id"];
    global $conn;
    $nomor_register = htmlspecialchars($data['nomor_register']);
    $tentang = htmlspecialchars($data['tentang']);
    $uraian = htmlspecialchars($data['uraian']);
    $tgl = htmlspecialchars($data['tgl']);
    $keterangan = htmlspecialchars($data['keterangan']);
	


	$query = " UPDATE keputusan_kepdes SET 
				nomor_register = '$nomor_register',
				tentang = '$tentang',
				uraian = '$uraian',
				tgl = '$tgl',
				keterangan = '$keterangan'

			   WHERE id_k = $id;
				";

			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
}

// =========================================================================================================================
