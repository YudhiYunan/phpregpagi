<?php 
include 'koneksi.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['level'] == ""){
	echo "<SCRIPT>alert('Silahkan Login Kembali');window.location='index.php'</SCRIPT>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
</head>
<body>
<div class="kolom">
	<div>
		<?php echo "Hallo, Selamat Datang <b>".$_SESSION['username']."</b>";
 		?>
	<ul>
		<li><a href="view_anggota.php">Anggota</a></li>
		<li><a href="view_barang.php">Barang</a></li>
		<li><a href="view_kategori.php">Kategori</a></li>
 	</ul>
	 
	<br/>
	<a href="logout.php" onclick="return confirm('Yakin Nih Mau Keluar?')">Log Out</a>	
</div>
</body>
</html>