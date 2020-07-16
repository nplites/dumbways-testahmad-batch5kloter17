<!DOCTYPE html>
<html>
<head>
	<title>Edit Kendaraan | Web Pendataan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
</head>
<body>
	<div class="judul">		
		<h2>DWTube</h2>
	</div>

	<br />
	<a href="index.php">
		<button>Ke Halaman Depan</button>
	</a>
	
	<h3>Edit Data Video</h3>
	<form action="proses_edit.php" method="post">
		<?php 
		include "koneksi.php";
		$id = $_GET['id'];

		$query = mysqli_query($con, "SELECT * FROM video_tb WHERE id = '$id'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>	
			<tr>
				<td>Judul Video</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="judul" value="<?php echo $data['judul'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>Kategori (1 = Komedi, 2 = Otomotif, 3 = Musik)</td>
				<td><input type="text" name="kategoris" required></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>

