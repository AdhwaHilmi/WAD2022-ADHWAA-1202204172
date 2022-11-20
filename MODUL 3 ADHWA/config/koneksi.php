<?php
$connection = new mysqli("localhost", "root", "", "modul3 showroom_adhwa_table",3315);

if (!$connection) {
  die("Koneksi Error: " . $connection->connect_error);
}
