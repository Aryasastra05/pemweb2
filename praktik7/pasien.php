<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query ="SELECT pasien.*, kelurahan.nama AS nama_kelurahan FROM pasien
JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id";
$pasiens = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Pasien</h3>
        <a href="pasien_create.php" class="btn btn-primary">Tambah Pasien</a>
    </div>

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kode</th>
            <th>Email</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>JK</th>
            <th>Alamat</th>
            <th>Kelurahan</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 0;
        foreach ($pasiens as $pasien) : ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $pasien['nama'] ?></td>
                <td><?= $pasien['kode'] ?></td>
                <td><?= $pasien['email'] ?></td>
                <td><?= $pasien['tmp_lahir'] ?></td>
                <td><?= $pasien['tgl_lahir'] ?></td>
                <td><?= $pasien['gender'] ?></td>
                <td><?= $pasien['alamat'] ?></td>
                <td><?= $pasien['nama_kelurahan'] ?></td>
                <td>
                    <a href="pasien_edit.php?id=<?= $pasien['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="pasien_delete.php?id=<?= $pasien['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>