<?php
	$idbuku=$_GET['id'];
	$q_show_book=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$idbuku'");
	$r_show_book=mysqli_fetch_array($q_show_book);
?>
<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
        <tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="idbuku" value="<?php echo $r_show_book['idbuku']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" name="judulbuku" value="<?php echo $r_show_book['judulbuku']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
        <tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir"><input type="text" name="kategori" value="<?php echo $r_show_book['kategori']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
        <tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><input type="text" name="pengarang" value="<?php echo $r_show_book['pengarang']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
        <tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><input type="text" name="penerbit" value="<?php echo $r_show_book['penerbit']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Status</td>			
			<?php
			if($r_show_book['status']=="Dipinjam")
			{
				echo "<td class='isian-formulir'><input type='radio' name='status' value='Dipinjam' checked>Dipinjam</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='status' value='Tersedia'>Tersedia</td>";
			}
			elseif($r_show_book['status']=="Tersedia")
			{
				echo "<td class='isian-formulir'><input type='radio' name='status' value='Dipinjam'>Dipinjam</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='status' value='Tersedia' checked>Tersedia</td>";
			}
			?>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>