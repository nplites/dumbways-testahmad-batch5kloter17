<!DOCTYPE html>
<html>
<body>

<!-- Soal No 2
Di suatu penangkaran terdapat 1476 ikan mas. Setiap 46 hari 
ikan tersebut serempak melahirkan 5 ikan baru. Namun sebelum melahirkan, 
6% dari ikan mas tersebut mati. Buatkanlah sebuah program untuk menghitung 
dan mengetahui jumlah ikan mas setelah 471 hari. -->

<?php 

$a = 1476;
$b = $a - ($a * 0.06);
$c = 471/46;
$d = $b * 5;

for($i = 0; $i<$c; $i++) {
    $e = $d * $i;
}

echo "Jumlah ikan setelah 471 hari adalah sebanyak : ".$e." ekor";


?>

</body>
</html>