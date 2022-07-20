<div class="card">
    <div class="card-header">
        <h4><i class="fa-solid fa-database"></i> Data Mahasiswa</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        //buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=mahasiswa&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <a = class='btn btn-warning btn-sm text-dark' href='#'><i class='fa-solid fa-print'></i> PrintOut Data</a>
        <a class='btn btn-primary btn-sm text-light' href='#'><i class='fa-solid fa-cloud-arrow-down'></i> Export Data</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th><th>NPM</th><th>Nama</th><th>Semester</th><th>Prodi</th><th>Opsi</th>
        </tr>
        </thead>
        <tbody>";
        //ambil data dari database
        $join = [
            "LEFT JOIN prodi as p on p.kd_prodi=m.kd_prodi",
            "LEFT JOIN semester as s on s.kd_semester=m.kd_semester"
        ];
        $where = [
            'm.kd_prodi' => $_SESSION['id']
        ];
        $q = __ambil($db, "mahasiswa as m", "*", null, $join);
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['npm'] . "</td>
            <td>" . $r['nama'] . "</td>
            <td>" . $r['semester'] . "</td>
            <td>" . $r['nama_prodi'] . "</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=mahasiswa&action=edit&id=" . $r['npm'] . "'>
                    <i class='fa-solid fa-pen-to-square'></i>
                </a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=mahasiswa&action=delete&id=" . $r['npm'] . "'>
                    <i class='fa-solid fa-trash'></i>
                </a>
            </td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>