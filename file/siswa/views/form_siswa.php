<?php
$db = __database();
?>
<div class="card">
    <div class="card-header">
        <h4>Form Siswa</h4>
    </div>
    <div class="card-body">
        <form action="admin.php?target=siswa&action=input" method="post" data-parsley-validate class="form-horizontal form-label-left">
        <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Id
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                <input type="text" name="kd_absen" id="" class="form-control" value="<?php echo $rows->kd_absen; ?>" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md3 col-sm-3 col-lg-12" for="first-name">
                    Nis
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="npm" class="form-control" id=""/>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md3 col-sm-3 col-lg-12" for="first-name">
                    Nama
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nama" class="form-control" id=""/>
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
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
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                jurusan
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
            <label class="control-label col-md3 col-sm-3 col-lg-12" for="first-name">
                password
            </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="password" name="password" class="form-control" id=""/>
                </div>
            </div>

            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=siswa">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>