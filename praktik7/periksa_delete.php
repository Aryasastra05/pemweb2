<?php
include_once('koneksi.php');

// tangkap id
$id = $_GET['id'];

// buat query
$query = "DELETE FROM periksa WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)) {
    header('Location: periksa.php');
} else {
    echo "Gagal menghapus data";
}
