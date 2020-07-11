<!DOCTYPE html>
<html>
<body>


<!-- Soal No 1 :
Buatlah sebuah function memiliki sebuah parameter berupa array yang berisi 
array yang berisi abjad, yang mempunyai tugas untuk mengurutkan array terpendek 
ke terpanjang, dan juga mengurutkan abjad di dalamnya dari a ke z. Dilarang 
menggunakan built in function array_multisort. -->

<?php
    // Contoh data array
    $array = array(
            array("d","g","a","e","f","b","c","h","j","l","k","i"),
            array("a","c","e","b","d"), 
            array("d","f","e","a","g","b","c"),

        );
        
    $array2 = array(
            array("d","c","b","a","e"),
            array("a","c","e","f","b","i","h","j","g","d"),
            array("d","g","a","e","b","f","c"), 
            

        );
        
// fungsi pengurutan alpabet dan panjang elemen dalam array
function sort_array($arr) {
    
    // menampilkan array sebelum diurutkan
    echo "Sebelum diurutkan : <br>";
    for($i=0; $i<count($arr); $i++) {
    $tampil = implode(" ", $arr[$i]);
    echo "[".$tampil."] <br>"; }
    
    // menentukan panjang elemen dalam array
    for($l=0; $l<count($arr); $l++) {
    $arrlength = count($arr[$l]); }

    // sort berdasarkan alphabet
    for ($k = 0; $k < count($arr); $k++) {
        for($o=0; $o < count($arr[$k]); $o++) {
        sort($arr[$k]); 
        } 
    }

    // sort berdasarkan panjang elemen dalam array
    usort($arr, function($a,$b) {if ($a==$b) return 0;
  return ($a<$b)?-1:1;;
    });
    
    // menampilkan hasil pengurutan
    echo "Setelah diurutkan : <br>";
    for ($k = 0; $k < count($arr); $k++) {
    $rnd = implode(" ", $arr[$k]);
    echo "[".$rnd."] <br>"; }
}

// pemanggilan fungsi sort_array
sort_array($array);
?>

</body>
</html>