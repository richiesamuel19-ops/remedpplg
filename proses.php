<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "root",
    "donasi_db"
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$nama_donatur = $_POST['nama_donatur'];
$nominal = $_POST['nominal'];
$tanggal = $_POST['tanggal'];
$metode_pembayaran = $_POST['metode_pembayaran'];

$sql = "INSERT INTO donasi
(nama_donatur, nominal, tanggal, metode_pembayaran)
VALUES
('$nama_donatur', '$nominal', '$tanggal', '$metode_pembayaran')";

if (mysqli_query($koneksi, $sql)) {
    echo "
    <script>
        alert('Data berhasil disimpan');
        window.location='index.php';
    </script>
    ";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);

?>