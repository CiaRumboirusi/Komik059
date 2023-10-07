<?php
include "inc/Connection.php";
include "app/Mahasiswa.php";
$mhs = new Mahasiswa();
$data = $mhs->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Daftar Mahasiswa</h4>
            <a href="/komik059/index.php/mahasiswa/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>NO</td>
                    <td>NPM</td>
                    <td>NAMA</td>
                    <td>JENIS KELAMIN</td>
                    <td>TELP/HP</td>
                    <td>ALAMAT</td>
                    <td>JURUSAN</td>
                </tr>
                <?php foreach ($data as $key => $item) : ?>
                    <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $item['npm']; ?></td>
                        <td><?= $item['nama_mahasiswa']; ?></td>
                        <td><?= $item['gender']; ?></td>
                        <td><?= $item['no_telp']; ?></td>
                        <td><?= $item['alamat']; ?></td>
                        <td><?= $item['nama_jurusan']; ?></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>