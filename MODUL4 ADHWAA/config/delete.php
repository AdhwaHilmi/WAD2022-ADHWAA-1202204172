<?php
require './koneksi.php';

$id = $_GET['id'];

$mysql = "DELETE FROM showroom_adhwa_table WHERE id_mobil = $id";

if (mysqli_query($connect, $mysql)) {
  header("location: ../pages/List-Adhwa.php?pesan=delete");
} else {
  echo "Error";
}
