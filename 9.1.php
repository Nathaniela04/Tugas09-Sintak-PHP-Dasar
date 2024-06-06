<?php

function GajiPegawai($gaji) {
    $pajak = 0.1;
    $thp = $gaji - ($gaji * $pajak);
    return $thp;
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gaji = $_POST["gaji"];

    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    $thp = GajiPegawai($gaji);
    echo "Gaji yang dibawa pulang = Rp. $thp";

}
?>