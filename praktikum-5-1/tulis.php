<?php
$isi = "Ini adalah baris pertama di catatan.txt\n";
if (file_put_contents('catatan.txt', $isi) !== false) {
    echo "Berhasil menulis ke file catatan.txt";
} else {
    echo "Gagal menulis ke file catatan.txt";
}
?>