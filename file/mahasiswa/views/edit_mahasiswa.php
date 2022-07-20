<?php
$db = __database();
$where = [
    'npm' => $_GET['id']
];
$query = __ambil($db, "mahasiswa", "*", $where);
//menampilkan hasil query dalam bentuk object
//anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows = $query->fetch_object();
//print_r($rows);
?><div class="card">
    <div class="card-header">
        <h4>From Mahasiswa</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=mahasiswa&action=update" data-parsley_validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->npm; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    NPM
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="npm" class="form-control" value="<?php echo $rows->npm; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nama" class="form-control" value="<?php echo $rows->nama; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Semester
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_semester" id="kd_semester" class="form-select">
                        <option value="">Pilih Semester</option>
                        <?php
                        $semester_data = __ambil($db, "semester");
                        while ($s = $semester_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $s['kd_semester']; ?>" <?php echo $s['kd_semester'] == $rows->kd_semester ? "selected" : "" ?>>
                                <?php echo $s['semester']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Prodi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_prodi" id="kd_prodi" class="form-select">
                        <option value="">Pilih Prodi</option>
                        <?php
                        $prodi_data = __ambil($db, "prodi");
                        while ($r = $prodi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $r['kd_prodi']; ?>"><?php echo $r['nama_prodi']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="password" name="password" class="form-control" /> * KOSONGKAN JIKA TIDAK DIRUBAH
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i>Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=mahasiswa"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>