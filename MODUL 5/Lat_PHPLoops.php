<?php

$mata_kuliah = [
    "Pemrograman Web",
    "Data Mining",
    "Jaringan Komputer",
    "Basis Data"
];

echo "Daftar Mata Kuliah Semester 5<br><br>";

$nomor = 1;

foreach ($mata_kuliah as $matkul) {
    echo $nomor . ". " . $matkul . "<br>";
    $nomor++;
}

?>