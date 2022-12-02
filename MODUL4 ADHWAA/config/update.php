  <?php
  require './koneksi.php';

  $id = $_GET['id'];
  $cname = $_POST['nama'];
  $owner = $_POST['pemilik'];
  $carBrand = $_POST['merk'];
  $tanggalbeli = $_POST['tanggalbeli'];
  $desc = $_POST['desc'];
  $status = $_POST['status'];
  $carPhoto = $_FILES['gambar']['name'];

  $target = "../asset/images/";

  if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $carPhoto)) {
    $sql = "UPDATE showroom_adhwa_table SET nama_mobil = '$cname', pemilik_mobil = '$owner', merk_mobil = '$carBrand', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', foto_mobil = '$carPhoto', status_pembayaran = '$status' WHERE id_mobil = $id";
    if (mysqli_query($connect, $sql)) {
      header("location: ../pages/List-Adhwa.php");
    } else {
      echo "Error";
    }
  } else {
    echo "Error";
  }
