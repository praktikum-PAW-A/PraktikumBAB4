<?php
$file = fopen('catatan.txt', 'a');
if ($file) {
    $isiTambahan = "Ini adalah baris tambahan di catatan.txt\n";
    if (fwrite($file, $isiTambahan) !== false) {
        echo "Berhasil menambahkan isi ke file catatan.txt";
    } else {
        echo "Gagal menambahkan isi ke file catatan.txt";
    }
    fclose($file);
} else {
    echo "Gagal membuka file catatan.txt";
}
?>