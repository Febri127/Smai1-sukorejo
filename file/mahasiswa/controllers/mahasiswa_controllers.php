<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'npm' => $_POST['npm'],
        'nama' => $_POST['nama'],
        'kd_semester' => $_POST['kd_semester'],
        'kd_prodi' => $_POST['kd_prodi'],
        'password' => sha1($_POST['password'])
    ];
    $simpan = __simpan($db, "mahasiswa", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=mahasiswa';
        </script>
    <?php
    } else {
        echo "gagal simpan" . $db->error;
    }
}
//end kondisi input
// start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'npm' => $_GET['id']
    ];
    $delete = __delete($db, 'mahasiswa', $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=mahasiswa';
        </script>
    <?php
    } else {
        echo "gagal hapus " . $db->error;
    }
}
//end kondisi delete
//start kondis update
elseif ($opsi == "update") {
    if (!empty($_POST['password'])) {
        $data = [
            'nama' => $_POST['nama'],
            'kd_semester' => $_POST['kd_semester'],
            'kd_prodi' => $_POST['kd_prodi'],
            'password' => sha1($_POST['password'])
        ];
    } else {
        $data = [
            'nama' => $_POST['nama'],
            'kd_semester' => $_POST['kd_semester'],
            'kd_prodi' => $_POST['kd_prodi'],
        ];
    }
    $where = [
        'npm' => $_POST['id']
    ];
    $update = __update($db, "mahasiswa", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=mahasiswa';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
?>