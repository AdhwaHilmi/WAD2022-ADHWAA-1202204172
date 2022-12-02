    <?php
        session_start();
    ?>
    <!DOCTYPE html>
    <html lang="eng">
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-success alert-dismissable fade show fade in" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['message']);
        endif;
    ?>
    <body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav gap-3">
            <a class="nav-link" style="color: white;" href="../pages/Home-Adhwa.php">Home</a>
            <a class="nav-link" style="color: white;" href="../pages/List-Adhwa.php">My car </a>
            <!-- SHOW LOGO -->
            <a class="navbar-brand" href="#">
            <img src= "../asset/images/logo-ead.png" alt="logoead" style="width:100px;">    
            </div>
        </div>
        </div>
    </nav>

        <div class="d-flex justify-content-center align-items-center" style="margin-top: 100px;">
            <div class="col-md-3">
                <div class="card">
                    <form action="../config/login.php" method="POST">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Login</h5>
                            <hr>
                            <div class="mb-3">
                                <label class="form-label" for="email"><b>Email</b></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Alamat E-Mail" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="password"><b>Kata Sandi</b></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Kata Sandi Anda" required>
                            </div>
                            <span id='cek' style="color: red;"></span>
                            <div class="row mt-1 mb-2">
                                <div class="col-sm-3 col-md-3"></div>
                                <div class="col-sm-3 col-md-4">
                                    <input class="ps-5 pe-5 btn btn-primary" type="submit" value="Login">
                                </div>
                            </div>
                    </form>
                </div>
                <h6 class="mb-4" style="text-align: center;">Anda belum punya akun? <a href="Regist-Adhwa.php">Daftar</a></h6>
            </div>
        </div>
        <img src="../asset/images/Innova.jpeg" alt="mobil" style="width:400px;height:500px;">
    </body>