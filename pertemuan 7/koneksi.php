<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'wpsmt5';

$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM calon_mhs');

//ambil data dari tabel calon mhs
//mysqli_fetch_row(); mengembalikan nilai dalam bentuk numerik
//mysqli_fetch_assoc();mengembalikan data dalam bentuk field
//mysqli_fetch_array();mengembalikan data dalam bentuk field dan numerik

//while ($camaba = mysqli_fetch_array($result)){
//var_dump($camaba);
//}
?>