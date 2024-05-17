<?php
include_once('koneksi.php');

// tangkap data dari form
$id = $_POST['id'];
$tensi = $_POST['tensi'];
$berat = $_POST['berat'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];

// buat query
$query = "UPDATE periksa SET tensi='$tensi', berat='$berat', tanggal='$tanggal', keterangan='$keterangan', pasien_id='$pasien_id', dokter_id='$dokter_id' WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
     header('Location: periksa.php');
} else {
    echo "Gagal menyimpan data";
}
