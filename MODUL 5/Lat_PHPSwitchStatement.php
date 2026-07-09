<?php

$ukuran_baju = "L";

echo "Ukuran Baju : " . $ukuran_baju . "<br>";

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran Small cocok untuk ukuran kecil.";
        break;
    case "M":
        echo "Ukuran Medium cocok untuk ukuran sedang.";
        break;
    case "L":
        echo "Ukuran Large cocok untuk ukuran besar.";
        break;
    case "XL":
        echo "Ukuran Extra Large cocok untuk ukuran ekstra besar.";
        break;
    default:
        echo "Ukuran baju tidak tersedia.";
}

?>