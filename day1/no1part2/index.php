<?php
$tahunKelahiran = 2009;
$tahunSekarang = date("Y");
$selisihTahun = $tahunSekarang - $tahunKelahiran;

if ($selisihTahun >= 17) {
    echo "Tahun kelahiran $tahunKelahiran sudah memiliki KTP, usia sekarang $selisihTahun";
} else {
    echo "Tahun kelahiran $tahunKelahiran belum memiliki KTP";
}
?>
