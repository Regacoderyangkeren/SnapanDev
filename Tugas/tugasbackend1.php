<?php
//Nilai A = 100 - 90
//Nilai B = 89 - 80
//Nilai C = 79 - 70
//Nilai D = 69 - 60
//Nilai diatas 100 dianggap tidak valid

$nilai = 65;
//jika,variabel nilai memiliki kurang dari atau sama dengan 100
//dan,variabel nilai memiliki lebih dari atau sama dengan 90
if ($nilai <= 100 && $nilai >= 90) {
    echo "Nilai A";
}
//jika,variabel nilai memiliki kurang dari atau sama dengan 89
//dan,variabel nilai memiliki lebih dari atau sama dengan 80
if ($nilai <= 89 && $nilai >= 80) {
    echo "Nilai B";
}
//jika,variabel nilai memiliki kurang dari atau sama dengan 79
//dan,variabel nilai memiliki lebih dari atau sama dengan 70
if ($nilai <= 79 && $nilai >= 70) {
    echo "Nilai C";
}
//jika,variabel nilai memiliki kurang dari atau sama dengan 69
//dan,variabel nilai memmiliki lebih dari atau sama dengan 60
if ($nilai <= 69 && $nilai >= 60) {
    echo "Nilai D";
}
//jika,variabel nilai memiliki kurang dari atau sama dengan 59
//dan,variabel nilai memmiliki lebih dari atau sama dengan 100
if ($nilai > 100) {
    echo "Nilai luar biasa";
}