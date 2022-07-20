<!DOCTYPE html>
<html lang="" en>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pertama - Sign In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <h4><a href="#" class="navbar-brand">Aplikasi Pertama</a></h4>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="clearfix">&nbsp;</div>
    <div class="container">

        <div class="d-flex justify-content-center">
            <div class="card w-50">
                <div class="card-header text-white bg-info">
                    <h4>
                        <i class="fa-solid fa-lock text-warning"></i> Login Sistem
                    </h4>
                </div>
                <div class="card-body">
                    <form action="cekLogin.php" method="POST">
                        <div class="mb-3">
                            <label for="usernameLog">Username</label>
                            <input type="text" class="form-control" style="height:50px" id="username" name="username" placeholder="Masukkan Username Anda">
                        </div>
                        <div class="mb-3">
                            <label for="passwordLog">Password</label>
                            <input type="password" class="form-control" style="height:50px" id="password" name="password" placeholder="Masukkan Password Anda">
                        </div>
                        <button type="submit" class="btn btn-info text-white float-end"><i class="fa-solid fa-right-to-bracket text-success"></i> Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4af1d56044.js" crossorigin="anonymous"></script>
</body>

</html>