  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Car | Adhwa_1202204172</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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

    <!-- Form -->
    <section id='form'>
      <div class="container">
        <h1 class="tambahh1">Tambah Mobil</h1>
        <p class="tambahp">Tambah Mobil Baru Anda Ke List Show Room</p>
        <form action="/showroom" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label for="nama" class="mb-3">Nama Mobil</label>
              <input type="text" id="nama" name="name" placeholder="Masukkan Nama Mobil">
            </div>

            <div class="mb-3">
              <label for="pemilik">Nama Pemilik</label>
              <input type="text" id="pemilik" name="owner" placeholder="Masukkan Nama Pemilik">
            </div>

            <div class="mb-3">
              <label for="merk">Merk</label>
              <input type="text" id="merk" name="brand" placeholder="Masukkan Merk Mobil">
            </div>

            <div class="mb-3">
              <label for="tanggalbeli">Tanggal Beli</label>
              <input type="date" id="tanggalbeli" name="purchase_date">
            </div>
          
            <div class="mb-3">
              <label for="desc">Deskripsi</label>
              <textarea class="form-control" id="desc" name="description" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
            </div>
          
            <div class="mb-3">
              <label for="inputGroupFile01">Foto</label>
              <input type="file" class="form-control" id="inputGroupFile01" name="img_path" style="height: 40px;">
            </div>
          
            <div class="mb-3">
              <label for="status">Status Pembayaran</label>
              <span class="d-flex">
                <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
                <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
                <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
                <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
              </span>
            </div>
          
          <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
        </form>
      </div>
    </section>
    <!-- Form End -->

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

  </html>