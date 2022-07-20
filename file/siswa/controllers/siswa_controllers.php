<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'kd_absen' => $_POST['kd_absen'],
        'npm' => $_POST['npm'],
        'nama' => $_POST['nama'],
        'kd_kelas' => $_POST['kd_kelas'],
        'kd_jurusan' => $_POST['kd_jurusan'],
        'bulan' => $_POST['bulan'],
        'hadir' => $_POST['hadir'],
        'sakit' => $_POST['sakit'],
        'alpha' => $_POST['alpha'],
        
    ];
    $simpan = __simpan($db, "absen", $data);
    if ($simpan) {
        ?>
        <script>
        window.location.href='admin.php?target=absen';
        </script>;
    <?php
    } else {
        echo "gagal simpan " . $db->error;
    }
}
// end kondisi input
// start kondisi dalate
elseif ($opsi == "delete")  {
    $where = [
        'kd_absen' => $_GET['id']
    ];
    $delete = __delete($db, "absen", $where);
    if ($delete) {
        ?>
        <script>
        window.location.href='admin.php?target=absen';
        </script>;
        <?php
    } else {
        echo "gagal hapus" . $db->error;
    }
}
//end kondisi delete
//start kondisi update
elseif ($opsi == "update") {
    if (!empty($_POST['password'])) {
        $data = [
            'kd_absen' => $_POST['kd_absen'],
            'npm' => $_POST['npm'],
            'nama' => $_POST['nama'],
            'kd_kelas' => $_POST['kd_kelas'],
            'kd_jurusan' => $_POST['kd_jurusan'],
            'bulan' => $_POST['bulan'],
            'hadir' => $_POST['hadir'],
            'sakit' => $_POST['sakit'],
            'alpha' => $_POST['alpha'],
        ];
    } else {
        $data = [
            'nama' => $_POST['nama'],
            'kd_kelas' => $_POST['kd_kelas'],
            'kd_jurusan' => $_POST['kd_jurusan'],
            'kd_absen' => $_POST['kd_absen'],
        ];
    }
    $where = [ 
        'absen' => $_POST['id']
    ];
    $update =__update($db, "absen", $data, $where);
    if ($update) {

        ?>
        <script>
        window.location.href='admin.php?target=absen';
        </script>;
        <?php
    } else {
        echo "gagal update" . $db->error;
    }
}
// end londisi update
?>