<?php 
include 'koneksi.php';

$jens = $_POST['jenis'];
$nomr = $_POST['nomor'];

$query = mysqli_query($con, "INSERT INTO kategori_tb (Jenis, Nomor) VALUES ('$jens', '$nomr')") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}


?>