<?php

if (!isset($_GET['target'])) {
?>
<div class="wrapper">
           <div class="main-pages">
 
                <div class="row g-3 mb-3">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>SMAI 1 SUKOREJO</h2>
                            <p>Selamat datang di Aplikasi Bimbingan Konseling SMAI 1 Sukorejo</p>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-3 col-sm-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                </div>
                            </div>
                            <br>
                            <div class="card-footer bg-white">
                                <br>
                                <small class="text-start fw-bold">Siswa</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-calendar float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    
                                </div>
                            </div>
                            <br>
                            <div class="card-footer bg-white">
                                <br>
                                <small class="text-start fw-bold">Absen</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-graduation-cap float-start fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    
                                </div>
                            </div>
                            <br>
                            <div class="card-footer bg-white">
                                <br>
                                <small class="text-start fw-bold">Jurusan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="card p-2 shadow">
                            <div class="d-flex align-items-center px-2">
                                <i class="fa fa-home fa-3x py-auto" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    
                                </div>
                            </div>
                            <br>
                            <div class="card-footer bg-white">
                                <br>
                                <small class="text-start fw-bold">Kelas</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br><br><br><br>
                <div class="row g-2">
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                        <div class="card-header">
                    <h4>Grafik Siswa</h4>
                    <h5>SMA IBRAHIMY 1</h5>
                     </div>
                     <div class="card-body">
                            <canvas id="myChartOne"></canvas> 
                            <br>
                            <h6>Data Pelanggaran Siswa</h6>   
                        </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                     <div class="card-header">
                    <h4>Pembinaan Siswa</h4>
                     </div>
                    <div class="card-body">
                     <?php
                     $db = __database();
                     //buat header table
                     echo "<table class='table table-striped table-bordered'>
                    <thead>
                    <tr>
                    <th>No</th><th>ID</th><th>Npm</th><th>Nama</th><th>Pembinaan</th>
                    </tr>
                    </thead>
                    <tbody>";
                    // ambil data dari database
                     $join = [
                     "LEFT JOIN jurusan as p on p.kd_jurusan=s.kd_jurusan"
                     ];
                     $q = __ambil($db, "bina as a");
                    $no = 1;
                    while ($r = $q->fetch_array()) {
                    echo "<tr>
                    <td>" . $no . "</td>
                    <td>" . $r['idbina'] . "</td>
                    <td>" . $r['npm'] . "</td>
                    <td>" . $r['nama'] . "</td>
                    <td>" . $r['sebaran_bina'] . "</td>
                    </tr>";
                    $no++;
                    }
                            echo "</tbody></table></div>"; ?>
                    </div>
                </div>
            </div>
        </div>
                
                    <br><br><br><br>

                Ip Adress anda: <?php echo $_SERVER ['REMOTE_ADDR'];?>
                <br> 
                Tanggal : <?php echo date("d/m/y");?>
            </div>
        </div>
    </div>
    </div>
    <?php
} else {
    $target = $_GET['target'];
    if (empty($target)) {
        ?>
<?php
    }

    if (!isset($_GET['action'])) {
        getContentAdmin(base_url(), $target);
    }else{
        getContentAdmin(base_url(), $target, $_GET['action']);
    }
}
?>