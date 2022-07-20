<?php

if (!isset($_GET['target'])) {
?>
<div class="wrapper">
           <div class="main-pages">
 
                <div class="mb-3">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="d-block bg-white rounded shadow p-3">
                            <h2>SMAI 1 SUKOREJO</h2>
                            <p>Selamat datang di Aplikasi Bimbingan Konseling SMAI 1 Sukorejo</p>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                            <canvas id="myChartOne"></canvas>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="d-block rounded shadow bg-white p-3">
                            <canvas id="myChartTwo"></canvas>

                        </div>
                    </div>
                </div>
                <br><br><br><br>
                Ip Adress anda: <?php echo $_SERVER ['REMOTE_ADDR'];?>
                <br> 
                Tanggal : <?php echo date("d/m/y");?>
            </div>
        </div>
    </div>
    </div>
    <?php
} else {
    $target = $_GET['target'];
    if (empty($target)) {
        ?>
<?php
    }

    if (!isset($_GET['action'])) {
        getContentAdmin(base_url(), $target);
    }else{
        getContentAdmin(base_url(), $target, $_GET['action']);
    }
}
?>