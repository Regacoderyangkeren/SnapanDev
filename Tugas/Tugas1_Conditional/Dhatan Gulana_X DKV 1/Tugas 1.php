<?php

$nilai = 101;

if ($nilai <= 100 && $nilai >= 90) {
    echo "nilai A";
}
else if ($nilai <= 89 && $nilai >= 80) {
        echo "nilai B";
}
else if ($nilai <= 79 && $nilai  >= 70) {
 echo "nilai C";
}
else if ($nilai <= 69 && $nilai >= 60) {
    echo "nilai D";
}
else if ($nilai < 60) {
    echo "nilai E";
}else{
    echo "wooy yang bener masukin nilainya!!!";
}
?>
