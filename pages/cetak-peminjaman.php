<?php
include "../koneksi.php";

?>
<link rel="stylesheet" type="text/css" href="../style.css">
<h3>Data Transaksi</h3></div>
<div id="content">
<table border="1" id="tabel-tampil">
		<tr>
		
        <th>NO</th>
        <th>ID Transaksi</th>
        <th>ID Anggota</th>
        <th>ID Buku</th>								
        <th>Tanggal Pinjam</th>
				
		</tr>
		
		<?php		
						$nomor=1;
						$query="SELECT * FROM tbtransaksi ORDER BY idtransaksi DESC";
						$q_tampil_transaksi = mysqli_query($db, $query);
						if(mysqli_num_rows($q_tampil_transaksi)>0)
						{
						while($r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi)){
	
					?>
		<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo $r_tampil_transaksi['idtransaksi']; ?></td>
							<td><?php echo $r_tampil_transaksi['idanggota']; ?></td>
							<td><?php echo $r_tampil_transaksi['idbuku']; ?></td>
							<td><?php echo $r_tampil_transaksi['tglpinjam']; ?></td>			
						</tr>		
		<?php $nomor++; } 
		}?>		
	</table>
	<script>
		window.print();
	</script>
</div>
