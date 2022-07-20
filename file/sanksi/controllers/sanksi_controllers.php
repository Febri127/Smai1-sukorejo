<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input"){
    $data = [
        'idsanksi' => $_POST['idsanksi'],
        'sanksi' => $_POST['sanksi']
    ];
    $simpan = __simpan($db, "sanksi", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=sanksi';
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
        'idsanksi' => $_GET['id']
    ];
    $delete = __delete($db, "sanksi", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=sanksi';
        </script>
        <?php
    }else{
        echo "gagal hapus" . $db->error;
    }
}
//end kondisi delete
//start kondisi update
elseif($opsi == "update") {
    if (!empty($_POST['idsanksi'])) {
    $data = [
        'idsanksi' => $_POST['idsanksi'],
        'sanksi' => $_POST['sanksi']
    ];
} else {
    $data = [
        'idsanksi' => $_POST['idsanksi'],
        'sanksi' => $_POST['sanksi']
    ];
}
    $where = [
        'idsanksi' => $_POST['id']
    ];
    $update = __update($db, "sanksi", $data, $where);
    if($update){

    ?>
        <script>
            window.location.href ='admin.php?target=sanksi';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
