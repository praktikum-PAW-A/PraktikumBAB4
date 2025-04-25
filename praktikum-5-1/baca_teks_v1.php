<?php
$isiFile = file_get_contents('data.txt');

if ($isiFile !== false) {
    echo nl2br($isiFile);
} else {
    echo "Gagal membaca file data.txt";
}
?>