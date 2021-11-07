<?php
	include "../koneksi.php";
	$idbuku=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$idbuku'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Cetak Buku</h3></div>
<div id="content">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['idbuku']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['judulbuku']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['kategori']; ?></td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['pengarang']; ?></td>
		</tr>
        <tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['penerbit']; ?></td>
		</tr>
        <tr>
			<td class="label-formulir">Status</td>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['status']; ?></td>
		</tr>
	</table>
</div>
<script>
		window.print();
	</script>