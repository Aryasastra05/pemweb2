<?php
include_once('koneksi.php');
$pasien = $dbh->query('SELECT * FROM pasien');
$dokter = $dbh->query('SELECT * FROM paramedik');

$periksa_id = $_GET['id'];
$periksa = $dbh->query("SELECT * FROM periksa WHERE id = $periksa_id")->fetch();


include_once('top.php');
include_once('menu.php');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Pasien</h1>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="periksa_update.php" method="post">
    <input type="hidden" value="<?= $periksa['id'] ?>" name="id">
        <div class="form-group row">
            <label for="tensi" class="col-4 col-form-label">Tensi</label>
            <div class="col-8">
                <input id="tensi" name="tensi" type="text" class="form-control" value="<?= $periksa['tensi'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="berat" class="col-4 col-form-label">Berat</label>
            <div class="col-8">
                <input id="berat" name="berat" type="text" class="form-control" value="<?= $periksa['berat'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
            <div class="col-8">
                <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $periksa['tanggal'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
            <div class="col-8">
                <input id="keterangan" name="keterangan" type="text" class="form-control" value="<?= $periksa['keterangan'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Pasien</label>
            <div class="col-8">
                <select id="pasien_id" name="pasien_id" class="custom-select">
                    <option value="">Pilih Pasien</option>
                    <?php foreach ($pasien as $pas) : ?>
                        <option value="<?= $pas['id'] ?>"<?= $periksa['pasien_id'] == $pas['id'] ? 'selected' : '' ?>><?= $pas['nama'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Dokter</label>
            <div class="col-8">
                <select id="dokter_id" name="dokter_id" class="custom-select">
                    <option value="">Pilih Dokter</option>
                    <?php foreach ($dokter as $dok) : ?>
                        <option value="<?= $dok['id'] ?>"<?= $periksa['dokter_id'] == $dok['id'] ? 'selected' : '' ?>><?= $dok['nama'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once('bottom.php');
?>