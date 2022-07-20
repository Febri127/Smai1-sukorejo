<div class="card">
    <div class="card-header">
        <h4>Form Kelas</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=sanksi&action=input" data-parsley-validate class="form-horizontal form-lebel-left">
        <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    ID
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="idsanksi" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
                    SANKSI
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="sanksi" class="form-control" />
                </div>
            </div>
            
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="Simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php?target=sanksi">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>