<?php

$teman_sekelas = [
    "Aulia",
    "Dinda",
    "Putri",
    "Rahma",
    "Nabila"
];

echo "Daftar Nama Teman Sekelas<br><br>";

$nomor = 1;

foreach ($teman_sekelas as $nama) {
    echo $nomor . ". " . $nama . "<br>";
    $nomor++;
}

?>