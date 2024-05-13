<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "array";

$database = mysqli_connect($server, $user, $password, $nama_database);

if( !$database ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
} else {
    echo"";
}

?>