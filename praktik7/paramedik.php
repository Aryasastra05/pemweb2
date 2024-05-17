<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT paramedik.*, unit_kerja.nama AS nama_unit_kerja FROM paramedik
JOIN unit_kerja ON paramedik.unit_kerja_id = unit_kerja.id";
$paramediks = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Paramedik</h3>
        <a href="paramedik_create.php" class="btn btn-primary">Tambah paramedik</a>
    </div>

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Nama paramedik</th>
            <th>Gender</th>
            <th>Kategori</th>
            <th>Unit Kerja</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th> action</th>
        </tr>

        <?php
        $no = 0;
        foreach ($paramediks as $paramedik) : ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $paramedik['nama'] ?></td>
                <td><?= $paramedik['gender'] ?></td>
                <td><?= $paramedik['kategori'] ?></td>
                <td><?= $paramedik['nama_unit_kerja'] ?></td>
                <td><?= $paramedik['telpon'] ?></td>
                <td><?= $paramedik['alamat'] ?></td>
                <td>
                    <a href="paramedik_edit.php?id=<?= $paramedik['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="paramedik_delete.php?id=<?= $paramedik['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>