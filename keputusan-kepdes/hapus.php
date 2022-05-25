<?php
require '../config/config_kptsn.php';
$id = $_GET['id'];
if (hapus($id)>0) {
    header('location: data.php?m=1');
}
    
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>