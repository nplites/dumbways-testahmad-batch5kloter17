<!DOCTYPE html>
<html>
<head>
	<title>DWTube</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Layanan Streaming Video</h2>
	</div>

	<br />
	<a href="index.php">
		<button>Ke Halaman Depan</button>
	</a>

	<h3>Tambah Kategori Baru</h3>
	<form action="proses_tambah_kategori.php" method="post">		
		<table>
			<tr>
				<td>Nama Kategori</td>
				<td><input type="text" name="jenis" required></td>					
			</tr>	
			<tr>
				<td>Nomor Kategori</td>
				<td><input type="text" name="nomor" required></td>					
			</tr>	
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>

