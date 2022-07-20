<?php
$db = __database();
$where = ['kd_jurusan' => $_GET['id']
];
$query =__ambil($db, "jurusan", "*", $where);
//menampilakan hasil query dalam bentuk objct
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_array dll

$rows     = $query->fetch_object();
//print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Member</h4>
    </div>
    <div class="card-body">
        <form method="post" action= "admin.php?target=jurusan&action=update" data-parsley-validate class = "form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->kd_jurusan; ?>">
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Nama Jurusan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" id="kd_jurusan" name="nama_jurusan" value="<?php echo $rows->nama_jurusan; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="firts-name">
                    password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="password" id="password" name="password"> * KOSONGKAN JIKA TIDAK DIUBAH
            </div>
        </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=jurusan">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>