<?php 
include 'koneksi.php';

$judul_video = $_POST['judul'];
$kategori = $_POST['kategoris'];
$uplod = $_POST['filename'];

$query = mysqli_query($con, "INSERT INTO video_tb (Judul, Kategori, Link) VALUES ('$judul_video', '$kategori', '$uplod')") or die(mysqli_error($con));

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}


?>