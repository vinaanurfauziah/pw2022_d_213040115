<?php
// Array Multidimensi
// Array di dalam array

$array1 = [10, "vina", false, [1,[2],3]];
print_r($array1);
echo "<hr>";
// mencetak angka 2
echo $array1[3][1][0];

// matriks
/*
123
456
789
*/
$matriks = [
    [1,2,3], 
    [4,5,6], 
    [7,8,9]
];

foreach($matriks as $baris){
    foreach($baris as $kolom){
        echo $kolom;
    }
    echo "<br>";
}
?>