<div class="card">
    <div class="card-header">
        <h4>List Jurusan</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
    //buat header table
        echo "<a class ='btn btn-primary btn-sm' href='admin.php?target=jurusan&action=form'>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th><th>Kode jurusan</th><th>Nama jurusan</th><th>#</th>
        </tr>
        </thead>
        <tbody>";
    //ambildata
        $q = __ambil($db, "jurusan");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no ."</td>
            <td>" . $r['kd_jurusan'] ."</td>
            <td>" . $r['nama_jurusan'] ."</td>
            <td>
                <a class='btn btn-success btn-sm' href='admin.php?target=jurusan&action=edit&id=" . $r['kd_jurusan'] . "'>Edit</a>
                <a class='btn btn-danger btn-sm' href='admin.php?target=jurusan&action=delete&id=" . $r['kd_jurusan'] . "'>Hapus</a>
            </td>
        </tr>";
            $no++;
        }
        echo"</tbody></table></div>"; ?>
    </div>
</div>