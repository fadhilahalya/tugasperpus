<?php
include'koneksi.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>
<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body >
	<div id="container">
		<div id="header">
			<div id="logo-perpustakaan-container">
				<image id="logo-perpustakaan" src="images/logo.png" border=0 style="border:0; text-decoration:none; outline:none"> 
			</div>

			<div id="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan">
					<h1> PERPUSTAKAAN UNINDRA </h1>
				</div>
				<div class="nama-alamat-perpustakaan">
					<h4>Jl. Nangka No.58 Tanjung Barat-JakSel. Telp: (021)7818718</h4>
				</div>
			</div>
		</div>
		<div id="header2">
			<div id="nama-user">Hai <?php echo$_SESSION['sesi']; ?>!</div>
		</div>
		<div id="sidebar">
               <a href="index.php?p=beranda">  <i class="fas fa-house-user">  Beranda</a></i>
			<p class="label-navigasi"> Data Master</p>
			<ul>
				<li><a href="index.php?p=anggota"><i class="fas fa-users"> Data Anggota</a></li></i>
				<li><a href="index.php?p=buku"><i class="fas fa-book">      Data Buku</a></li></i>
			</ul>
			<p class="label-navigasi">Data Transaksi</p>
			<ul>
				<li><a href="index.php?p=transaksi-peminjaman"><i class="fas fa-file-upload">  Transaksi Peminjaman</a></li></i>
				<li><a href="index.php?p=transaksi-pengembalian"><i class="fas fa-file-download">  Transaksi Pengembalian</a></li></i>
			</ul>
			<p class="label-navigasi" style="color: white;"><a href="index.php?p=transaksi-peminjaman"  style="color: white;">Laporan Transaksi</a></p>
			<a href="logout.php"><i class="fas fa-arrow-alt-circle-left"> Logout</a></i>
		</div>


		<div id="content-container">
			    <div class="container">
		<div class="row"><br/><br/><br/>
			<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
						
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
		<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
		</div>
		<div id="footer"><h3>Sistem Informasi Perpustakaan (sipus) | Praktikum </h3></div>
	</div>
</body>
</html>
<?php
}
else {
	echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login.php');
}
?>