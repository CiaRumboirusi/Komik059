<?php
include "inc/Connection.php";
include "app/Matakuliah.php";
$mat = new Matakuliah();
$data = $mat->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Matakuliah</h4>
            <a href="/komik059/index.php/matakuliah/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>SKS</td>
                    <td>Matakuliah</td>
                    <td>Jurusan</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $item['sks']; ?></td>
                        <td><?= $item['nama_matakuliah']; ?></td>
                        <td><?= $item['nama_jurusan']; ?></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>