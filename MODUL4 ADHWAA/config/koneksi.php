<?php
$connect = mysqli_connect("localhost:3315", "root","", "wad_modul4_adhwa");

if (!$connect) {
  die("Koneksi Error: " . $connection->connect_error);
}
