<?php

function sapa($nama, $waktu) {
    echo "Selamat " . $waktu . ", " . $nama . "!<br>";
    echo "Semangat mengikuti praktikum Pemrograman Web.";
}

$nama_mahasiswa = "Ninda";
$waktu_sapa = "Pagi";

sapa($nama_mahasiswa, $waktu_sapa);

?>