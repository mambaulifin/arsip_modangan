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
	$nama=htmlspecialchars($data['nama']);
	$jk=htmlspecialchars($data['jk']);
	$tempat=htmlspecialchars($data['tempat']);
	$tgl=htmlspecialchars($data['tgl']);
	$status=htmlspecialchars($data['status']);
	$agama=htmlspecialchars($data['agama']);
	$pekerjaan=htmlspecialchars($data['pekerjaan']);
	$nik = htmlspecialchars($data['nik']);
	$almt_asal = htmlspecialchars($data['almt_asal']);
	$tujuan = htmlspecialchars($data['tujuan']);
	$tgl_pndh = htmlspecialchars($data['tgl_pndh']);
	$alasan = htmlspecialchars($data['alasan']);
	$foto = upload();
	if (!$foto) {
		return false;
	}
	
	
	if (isset($_POST['submit'])) {
		
			$query = "INSERT INTO surat_pindah_masuk VALUES ('','$nama','$jk','$tempat','$tgl','$status','$agama','$pekerjaan','$nik','$almt_asal','$tujuan','$tgl_pndh','$alasan','$foto')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
	}
}
// =========================================================================================================================

function upload(){
	$namaFile = $_FILES['foto']['name'];
	$error = $_FILES['foto']['error'];
	$tmp_Name = $_FILES['foto']['tmp_name'];

	if ($error === 4) {
		echo "<script>
				alert('Pilih Gambar!');
			  </script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.',$namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar,$ekstensiGambarValid)) {
		echo "<script>
				alert('error 2!');
			  </script>";
		return false;
		// echo "
		// <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
		// <script>swal('Upload Gambar!','','warning')</script>
		// ";
		// 	  return false;
	}

	move_uploaded_file($tmp_Name,'img/'. $namaFile);
	return $namaFile;


}

// =========================================================================================================================

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM surat_pindah_masuk WHERE id_klr = $id");
	return mysqli_affected_rows($conn);
}

// =========================================================================================================================

function edit($data){
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data['nama']);
	$jk = htmlspecialchars($data['jk']);
	$tempat = htmlspecialchars($data['tempat']);
	$tgl = htmlspecialchars($data['tgl']);
	$status = htmlspecialchars($data['status']);
	$agama = htmlspecialchars($data['agama']);
	$pekerjaan = htmlspecialchars($data['pekerjaan']);
	$nik = htmlspecialchars($data['nik']);
	$almt_asal = htmlspecialchars($data['almt_asal']);
	$tujuan = htmlspecialchars($data['tujuan']);
	$tgl_pndh = htmlspecialchars($data['tgl_pndh']);
	$alasan = htmlspecialchars($data['alasan']);
	$fotoLama = htmlspecialchars($data['fotoLama']);
	if ($_FILES["foto"]["error"] === 4) {
		$foto = $fotoLama;
	} else {
		$foto = upload();
	}	


	$query = " UPDATE surat_pindah_masuk SET 
				nama = '$nama',
				jk = '$jk',
				tempat = '$tempat',
				tgl = '$tgl',
				status = '$status',
				agama = '$agama',
				pekerjaan = '$pekerjaan',
				nik = '$nik',
				almt_asal = '$almt_asal',
				tujuan = '$tujuan',
				tgl_pndh = '$tgl_pndh',
				alasan = '$alasan',
				foto = '$foto'

			   WHERE id_klr = $id;
				";

			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);	
}

// =========================================================================================================================
