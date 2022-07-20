<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        'kd_jurusan' => $_POST['kd_jurusan'],
        'nama_jurusan' => $_POST['nama_jurusan'],
        'password' => sha1($_POST['password'])
    ];
    $simpan = __simpan($db, "jurusan", $data);
    if ($simpan) {
?>
    <script>
        window.location.href = 'admin.php?target=jurusan';
    </script>
    <?php
    } else {
        echo "gagal simpan" . $db->error;
    }
}
// end kondisi input
// start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'kd_jurusan' => $_GET['id']
    ];
    $delete = __delete($db, "jurusan", $where);
    if ($delete) {
?>
    <script>
        window.location.href = 'admin.php?target=jurusan';
    </script>
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
            'nama_jurusan' => $_POST['nama_jurusan'],
            'password' => sha1($_POST['password'])
        ];
    }else {
        $data = [
            'nama_jurusan' => $_POST['nama_jurusan']
        ]; 
    }
    $where = [
        'kd_jurusan' => $_POST['id']
    ];
    $update = __update($db, "jurusan", $data, $where);
    if ($update) {
        ?>
            <script>
                window.location.href = 'admin.php?target=jurusan';
            </script>
            <?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>

