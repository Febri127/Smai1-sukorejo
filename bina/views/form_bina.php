<div class="card">
    <div class="card-header">
        <h4>Form Kelas</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=bina&action=input" data-parsley-validate class="form-horizontal form-lebel-left">
        <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    ID
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="idbina" class="form-control" />
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
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    Pembinaan
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sebaran_bina" id="sebaran_binas" value="S">
                        <label class="form-check-label" for="sebaran_bina">
                            Sudah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sebaran_bina" id="sebaran_binas" value="P">
                        <label class="form-check-label" for="sebaran_bina">
                            Proses
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sebaran_bina" id="sebaran_binas" value="B">
                        <label class="form-check-label" for="sebaran_bina">
                            Belum
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=bina">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>