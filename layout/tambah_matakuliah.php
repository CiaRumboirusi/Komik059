<?php
include "inc/Connection.php";
include "app/Jurusan.php";
$jur = new Jurusan();
$data = $jur->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Matakuliah
        </div>
    </div>
    <div class="card-body">
        <form action="/komik059/app/proses.php" method="post">
            <div class="form-group">
                <label for="">SKS</label>
                <input type="text" class="form-control" name="sks">
            </div>
            <div class="form-group">
                <label for="">Nama Matakuliah</label>
                <input type="text" class="form-control" name="nama_matakuliah">
            </div>
            <div class="form-group">
                <label for="">Jurusan</label>
                <select name="id_jurusan" class="form-control" id="">
                    <?php foreach ($data as $item) : ?>
                        <option value="<?= $item['id_jurusan'] ?>"><?= $item['nama_jurusan'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="tambah_matakuliah" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>