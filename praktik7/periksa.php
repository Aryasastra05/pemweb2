<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT periksa.*, pasien.nama AS nama_pasien, paramedik.nama AS nama_paramedik FROM periksa
            JOIN pasien ON periksa.pasien_id = pasien.id
            JOIN paramedik ON periksa.dokter_id = paramedik.id";
$periksas = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Periksa</h3>
        <a href="periksa_create.php" class="btn btn-primary">Tambah Periksa</a>
    </div>

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Nama pasien</th>
            <th>tensi</th>
            <th>berat</th>
            <th>tanggal</th>
            <th>keterangan</th>
            <th>dokter</th>
            <th> action</th>
        </tr>

        <?php
        $no = 0;
        foreach ($periksas as $periksa) : ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $periksa['nama_pasien'] ?></td>
                <td><?= $periksa['tensi'] ?></td>
                <td><?= $periksa['berat'] ?></td>
                <td><?= $periksa['tanggal'] ?></td>
                <td><?= $periksa['keterangan'] ?></td>
                <td><?= $periksa['nama_paramedik'] ?></td>
                <td>
                    <a href="periksa_edit.php?id=<?= $periksa['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="periksa_delete.php?id=<?= $periksa['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>