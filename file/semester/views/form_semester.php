<div class="card">
    <div class="card-header">
        <h4>Form Semester</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=semester&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Semester
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="semester" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Sebaran
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sebaran_semester" id="sebaran_semester" value="ganjil">
                        <label class="form-check-label" for="sebaran_semester">
                            Ganjil
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sebaran_semester" id="sebaran_semester" value="genap">
                        <label class="form-check-label" for="sebaran_semester">
                            Genap
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    Prodi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <select name="kd_prodi" id="kd_prodi" class="form-select">
                        <option value="">Pilih Prodi</option>
                        <?php
                        $db = __database();

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
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>
                    <a class="btn btn-danger btn-sm" href="admin.php?target=semester"><i class="fa-solid fa-circle-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>