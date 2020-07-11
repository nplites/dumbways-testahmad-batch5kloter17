<?php 
include 'koneksi.php';

$judul_video = $_POST['judul'];
$kategori = $_POST['kategoris'];

$query = mysqli_query($con, "UPDATE video_tb SET judul='$judul_video', kategori='$kategori' WHERE id='$id'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>