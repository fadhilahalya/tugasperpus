<?php
include'../koneksi.php';
$idtransaksi=$_POST['idtransaksi'];
$idanggota=$_POST['idanggota'];
$idbuku=$_POST['idbuku'];
$tglpinjam=$_POST['tglpinjam'];
$tglkembali=$_POST['tglkembali'];

if(isset($_POST['simpan'])){
	
	$sql = 
	"INSERT INTO tbtransaksi
		VALUES('$idtransaksi','$idanggota','$idbuku','$tglpinjam','$tglkembali')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=transaksi-peminjaman");
}
?>