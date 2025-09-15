<?php
    $hari = $_POST['hari'];
    $biayaMobil = 350000;
    $biayaSupir = 150000;
    $biayaAsuransi = 30000;
    $jenisMobil = $_POST['mobil'];

    // Total biaya
    $total = ($biayaMobil + $biayaSupir) * $hari + $biayaAsuransi;

    echo "Hari Sewa : ".$hari."<br>" ;
    echo "Biaya Mobil Adalah : Rp. ".$biayaMobil."<br>" ;
    echo "Biaya Supir Adalah : Rp. ".$biayaSupir."<br>" ;
    echo "Biaya Asuransi Adalah : Rp.".$biayaAsuransi;
    echo "<br>Total Biaya Adalah : Rp. ".$total;
    echo "<br>Jenis Mobil yang dipilih : ".$jenisMobil;

?>