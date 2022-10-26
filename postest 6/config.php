<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "pesanan";

// simpan dalam variable
$db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){ //jika dbnya kosong makan akan keluar seperti dibawahc
    die("gagal terhubung");
}

?>