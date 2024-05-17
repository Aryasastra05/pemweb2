<?php
include_once('koneksi.php');

// tangkap data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$kategori = $_POST['kategori'];
$unit_kerja = $_POST['unit_kerja'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

// buat query
$query = "UPDATE paramedik SET nama='$nama', gender='$gender', kategori='$kategori', unit_kerja_id='$unit_kerja', telpon='$telpon', alamat='$alamat' WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
     header('Location: paramedik.php');
} else {
    echo "Gagal menyimpan data";
}
