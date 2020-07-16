<!DOCTYPE html>
<html>
<head>
	<title>DWTube</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>DWTube</h2>
	</div>

	<br />
	<a href="form_tambah_video.php">
		<button>Tambah Video</button>
	</a>
	<a href="form_tambah_kategori.php">
		<button>Tambah Kategori</button>
	</a>

	<h3>Video</h3>
	<div style="overflow: auto;">
		<table border="1" class="table">
			<tr>
				<th>Nomor</th>
				<th></th>
				<th>Judul</th>
				<th>Kategori</th>
				<th>Opsi</th>		
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM video_tb") or die(mysqli_error($con));
			$nomor = 1;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><iframe width="560" height="315" src="<?php echo $data['Link']; ?>" frameborder="0" 
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</td>
					<td><?php echo $data['Judul']; ?></td>
					<td><?php echo $data['Kategori']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
			
			</table>
			</div>
			<div>
			<table border="1" class="table"> 
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>No Kategori</th>
				<th>Opsi</th>		
			</tr>
			<?php 
			include "koneksi.php";
			$quers = mysqli_query($con, "SELECT * FROM kategori_tb") or die(mysqli_error($con));
			$nomor = 1;
			while($data = mysqli_fetch_array($quers)) { ?>
				<tr>
					<td align="center"><?php echo $nomor++; ?>.</td>
					<td><?php echo $data['Jenis']; ?></td>
					<td><?php echo $data['Nomor']; ?></td>
					<td width="90px" align="center">
						<a href="form_edit.php?id=<?php echo $data['id']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
			</table>
	</div>
</body>
</html>
