<?php
include_once('koneksi.php');

// tangkap data dari form
$tensi = $_POST['tensi'];
$berat = $_POST['berat'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];


// buat query
$query = "INSERT INTO periksa (tensi, berat, tanggal, keterangan, pasien_id ,dokter_id) 
VALUES ('$tensi', '$berat', '$tanggal', '$keterangan', '$pasien_id', '$dokter_id')";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}
