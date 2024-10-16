<?php
function hitungDiskon($totalBayar) {
    if ($totalBayar >= 500000) {
        $diskon = 50;
    } elseif ($totalBayar >= 100000) {
        $diskon = 10;
    } elseif ($totalBayar >= 50000) {
        $diskon = 5;
    } else {
        // Jika tidak memenuhi kriteria, diskon 0%
        $diskon = 0;
    }

    $totalDiskon = ($totalBayar * $diskon) / 100;
    $totalBayarAkhir = $totalBayar - $totalDiskon;

    echo "Total bayar: Rp " . number_format($totalBayar) . "<br>";
    echo "Diskon: " . $diskon . "%<br>";
    echo "Total setelah diskon: Rp " . number_format($totalBayarAkhir) . "<br>";
}

// Contoh perhitungan
$totalBayar = 125000;  
hitungDiskon($totalBayar);
?>