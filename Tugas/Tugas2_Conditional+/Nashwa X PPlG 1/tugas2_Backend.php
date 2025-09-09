<?php
// Mengambil waktu saat ini dalam format jam dan menit (HH:ii)
date_default_timezone_set('Asia/Jakarta');
$waktu_sekarang = date('H:i');

// --- Tampilkan waktu dan status ---
echo "<h2>Jadwal Harian Kakak Pemalas</h2>";
echo "Waktu saat ini: **" . $waktu_sekarang . "**<br><br>";

// Menggunakan if-else untuk menentukan kegiatan berdasarkan waktu
if ($waktu_sekarang >= "02:00" && $waktu_sekarang < "06:00") {
    $kegiatan = "Kakak sedang bermain HP.";
    $catatan = "Ini adalah waktu 'me time' kakak. Seharusnya kakak tidur! Jangan sampai begadang ya.";
} elseif ($waktu_sekarang >= "06:00" && $waktu_sekarang < "06:30") {
    $kegiatan = "Kakak sedang mandi dan bersiap.";
    $catatan = "Mandi pagi itu seger banget loh, kak!";
} elseif ($waktu_sekarang >= "06:30" && $waktu_sekarang < "07:00") {
    $kegiatan = "Kakak sedang sarapan pagi.";
    $catatan = "Sarapan itu penting supaya punya energi buat seharian.";
} elseif ($waktu_sekarang >= "07:00" && $waktu_sekarang < "17:00") {
    $kegiatan = "Kakak sedang KBM (Kegiatan Belajar Mengajar).";
    $catatan = "Ayo fokus belajar, kak! Jangan sampai ketiduran.";
} elseif ($waktu_sekarang >= "17:00" && $waktu_sekarang < "17:30") {
    $kegiatan = "Kakak sedang dalam perjalanan pulang dari sekolah.";
    $catatan = "Hati-hati di jalan ya, kak.";
} elseif ($waktu_sekarang >= "17:30" && $waktu_sekarang < "19:00") {
    $kegiatan = "Kakak sedang beristirahat atau mandi.";
    $catatan = "Sekarang waktunya santai setelah seharian di sekolah. Tapi jangan lupa ibadah dan mandi ya.";
} elseif ($waktu_sekarang >= "19:00" && $waktu_sekarang < "20:00") {
    $kegiatan = "Kakak sedang belajar atau mengerjakan PR.";
    $catatan = "Ayo semangat, tugasnya biar cepat selesai dan bisa main lagi.";
} elseif ($waktu_sekarang >= "20:00" && $waktu_sekarang < "21:00") {
    $kegiatan = "Kakak sedang makan malam.";
    $catatan = "Makan malam itu penting biar energinya kembali terisi.";
} elseif ($waktu_sekarang >= "21:00" && $waktu_sekarang < "23:30") {
    $kegiatan = "Kakak sedang bersantai atau bermain HP.";
    $catatan = "Sekarang waktunya 'me time' lagi. Tapi jangan sampai lupa waktu ya, kak.";
} else {
    $kegiatan = "Kakak sedang tidur.";
    $catatan = "Selamat tidur kak, mimpi indah!";
}

// --- Tampilkan output berdasarkan waktu ---
echo "Output:<br>";
echo "**" . $kegiatan . "**";
echo "<br><br>";
echo "Catatan untuk kakak:<br>";
echo $catatan;
?>