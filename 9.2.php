<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["bilangan1"];
    $b = $_POST["bilangan2"];

if ($a == $b){
    echo "$a == $b : ";
} elseif ($a != $b){
    echo "<br> $a != $b : ";
} else {
    echo "angka tidak tersedia";
}

if ($a > $b){
    echo "<br> $a > $b : ";
} elseif ($a < $b){
    echo "<br> $a < $b : ";
} else {
    echo "angka tidak tersedia";
}

if(($a != $b) && ($a > $b)){
    echo "<br>($a == $b) && ($a > $b)";
} elseif(($a != $b) || ($a > $b)){
    echo "<br>($a == $b) || ($a > $b)";
} else {
    echo " angka tdk tersedia";
}
}
?>