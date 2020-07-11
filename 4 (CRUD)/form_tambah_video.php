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

	<h3>Tambah Video</h3>
	<form action="proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>Judul Video</td>
				<td><input type="text" name="judul" required></td>					
			</tr>	
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategoris" required></td>					
			</tr>
				<td>Upload File</td>
				<td><input type="file" id="myFile" name="filename" required></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>