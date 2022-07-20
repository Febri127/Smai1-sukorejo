<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input") {
    $data = [
        'semester' => $_POST['semester'],
        'sebaran_semester' => $_POST['sebaran_semester'],
        'kd_prodi' => $_POST['kd_prodi']
    ];
    $simpan = __simpan($db, "semester", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=semester';
        </script>
    <?php
    } else {
        echo "gagal simpan" . $db->error;
    }
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'kd_semester' => $_GET['id']
    ];
    $delete = __delete($db, "semester", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=semester';
        </script>
    <?php
    } else {
        echo "gagal hapus" . $db->error;
    }
}
//end kondisi delete
//start kondisi update
elseif ($opsi == "update") {
    $data = [
        'semester' => $_POST['semester'],
        'sebaran_semester' => $_POST['sebaran_semester'],
        'kd_prodi' => $_POST['kd_prodi']
    ];
    $where = [
        'kd_semester' => $_POST['id']
    ];
    $update = __update($db, "semester", $data, $where);
    if ($update) {

    ?>
        <script>
            window.location.href = 'admin.php?target=semester';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update