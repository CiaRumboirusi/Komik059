<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Tambah Jurusan
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Nama Jurusan</label>
                <input type="text" class="form-control" name="nama_jurusan">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "app/Jurusan.php";
        $jrs = new Jurusan();
        $jrs->tambah($_POST);
        header("Location: http://localhost/komik059/index.php/jurusan");
    }
?>