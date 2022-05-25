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

function tambah_sk($data)
{
	global $conn;
	$no_surat_sk=htmlspecialchars($data['no_surat_sk']);
	$tgl_buat_sk=htmlspecialchars($data['tgl_pembuatan_sk']);
	$nama_sk=htmlspecialchars($data['nama_sk']);
	$jk_sk=htmlspecialchars($data['jk_sk']);
	$ttl_sk=htmlspecialchars($data['ttl_sk']);
	$agama_sk=htmlspecialchars($data['agama_sk']);
	$status_sk=htmlspecialchars($data['status_sk']);
	$alamat_sk=htmlspecialchars($data['alamat_sk']);
	$ket_sk=htmlspecialchars($data['ket_sk']);
	
	if (isset($_POST['submit'])) {
		
			$query = "INSERT INTO surat_keterangan VALUES ('','$no_surat_sk','$tgl_buat_sk','$nama_sk','$jk_sk','$ttl_sk','$agama_sk','$status_sk','$alamat_sk','$ket_sk')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
	}
}

// =========================================================================================================================

function hapus_sk($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM surat_keterangan WHERE id_sk = $id");
	return mysqli_affected_rows($conn);
}

// =========================================================================================================================

function edit_sk($data){
	global $conn;

	$id = $data["id"];
	$no_surat_sk = htmlspecialchars($data['no_surat_sk']);
	$tgl_buat_sk = htmlspecialchars($data['tgl_pembuatan_sk']);
	$nama_sk = htmlspecialchars($data['nama_sk']);
	$jk_sk = htmlspecialchars($data['jk_sk']);
	$ttl_sk = htmlspecialchars($data['ttl_sk']);
	$agama_sk = htmlspecialchars($data['agama_sk']);
	$status_sk = htmlspecialchars($data['status_sk']);
	$alamat_sk = htmlspecialchars($data['alamat_sk']);
	$ket_sk = htmlspecialchars($data['keterangan_sk']);
	


	$query = " UPDATE surat_keterangan SET 
				no_surat_sk = '$no_surat_sk',
				tgl_pembuatan_sk = '$tgl_buat_sk',
				nama_sk = '$nama_sk',
				jk_sk = '$jk_sk',
				ttl_sk = '$ttl_sk',
				agama_sk = '$agama_sk',
				status_sk = '$status_sk',
				agama_sk = '$agama_sk',
				alamat_sk = '$alamat_sk',
				keterangan_sk = '$ket_sk'	

			   WHERE id_sk = $id;
				";

			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
}

// =========================================================================================================================


?>

