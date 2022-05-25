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

function tambah_smsk($data)
{
	global $conn;
	$tgl_buat=htmlspecialchars($data['tgl_pembuatan']);
	$no_surat=htmlspecialchars($data['no_surat']);
	$sifat=htmlspecialchars($data['sifat']);
	$lampiran=htmlspecialchars($data['lampiran']);
	$perihal=htmlspecialchars($data['perihal']);
	$from=htmlspecialchars($data['from']);
	$keterangan=htmlspecialchars($data['keterangan']);
	
	if (isset($_POST['submit'])) {
		
			$query = "INSERT INTO surat_masuk VALUES ('','$tgl_buat','$no_surat','$sifat','$lampiran','$perihal','$from','$keterangan')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
	}
}

// =========================================================================================================================

function hapus_smsk($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM surat_masuk WHERE id_smsk = $id");
	return mysqli_affected_rows($conn);
}

// =========================================================================================================================

function edit_smsk($data){
	global $conn;

	$id = $data["id"];
    global $conn;
    $tgl_buat_msk = htmlspecialchars($data['tgl_pembuatan_msk']);
    $no_surat_msk = htmlspecialchars($data['no_surat_msk']);
    $sifat_msk = htmlspecialchars($data['sifat_msk']);
    $lampiran_msk = htmlspecialchars($data['lampiran_msk']);
    $perihal_msk = htmlspecialchars($data['perihal_msk']);
    $from_msk = htmlspecialchars($data['from_msk']);
    $keterangan_msk = htmlspecialchars($data['keterangan_msk']);
	


	$query = " UPDATE surat_masuk SET 
				tgl_pembuatan_msk = '$tgl_buat_msk',
				no_surat_msk = '$no_surat_msk',
				sifat_msk = '$sifat_msk',
				lampiran_msk = '$lampiran_msk',
				perihal_msk = '$perihal_msk',
				from_msk = '$from_msk',
				keterangan_msk = '$keterangan_msk'

			   WHERE id_smsk = $id;
				";

			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
}

// =========================================================================================================================
