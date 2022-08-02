<div class="card">
    <div class="card-header">
        <h4>List Kelas</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        //buat header table
        echo "<a class='btn btn-info btn-sm text-light' href='admin.php?target=sanksi&action=form'><i class='fa-solid fa-plus'></i> Tambah</a>
        <a = class='btn btn-warning btn-sm text-dark' href='#'><i class='fa-solid fa-print'></i> PrintOut Data</a>
        <a class='btn btn-primary btn-sm text-light' href='#'><i class='fa-solid fa-cloud-arrow-down'></i> Export Data</a>
        <br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
        <th>No</th><th>ID</th><th>Sanksi</th><th>#</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $join = [
            "LEFT JOIN jurusan as p on p.kd_jurusan=s.kd_jurusan"
        ];
        $q = __ambil($db, "sanksi as a");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['idsanksi'] . "</td>
            <td>" . $r['sanksi'] . "</td>
            <td>
            <a class='btn btn-success btn-sm' href='admin.php?target=sanksi&action=edit&id=" . $r['idsanksi'] ."'>
            <i class='fa-solid fa-pen-to-square'></i>
            </a>
            <a class='btn btn-danger btn-sm' href='admin.php?target=sanksi&action=delete&id=" . $r['idsanksi'] ."'>
            <i class='fa-solid fa-trash'></i>
            </a>
            </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>