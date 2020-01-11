<?php 
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($host,"DELETE FROM penyuluhan WHERE id='$id'");
if ($sql) {
	header("Location:Peny_edithapus_admin.php");
} else {
	echo "Gagal Batal data";
}

 ?>