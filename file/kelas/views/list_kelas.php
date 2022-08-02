<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-home"></i>Kelas Utara</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        //buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=kelas&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <a = class='btn btn-warning btn-sm text-dark' href='#'><i class='fa-solid fa-print'></i> PrintOut Data</a>
        <a class='btn btn-primary btn-sm text-light' href='#'><i class='fa-solid fa-cloud-arrow-down'></i> Export Data</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
        <th>No</th><th>ID</th><th>kelas</th><th>Sebaran</th><th>Jurusan</th><th>#</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $join = [
            "LEFT JOIN jurusan as p on p.kd_jurusan=s.kd_jurusan"
        ];
        $q = __ambil($db, "kelas as s", "*", null, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['kd_kelas'] . "</td>
            <td>" . $r['kelas'] . "</td>
            <td>" . $r['sebaran_kelas'] . "</td>
            <td>" . $r['nama_jurusan'] . "</td>
            <td>
            <a class='btn btn-success btn-sm' href='admin.php?target=kelas&action=edit&id=" . $r['kd_kelas'] ."'>
                <i class='fa-solid fa-pen-to-square'></i>
            </a>
            <a class='btn btn-danger btn-sm' href='admin.php?target=kelas&action=delete&id=" . $r['kd_kelas'] ."'>
                <i class='fa-solid fa-trash'></i>
            </a>
            </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>