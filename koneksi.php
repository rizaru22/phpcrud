<?php
$server = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "belajarcrud";

$koneksi = mysqli_connect($server, $user_db, $pass_db, $db_name);

if (mysqli_connect_error()) {
    echo "Koneksi Gagal :" . mysqli_connect_error();
}
