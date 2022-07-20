<?php
$db = __database();
$where = [
    'kd_prodi' => $_GET['id']
];
$query = __ambil($db, "prodi", "*", $where);
//menampilakan hasil query dalam bentuk objct
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_array dll

$rows = $query->fetch_object();
//print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>Edit Member</h4>
    </div>
    <div class="card-body">
        <form action="admin.php?target=prodi&action=update" data-parsley-validate class="form-horizontal form-label-left" method="post">
            <input type="hidden" name="id" value="<?php echo $rows->kd_prodi; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    Nama Prodi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" id="nama_prodi" name="nama_prodi" value="<?php echo $rows->nama_prodi; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    Password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="password" id="password" name="password"> * KOSONGKAN JIKA TIDAK DIRUBAH
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=prodi"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>