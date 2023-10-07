<?php
include "inc/Connection.php";
include "app/Dosen.php";
$dsn = new Dosen();
$data = $dsn->tampil();
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Dosen
        </div>
    </div>
    <div class="card-body">
        <form action="/komik059/app/proses.php" method="post">
            <div class="form-group">
                <label for="">NIDN</label>
                <input type="text" class="form-control" name="nidn">
            </div>
            <div class="form-group">
                <label for="">Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
                <label for="">No Telp/Hp</label>
                <input type="text" class="form-control" name="telp">
            </div>
            <div class="form-group">
                <button type="submit" name="tambah_dosen" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>