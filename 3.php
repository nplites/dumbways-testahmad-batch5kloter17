<!DOCTYPE html>
<html>
<body>

<!-- Soal No 3
Buatlah function untuk mencetak gambar seperti dibawah ini, 
yang mempunyai sebuah parameter sebagai panjang lebar/tinggi gambar. 
Parameter harus merupakan bilangan ganjil: -->
<?php

function cetak_gambar($panjang) {

for($i = 0; $i<$panjang; $i++) 
	{
     for($y = 1, $z=$i; $y <= $panjang; $y++, $z--) 
     { 
      if($z%2==0){
          echo " = ";
          } else {
          echo " * "; } }
          echo "<br>"; }
}

cetak_gambar(5);

?>

</body>
</html>