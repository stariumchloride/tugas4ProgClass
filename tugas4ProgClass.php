<?php

function perhitunganSederhana(int $angkatan, int $semester){
    $hasil = 0;
    $hasil = $angkatan * $semester;
    
    if($hasil % 3 == 0){
        return "Habis dibagi tiga";
    } else {
        return "Tidak habis dibagi tiga";
    }
    
}

$angkatan = 2021;
$semester = 1;

echo perhitunganSederhana($angkatan, $semester);

?>