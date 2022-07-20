<div class="card">
    <div class="card-header">
        <h4>Form Kelas</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=kelas&action=input" data-parsley-validate class="form-horizontal form-lebel-left">
        <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    ID
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="kd_kelas" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    Kelas
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="kelas" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    Semester
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sebaran_kelas" id="sebaran_kelas" value="A">
                        <label class="form-check-label" for="sebaran_kelas">
                            A
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sebaran_kelas" id="sebaran_kelas" value="B">
                        <label class="form-check-label" for="sebaran_kelas">
                            B
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    Jurusan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_jurusan" id="kd_jurusan" class="form-select">
                        <option value="">Pilih jurusan</option>
                        <?php
                        $db = __database();
                        $jurusan_data = __ambil($db, "jurusan");
                        while ($r = $jurusan_data->fetch_array()) {
                            ?>
                            <option value="<?php echo $r ['kd_jurusan'];?>"><?php echo $r['nama_jurusan'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=kelas">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>