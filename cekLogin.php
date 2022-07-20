<?php
session_start();
include "config/__config_database.php";
$db = __database();
$username = $_POST['username'];
$password = sha1($_POST['password']);
// cek apakah user apakah login sebagai admin, prodi, atau mahasiswa
$where = [
    'username' => $username,
    'password' => $password
];
$cekUsers = __ambil($db, "users", "*", $where);
if ($cekUsers->num_rows > 0) {
    $r = $cekUsers->fetch_object();
    $_SESSION['id'] = $r->iduser;
    $_SESSION['name'] = $r->username;
    $_SESSION['level'] = $r->level;
    $_SESSION['status_login'] = true;

    echo "<script>
window.location.href='index.php';
</script>";
} else {
    $whereProdi = [
        'kd_prodi' => $username,
        'password' => $password
    ];
    $cekProdi = __ambil($db, "prodi", "*", $whereProdi);
    if ($cekProdi->num_rows > 0) {
        $p = $cekProdi->fetch_object();
        $_SESSION['id'] = $p->kd_prodi;
        $_SESSION['name'] = $p->nama_prodi;
        $_SESSION['level'] = 'prodi';
        $_SESSION['status_login'] = true;

        echo "<script>
window.location.href='index.php';
</script>";
    } else {
        $whereMhs = [
            'npm' => $username,
            'password' => $password
        ];
        $cekMahasiswa = __ambil($db, "mahasiswa", "*", $whereMhs);
        if ($cekMahasiswa->num_rows > 0) {
            $m = $cekMahasiswa->fetch_object();
            $_SESSION['id'] = $m->npm;
            $_SESSION['name'] = $m->nama;
            $_SESSION['level'] = 'mhs';
            $_SESSION['status_login'] = true;
            echo "<script>
window.location.href='index.php';
</script>";
        } else {
            echo "<script>
alert('Maaf, Anda tidak memiliki akses ke sistem');
window.location.href='index.php';
</script>";
        }
    }
}
