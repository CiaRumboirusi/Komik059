<?php
include "inc/Connection.php";
include "app/Dosen.php";
$dsn = new Dosen();
$data = $dsn->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Dosen</h4>
            <a href="/komik059/index.php/dosen/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>NIDN</td>
                    <td>NAMA DOSEN</td>
                    <td>TELP/HP</td>
                    <td>ALAMAT</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $item['nidn']; ?></td>
                        <td><?= $item['nama_dosen']; ?></td>
                        <td><?= $item['alamat']; ?></td>
                        <td><?= $item['telp']; ?></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>