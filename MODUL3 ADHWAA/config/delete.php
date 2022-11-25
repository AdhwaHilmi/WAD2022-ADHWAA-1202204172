<?php
require './koneksi.php';

$id = $_GET['id'];

$mysql = "DELETE FROM showroomadhwa WHERE id_mobil = $id";

if (mysqli_query($connection, $mysql)) {
  header("location: ../pages/List-Adhwa.php?pesan=delete");
} else {
  echo "Error";
}
