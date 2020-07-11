<!DOCTYPE html>
<html>
<body>

<!-- Soal No 2
Di suatu penangkaran terdapat 1476 ikan mas. Setiap 46 hari 
ikan tersebut serempak melahirkan 5 ikan baru. Namun sebelum melahirkan, 
6% dari ikan mas tersebut mati. Buatkanlah sebuah program untuk menghitung 
dan mengetahui jumlah ikan mas setelah 471 hari. -->

<?php 

$persen = 0.06;
$awal = 1476;
$lahir = 5;
$waktu = 471/46;
// 46 hari pertama
$mati = $awal * $persen;
$gugur = $awal - $persen1;
$jum1 = $gugur * $lahir;
// 46 hari kedua
$mati2 = $jum1 * $persen;
$gugur2 = $jum1 - $mati2;
$jum2 = $gugur2 * $lahir;
// 46 hari ketiga
$mati3 = $jum2 * $persen;
$gugur3 = $jum2 - $mati3;
$jum3 = $gugur3 * $lahir;
// 46 hari keempat
$mati4 = $jum3 * $persen;
$gugur4 = $jum3 - $mati4;
$jum4 = $gugur4 * $lahir;
// 46 hari kelima
$mati5 = $jum4 * $persen;
$gugur5 = $jum4 - $mati5;
$jum5 = $gugur5 * $lahir;
// 46 hari keenam
$mati6 = $jum5 * $persen;
$gugur6 = $jum5 - $mati6;
$jum6 = $gugur6 * $lahir;
// 46 hari ketujuh
$mati7 = $jum6 * $persen;
$gugur7 = $jum6 - $mati7;
$jum7 = $gugur7 * $lahir;
// 46 hari kedelapan
$mati8 = $jum7 * $persen;
$gugur8 = $jum7 - $mati8;
$jum8 = $gugur8 * $lahir;
// 46 hari kesembilan
$mati9 = $jum8 * $persen;
$gugur9 = $jum8 - $mati9;
$jum9 = $gugur9 * $lahir;
// 46 hari kesepuluh
$mati10 = $jum9 * $persen;
$gugur10 = $jum9 - $mati10;
$jum10 = $gugur10 * $lahir;

echo "Jumlah ikan mas setelah 471 hari adalah : ".$jum10." ekor.";


?>


</body>
</html>


