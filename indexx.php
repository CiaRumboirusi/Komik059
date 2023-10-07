<?php
include "app/Mahasiswa.php";
$mhs = new Mahasiswa();
$data = $mhs->tampil();
?>
            <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>NIM</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
            </tr>
            <?php foreach ($data as $key => $item) : ?>
                <tr>
                    <td><?= $key+1; ?></td>
                    <td><?= $item['nim']; ?></td>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['alamat']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>