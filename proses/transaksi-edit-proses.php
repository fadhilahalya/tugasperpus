<?php
include'../koneksi.php';
$idtransaksi    =$_POST['idtransaksi'];
$idanggota      =$_POST['idanggota'];
$idbuku         =$_POST['idbuku'];
$tglpinjam      =$_POST['tglpinjam'];
$tglkembali     =$_POST['tglkembali'];

If(isset($_POST['simpan'])){
	
	mysqli_query($db,
		"UPDATE tbtransaksi
		SET idtransaksi='$idtransaksi',idanggota='$idanggota',idbuku='$idbuku',tglpinjam='$tglpinjam',tglkembali='$tglkembali'
		WHERE idtransaksi='$idtransaksi'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>
