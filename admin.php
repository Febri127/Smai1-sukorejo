<?php
session_start();
include "config/__config_url.php";
include "config/__config_database.php";

if ($_SESSION['status_login'] != true) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aplikas Pertama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="#" class="navbar-brand">
                <h4>
                    Aplikasi Pertama
                </h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-cotrols="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link" <?php echo !isset($_GET['target']) || empty($_GET['target']) ? "active" : ""; ?>" href="<?php echo base_url(); ?>">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>

                    <?php if ($_SESSION['level'] == "admin") { ?>
                        <li class="nav-item">
                            <a class="nav-link" <?php echo isset($_GET['target']) && $_GET['target'] == 'prodi' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=prodi">
                                <i class="fa-solid fa-building-columns"></i> Prodi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?php echo isset($_GET['target']) && $_GET['target'] == 'semester' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=semester">
                                <i class="fa-solid fa-house"></i> Semester
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?php echo isset($_GET['target']) && $_GET['target'] == 'mahasiswa' ? "active" : ""; ?> href="<?php echo base_url(); ?>admin.php?target=mahasiswa">
                                <i class="fa-solid fa-graduation-cap"></i> Mahasiswa
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($_SESSION['level'] == "prodi") { ?>
                    <?php } ?>
                </ul>
            </div>

            <div class="d-flex">
                <a href="<?php echo base_url(); ?>Logout.php" class="btn btn-sm btn-danger">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </div>
        </div>
    </nav>
    <div class="clearfix">&nbsp;</div>
    <div class="container">
        <?php include_once "content.php"; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://kit.fontawesome.com/4af1d56044.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.table').DataTable( {
                dom: 'Bfrtip',
                buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
            }
                
            );
        });
    </script>
</body>

</html>