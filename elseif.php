<?php
    $nilai = 75;

    if ($nilai >= 90 && $nilai <= 100) {
        echo "Nilai A";
    } elseif ($nilai >= 80 && $nilai <= 89) {
        echo "Nilai B";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        echo "Nilai C";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        echo "Nilai D";
    } else {
        echo "Nilai Anomali";
    }
?>