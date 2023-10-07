<?php
include "app/Jurusan.php";
$jrs = new Jurusan();
$data = $jrs->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar JURUSAN</h4>
            <a href="/komik059/index.php/jurusan/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>NAMA JURUSAN</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $item['nama_jurusan']; ?></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>