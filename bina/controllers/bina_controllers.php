<?php
$db = __database();
$opsi = $_GET['action'];
//start input
if ($opsi == "input"){
    $data = [
        'idbina' => $_POST['idbina'],
        'npm' => $_POST['npm'],
        'nama' => $_POST['nama'],
        'sebaran_bina' => $_POST['sebaran_bina']
    ];
    $simpan = __simpan($db, "bina", $data);
    if ($simpan) {
?>
        <script>
            window.location.href = 'admin.php?target=bina';
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
        'idbina' => $_GET['id']
    ];
    $delete = __delete($db, "bina", $where);
    if ($delete) {
    ?>
        <script>
            window.location.href = 'admin.php?target=bina';
        </script>
        <?php
    }else{
        echo "gagal hapus" . $db->error;
    }
}
//end kondisi delete
//start kondisi update
elseif($opsi == "update") {
    if (!empty($_POST['idbina'])) {
    $data = [
        'idbina' => $_POST['idbina'],
        'npm' => $_POST['npm'],
        'nama' => $_POST['nama'],
        'sebaran_bina' => $_POST['sebaran_bina']
        
    ];
} else {
    $data = [
        'idbina' => $_POST['idbina'],
        'npm' => $_POST['npm'],
        'nama' => $_POST['nama']
    ];
}
    $where = [
        'idbina' => $_POST['id']
    ];
    $update = __update($db, "bina", $data, $where);
    if($update){

    ?>
        <script>
            window.location.href ='admin.php?target=bina';
        </script>
<?php
    } else {
        echo "gagal update" . $db->error;
    }
}
//end kondisi update
