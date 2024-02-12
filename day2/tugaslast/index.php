rumah makan beni mengadakan program diskon sebesar 5% tiap pembelian hari selasa.
 dan setiap pembelian diatas 100.000 mendapat diskon sebesar 7% 

hitunglah uang yang harus dibayar jika ditotal pembelian 130.000 dihari ini

<?php

$totalharga = 100000;
$diskon = 0;
$tanggal= date("d-m-Y");
$hari = date("l");

if ($hari == "Tuesday") {
    $diskon = 5;
    if ($totalharga > 100000) {
        $diskon = 7+5;
    }
}else {
    $diskon =5;
}

$totalharga *= ((100 - $diskon) / 100);

echo "Tanggal : $tanggal";
echo "<br>";
echo "Hari : $hari";
echo "<br>";
echo "Total diskon: $diskon %";
echo "<br>";
echo "Total Harga setelah diskon : $totalharga";

?> 
