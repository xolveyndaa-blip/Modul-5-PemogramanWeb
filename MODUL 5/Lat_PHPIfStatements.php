<?php

$angka = -15;

echo "Angka yang diperiksa : " . $angka . "<br>";

if ($angka > 0) {
    echo "Angka tersebut adalah bilangan positif.";
} elseif ($angka < 0) {
    echo "Angka tersebut adalah bilangan negatif.";
} else {
    echo "Angka tersebut adalah nol.";
}

?>