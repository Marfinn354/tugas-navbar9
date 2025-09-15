<?php

$upahHarian = 125000 * 8;
$upahLembur = 35000 * 3 * 2;
$upahMingguan = ($upahHarian * 7) + $upahLembur;
$totalUpah = $upahMingguan * 4;

echo "Upah harian adalah : Rp. " . $upahHarian . "<br>";
echo "Upah mingguan adalah : Rp. " . $upahMingguan . "<br>";
echo "Total upah yang diterima adalah Rp. " . $totalUpah;

?>