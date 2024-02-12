<?php
// Total belanja
$total_belanja = 120000;

// Jika total belanja lebih dari 100k, berikan potongan 10k
if ($total_belanja > 100000) {
    $potongan_harga = 10000;
    $total_belanja_setelah_potongan = $total_belanja - $potongan_harga;
    echo "Total belanja: Rp $total_belanja"  ;  
    echo "<br>";
    echo "Anda mendapatkan potongan harga Rp $potongan_harga";  echo "<br>";
    echo "Total belanja setelah potongan: Rp $total_belanja_setelah_potongan"; echo "<br>";
} else {
    echo "Total belanja: Rp $total_belanja";
    echo "Maaf, tidak ada potongan harga untuk total belanja di bawah 100k.";
}
?>