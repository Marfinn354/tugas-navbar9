<?php
    $saldoAwal = $_POST['saldo'];
    $besarBunga = $_POST['bunga'];
    $biayaAdministrasi = $_POST['administrasi'];

    $tabungan = $saldoAwal + ($saldoAwal * $besarBunga / 100) - $biayaAdministrasi;

    echo "Saldo Awal : ".$saldoAwal."<br>" ;
    echo "Besar Bunga : ".$besarBunga."%"."<br>" ;
    echo "Biaya Administrasi : ".$biayaAdministrasi."<br>" ;
    echo "Tabungan : Rp. ".$tabungan;

?>