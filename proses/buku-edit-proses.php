<?php
include'../koneksi.php';

$idbuku=$_POST['idbuku'];
$judulbuku=$_POST['judulbuku'];
$kategori=$_POST['kategori'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];
$status=$_POST['status'];

If(isset($_POST['simpan'])){
	
	mysqli_query($db,
		"UPDATE tbbuku
		SET idbuku='$idbuku', judulbuku='$judulbuku', kategori='$kategori', pengarang='$pengarang', penerbit='$penerbit', status='$status'
		WHERE idbuku='$idbuku'"
	);
	header("location:../index.php?p=buku");
}
?>
