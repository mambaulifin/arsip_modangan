<?php
require '../config/config_smsk.php';
$id = $_GET['id'];
if (hapus_smsk($id)>0) {
    header('location: data-smsk.php?m=1');
}
    
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>