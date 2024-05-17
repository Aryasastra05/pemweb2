<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$kategori = $_POST['kategori'];
$unit_kerja = $_POST['unit_kerja'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];


// buat query
$query = "INSERT INTO paramedik (nama, gender, kategori, unit_kerja_id, telpon ,alamat) 
VALUES ('$nama', '$gender', '$kategori', '$unit_kerja', '$telpon', '$alamat')";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: paramedik.php');
} else {
    echo "Gagal menyimpan data";
}
