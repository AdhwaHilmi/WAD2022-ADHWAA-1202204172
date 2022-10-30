<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <section id="nav">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#000000;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="margin-left: auto; margin-right:auto;">
                        <li class="nav-item">
                            <a class="nav-link" href="Adhwa_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Adhwa_booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="Heading">
        <div class="heading">
            <h4 style="text-align: center; height: 40px; vertical-align: middle;line-height: 40px;">
                WELCOME TO EAD RENT
            </h4>
        </div>
    </section>

    <section>
        <div class="container-md" style="margin-left: auto; margin-right:auto; max-width : 80%">
            <p style="text-align: center; background-color:rgb(0, 0, 0); color:white; height:40px; vertical-align: middle; line-height: 40px;">
                Find your best deal, here!</p>
            <div class="row row-cols-1 row-cols-md-3 g-3" style="max-width: 90%;margin-left: auto; margin-right:auto;">

            <div class="card h-100">
                <img src="image/Rush.jpeg" class="card-img-top" alt="Relevant Clinic Photo 1">
                <div class="card-body">
                    <h4 class="card-title">Toyota Rush</h4>
                    <p>Rp. 300.000 / Hari</p>
                    <center>
                        <p style="color:blue;"><b>
                        1500 cc<br>
                        7 kursi<br>
                        Manual
                        </p></b>
                        <a class="btn btn-primary" href="Adhwa_booking.php?mobil=<?php echo 'Rush' ?>">Book now!</a>
                    </center>
                </div>
            </div>

            <div class="card h-100">
                <img src="image/Yaris.jpeg" class="card-img-top" alt="Relevant Clinic Photo 1">
                <div class="card-body">
                    <h4 class="card-title">Toyota Yaris</h4>
                    <p>Rp. 300.000 / Hari</p>
                    <center>
                        <p style="color:blue;"><b>
                        1500 cc<br>
                        5 kursi<br>
                        Matic
                        </p></b>
                        <a class="btn btn-primary" href="Adhwa_booking.php?mobil=<?php echo 'Yaris' ?>">Book now!</a>
                    </center>
                </div>
            </div>

            <div class="card h-100">
                <img src="image/Jazz.jpeg" class="card-img-top" alt="Relevant Clinic Photo 1">
                <div class="card-body">
                    <h4 class="card-title">Honda Jazz</h4>
                    <p>Rp. 350.000 / Hari</p>
                    <center>
                        <p style="color:blue;"><b>
                        1500 cc<br>
                        5 kursi<br>
                        Matic
                        </p></b>
                        <a class="btn btn-primary" href="Adhwa_booking.php?mobil=<?php echo 'Jazz' ?>">Book now!</a>
                    </center>
                </div>
            </div>
    </section>
    <footer>
        <br>
            <center>Created By Adhwaa_1202204172</center>
        </footer>
</body>
</html>