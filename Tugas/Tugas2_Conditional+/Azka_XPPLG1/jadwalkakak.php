<?php
date_default_timezone_set('Asia/Jakarta');

$hari = "Senin";
$waktu = date("H:i"); // Mengambil waktu saat ini dalam format jam:menit

echo "Jadwal Kakak di Hari " . $hari . " pukul " . $waktu . ":\n\n";

// Memastikan hari yang dicek adalah Senin
if ($hari == "Senin") 
    
    // Jadwal Pagi
    if ($waktu >= "03:00" && $waktu < "05:00") {
        echo "Kakak sedang bermain HP.";
    } elseif ($waktu >= "05:00" && $waktu < "06:00") {
        echo "Kakak sedang bersiap-siap untuk berangkat, termasuk ibadah, mandi, dan sarapan.";
    } elseif ($waktu >= "06:00" && $waktu < "06:30") {
        echo "Kakak sedang dalam perjalanan ke sekolah.";
    } elseif ($waktu >= "06:30" && $waktu < "07:00") {
        echo "Kakak sudah sampai di sekolah.";
    
    // Jadwal Sekolah dan Kegiatan Sore
    } elseif ($waktu >= "07:00" && $waktu < "15:30") {
        echo "Kakak sedang mengikuti Kegiatan Belajar Mengajar (KBM) di sekolah.";
    } elseif ($waktu >= "15:30" && $waktu < "15:45") {
        echo "KBM sudah selesai, kakak bersiap-siap untuk kegiatan selanjutnya.";
    } elseif ($waktu >= "15:45" && $waktu < "17:00") {
        echo "Kakak sedang mengikuti kegiatan voice.";
    } elseif ($waktu >= "17:00" && $waktu < "17:30") {
        echo "Kakak sedang dalam perjalanan pulang, dan mampir ke fotokopi.";
    
    // Jadwal Malam
    } elseif ($waktu >= "17:30" && $waktu < "18:30") {
        echo "Kakak sedang mengerjakan PR selama 1 jam.";
    } elseif ($waktu >= "18:30" && $waktu < "19:30") {
        echo "Kakak sedang menikmati waktu luang.";
    } elseif ($waktu >= "19:30" && $waktu < "20:00") {
        echo "Kakak sedang makan malam bersama keluarga.";
    } elseif ($waktu >= "20:00" && $waktu < "20:20") {
        echo "Kakak sedang mengobrol bersama keluarga.";
    } elseif ($waktu >= "20:20" && $waktu < "21:20") {
        echo "Kakak sedang coding di laptop.";
    } elseif ($waktu >= "21:20" && $waktu < "22:50") {
        echo "Kakak sedang menikmati waktu luang.";
    } elseif ($waktu >= "22:50" && $waktu < "23:00") {
        echo "Kakak sedang menyiapkan persiapan untuk besok.";
    } elseif ($waktu >= "23:00" && $waktu < "23:30") {
        echo "Kakak sedang bersiap untuk tidur atau beribadah.";
    } elseif ($waktu >= "23:30" || $waktu < "03:00") {
        echo "Kakak sudah tidur.";
    } 
