<?php
$hostname = "localhost";
$username= "root";
$password = "";
$database_name = "db_umkm_pariwisata";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db -> connect_error){
    echo "Koneksi terputus!";
    die("Error!");
}
?>