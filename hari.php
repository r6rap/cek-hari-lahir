<?php 
$namaHari = ["minggu", "senin", "selasa", "rabu", "kamis", "jum'at", "sabtu"];
$hari = date("w");
$hariIni = $namaHari[$hari];

echo "Hari ini hari $hariIni";
?>