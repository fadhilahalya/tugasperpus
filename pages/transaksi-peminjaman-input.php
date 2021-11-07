<div id="label-page"><h3>Input Transaksi Peminjaman</h3></div>
<div id="content">
	<form action="proses/transaksi-input-proses.php" method="post" enctype="multipart/form-data">
	
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="id_transaksi" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Anggota</td>
			<td class="isian-formulir">
				<select name="id_anggota" class="isian-formulir isian-formulir-border">
					<option value="" select="selected">~ Pilih Anggota ~</option>
					<?php
						$q_tampil_anggota=mysql_query(
							"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
						);
						while($r_tampil_anggota=mysql_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Buku</td>
			<td class="isian-formulir">
				<select name="id_buku" class="isian-formulir isian-formulir-border">
					<option value="" select="selected">~ Pilih Buku ~</option>
					<?php
						$q_tampil_buku=mysql_query(
							"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
						);
						while($r_tampil_buku=mysql_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="text" name="tgl_pinjam" value="<?php echo $tgl; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>