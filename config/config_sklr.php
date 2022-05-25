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

function tambah_sklr($data)
{
	global $conn;
	$tgl_buat=htmlspecialchars($data['tgl_pembuatan']);
	$no_surat=htmlspecialchars($data['no_surat']);
	$sifat=htmlspecialchars($data['sifat']);
	$lampiran=htmlspecialchars($data['lampiran']);
	$perihal=htmlspecialchars($data['perihal']);
	$send=htmlspecialchars($data['send']);
	$keterangan=htmlspecialchars($data['keterangan']);
	
	if (isset($_POST['submit'])) {
		
			$query = "INSERT INTO surat_keluar VALUES ('','$tgl_buat','$no_surat','$sifat','$lampiran','$perihal','$send','$keterangan')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
	}
}

// =========================================================================================================================

function hapus_sklr($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM surat_keluar WHERE id_sklr = $id");
	return mysqli_affected_rows($conn);
}

// =========================================================================================================================

function edit_sklr($data){
	global $conn;

	$id = $data["id"];
    global $conn;
    $tgl_buat = htmlspecialchars($data['tgl_pembuatan']);
    $no_surat = htmlspecialchars($data['no_surat']);
    $sifat = htmlspecialchars($data['sifat']);
    $lampiran = htmlspecialchars($data['lampiran']);
    $perihal = htmlspecialchars($data['perihal']);
    $send = htmlspecialchars($data['send']);
    $keterangan = htmlspecialchars($data['keterangan']);
	


	$query = " UPDATE surat_keluar SET 
				tgl_pembuatan = '$tgl_buat',
				no_surat = '$no_surat',
				sifat = '$sifat',
				lampiran = '$lampiran',
				perihal = '$perihal',
				send = '$send',
				keterangan = '$keterangan'

			   WHERE id_sklr = $id;
				";

			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
}

// =========================================================================================================================
