<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input"){
    $data = [
        'kd_kelas' => $_POST['kd_kelas'],
        'kelas' => $_POST['kelas'],
        'sebaran_kelas' => $_POST['sebaran_kelas'],
        'kd_jurusan' => $_POST['kd_jurusan']
    ];
    $simpan = __simpan($db, "kelas", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=kelas';
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
        'kd_kelas' => $_GET['id']
    ];
    $delete = __delete($db, "kelas", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=kelas';
        </script>
        <?php
    }else{
        echo "gagal hapus" . $db->error;
    }
}
//end kondisi delete
//start kondisi update
elseif($opsi == "update") {
    if (!empty($_POST['kd_kelas'])) {
    $data = [
        'kd_kelas' => $_POST['kd_kelas'],
        'kelas' => $_POST['kelas'],
        'sebaran_kelas' => $_POST['sebaran_kelas'],
        'kd_jurusan' => $_POST ['kd_jurusan']
    ];
} else {
    $data = [
        'kd_kelas' => $_POST['kd_kelas'],
        'kelas' => $_POST['kelas'],
        'sebaran_kelas' => $_POST['sebaran_kelas'],
        'kd_jurusan' => $_POST ['kd_jurusan']
    ];
}
    $where = [
        'kd_kelas' => $_POST['id']
    ];
    $update = __update($db, "kelas", $data, $where);
    if($update){

    ?>
        <script>
            window.location.href ='admin.php?target=kelas';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
