<?php

$umur = 21;
$sudah_punya_sim = true;

echo "Pemeriksaan Izin Mengemudi<br>";

if ($umur >= 17 && $sudah_punya_sim == true) {
    echo "Umur : " . $umur . " tahun<br>";
    echo "Status SIM : Sudah memiliki SIM<br>";
    echo "Anda boleh mengemudi.";
} else {
    echo "Anda tidak boleh mengemudi.";
}

?>