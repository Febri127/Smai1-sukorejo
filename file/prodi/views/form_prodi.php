<div class="card">
    <div class="card-header">
        <h4>Form Prodi</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=prodi&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Kode Prodi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="kd_prodi" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="firts-name">
                    Nama Prodi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nama_prodi" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    Password
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="password" id="password" name="password" />
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