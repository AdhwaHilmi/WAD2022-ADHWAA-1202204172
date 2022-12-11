  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Car - Adhwa_1202204172</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      <?php

use App\Models\Showroom;

?>
    </style>
  </head>

  <body>
    <!-- Nav -->
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
    <!-- Nav End -->

    <!-- Content -->
    <section id="list">
      <div class="container">
        <div>
          <h1>My Show Room</h1>
          <p>List Mobil ShowRoom Adhwa</p>
          @foreach($showrooms as $showroom)
          <div class="d-flex gap-5">
            <div class='card cardcontent' style='width: 18rem;'>
              <img src='/image/{{$showroom->image}}' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
              <div class='card-body'>
                <h5 class='card-title'>{{$showroom->name}}</h5>
                <p class='card-text'>{{$showroom->description}}</p>
                <span class='d-flex'>
                  <a href='Detail-Adhwa.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                  <a href='../config/delete.php?id=" . $row["id_mobil"] . "' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
                </span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    <footer class="fixed-bottom" style="padding-bottom: 50px;">
      <div class="container">
        <p style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">Jumlah Mobil : <?php echo(Showroom::all()->count()) ?></p>
      </div>
    </footer>
    <!-- footer end -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

  </html>