<?php

if (!isset($_GET['target'])) {
?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Halaman Utama</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                Selamat Datang Di Aplikasi Pertama, Aplikasi ini disediakan hanaya untuk belajar <Br>
                dasar-dasar membuat aplikasi website yang dinamis
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                Ip Adress anda: <?php echo $_SERVER ['REMOTE_ADDR'];?>
                <br>
                Tanggal : <?php echo date("d/m/y");?>
            </div>
        </div>
    </div>
    <?php
} else {
    $target = $_GET['target'];
    if (empty($target)) {
        ?>
        <script>
            window.location.href = 'admin.php';
        </script>
<?php
    }

    if (!isset($_GET['action'])) {
        getContentAdmin(base_url(), $target);
    }else{
        getContentAdmin(base_url(), $target, $_GET['action']);
    }
}
?>