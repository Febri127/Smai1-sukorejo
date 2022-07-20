<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        'kd_prodi' => $_POST['kd_prodi'],
        'nama_prodi' => $_POST['nama_prodi'],
        'password' => sha1($_POST['password'])
    ];
    $simpan = __simpan($db, "prodi", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=prodi';
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
        'kd_prodi' => $_GET['id']
    ];
    $delete = __delete($db, "prodi", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=prodi';
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
            'nama_prodi' => $_POST['nama_prodi'],
            'password' => sha1($_POST['password'])
        ];
    } else {
        $data = [
            'nama_prodi' => $_POST['nama_prodi']
        ];
    }
    $where = [
        'kd_prodi' => $_POST['id']
    ];
    $update = __update($db, "prodi", $data, $where);
    if ($update) {
    ?>
        <script>
            window.location.href = 'admin.php?target=prodi';
        </script>
<?php
    } else {

        echo "gagal update" . $db->error;
    }
}
//end kondisi update
?>