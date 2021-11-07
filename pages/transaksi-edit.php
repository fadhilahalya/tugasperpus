<?php
	$id_transaksi=$_GET['id'];
	$q_tampil_transaksi=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_transaksi'");
	$r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi);
	$status= array('Dipinjam', 'Tersedia')
?>
<div id="label-page"><h3>Edit Data Transaksi</h3></div>
<div id="content">
	<form action="proses/transaksi-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
        <tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="idbuku" value="<?php echo $r_tampil_transaksi['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="idanggota" value="<?php echo $r_tampil_transaksi['idanggota']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
        <tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="idbuku" value="<?php echo $r_tampil_transaksi['idbuku']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
        <tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="text" name="tglpinjam" value="<?php echo $r_tampil_transaksi['tglpinjam']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Status</td>			
			<?php
			if($r_show_book['status']=="Dipinjam")
			
			?>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>