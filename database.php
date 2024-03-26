<?php

$host="localhost";
$user="root";
$password="Yumiza#22";
$db="db_akademik";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>