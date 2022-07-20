<?php
$db = __database();
$where = [
    'kd_absen' => $_GET['id']
];
$query = __ambil($db, "absen", "*", $where);
// menampilkan hasil query bentuk object
// anda bisa juga mengunakan mysql_fetch....

$rows = $query->fetch_object();
//print_($$rows)
?> <div class="card">
    <div class="card-header">
        <h4>Form Absen</h4>
    </div>  
    <div class="card-body">
        <form action="admin.php?target=siswa&action=update" method="post" data-parseley-validate class="form-horizontal form-label-left">
        <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Id
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="npm" id="" class="form-control" value="<?php echo $rows->kd_absen; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Nis
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="npm" id="" class="form-control" value="<?php echo $rows->npm; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Nama
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nama" id="" class="form-control" value="<?php echo $rows->nama; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Kelas
                </label>  
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_kelas" id="kd_kelas" class="form-select">
                        <option value="">Pilih Kelas</option>
                        <?php
                        $kelas_data = __ambil($db, "kelas");
                        while ($s = $kelas_data->fetch_array()) {
                        ?>
                        <option value="<?php echo $s['kd_kelas']; ?>"><?php echo $s['kd_kelas']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Jurusan
                </label> 
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_jurusan" id="kd_jurusan" class="form-select">
                        <option value="">Pilih Jurusan</option>
                        <?php
                    $jurusan_data = __ambil($db, "jurusan");
                    while ($r = $jurusan_data->fetch_array()) {
                        ?>
                        <option value="<?php echo $r['kd_jurusan']; ?>"><?php echo $r['nama_jurusan']; ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>

            
            <div class="mb-3">
                <div class="col-md-3 col-sm-3 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                    <a href="admin.php?target=absen" class="btn btn-danger btn-sm">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>