<?php

$mtk = 87;
$inggris = 85;
$indonesia = 87;
$nilaiMinimum = 85;

$total = $mtk + $inggris + $indonesia;
$rataRata = $total / 3;


$rataRataBulat = round($rataRata);

if ($rataRata >= 85){
    echo "Anda kompeten: " . $rataRataBulat . "<br>";
}else{
    echo "Anda belum kompeten: " . $rataRataBulat . "<br>";
}

if ($rataRata > $nilaiMinimum){
    echo "Anda lulus: " . $rataRataBulat . "<br>";
}else{
    echo "Anda tidak lulus: " . $rataRataBulat . "<br>";
}

echo "Rata-rata nilai Matematika, Bahasa Inggris, dan Bahasa Indonesia adalah: " . $rataRataBulat;

?>