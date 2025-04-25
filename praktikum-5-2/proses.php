<!-- filepath: c:\xampp\htdocs\Bab5 - praktikum\praktikum-5-2\proses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Data</title>
    <link rel="stylesheet" href="style-proses.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $email = $_POST['email'];

            $data = "Nama: $nama | NIM: $nim | Email: $email\n";

            $file = 'data_mahasiswa.txt';
            if (file_put_contents($file, $data, FILE_APPEND) !== false) {
                echo "<h1>Data Berhasil Disimpan</h1>";
                echo "<p>Data Anda telah berhasil disimpan ke file <strong>data_mahasiswa.txt</strong>.</p>";
            } else {
                echo "<h1>Gagal Menyimpan Data</h1>";
                echo "<p>Terjadi kesalahan saat menyimpan data. Silakan coba lagi.</p>";
            }
        } else {
            echo "<h1>Akses Tidak Valid</h1>";
            echo "<p>Silakan kembali ke formulir dan isi data dengan benar.</p>";
        }
        ?>
        <a href="form.html">Kembali ke Formulir</a>
    </div>
</body>
</html>