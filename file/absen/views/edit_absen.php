<?php
$db = __database();
$where = [
    'npm' => $_GET['id']
];
$query = __ambil($db, "absen", "*", $where);
// menampilkan hasil query bentuk object
// anda bisa juga mengunakan mysql_fetch....

$rows = $query->fetch_object();
//print_($$rows)
?> 
<div class="card">  
    <div class="card-header">
        <h4>Form Absen</h4>
    </div>  
    <div class="card-body">
        
        <form action="admin.php?target=absen&action=update" method="post" data-parseley-validate class="form-horizontal form-label-left">
        <input type="hidden" name="id" value="<?php echo $rows->npm; ?>">
        <div class="mb-3">
        <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    NIs
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
                </label> <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="kd_kelas" id="" class="form-control" value="<?php echo $rows->kd_kelas; ?>" />
                </div>
                 
            </div>
            <div class="mb-3">
                <label for="first-name" class="control-label col-md-3 col-sm-3 col-lg-12">
                    Jurusan
                </label> <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="kd_jurusan" id="" class="form-control" value="<?php echo $rows->kd_jurusan; ?>" />
                </div>
                 
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                Bulan
            </label>
	         <div class="col-md-6 col-sm-6 col-lg-12">
	            <select class="form-select" name="bulan">
                    <option value=""> Pilih Bulan </option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>   
	            </select>
	        </div>
        </div>
        <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                Tahun
            </label>
            <div class="col-md-6 col-sm-6 col-lg-12">
	        <select class="form-select" name="tahun">
		        <option value=""> Pilih Tahun </option>
		            <?php $tahun = date('Y');
		            for($i=2020;$i<$tahun+5;$i++) { ?>
		         <option value="<?php echo $i ?>"><?php echo $i ?></option>
		         <?php }?>
		    </select>
            </div>
            </div>

            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                Input Absen
            </label>
                <div class="col-md-3 col-sm-3 col-lg-6 d-flex align-items-center">
                    <option value="">Hadir</option>
                <td><input type="number" name="hadir" class="form-control d-flex" value="<?php echo $rows->hadir; ?>"></td>
                    <option value="">Idzin</option>
				<td><input type="number" name="sakit" class="form-control d-flex" value="<?php echo $rows->sakit; ?>"></td>
                    <option value="">Alpha</option>
				<td><input type="number" name="alpha" class="form-control" value="<?php echo $rows->alpha; ?>"></td>
                </div>
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                Sanksi
            </label>
            <div class="col-md-6 col-sm-6 col-lg-12">
            <select name="idsanksi" id="idsanksi" class="form-select">
                        <option value="">Pilih Sanksi</option>
                        <?php
                        $sanksi_data = __ambil($db, "sanksi");
                        while ($a = $sanksi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $a['idsanksi']; ?>" <?php echo $a['sanksi'] == $rows->sanksi ? "selected" : "" ?>>
                                <?php echo $a['sanksi']; ?>
                            </option>
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
</div>