<?php
// Variable untuk koneksi ke MySQL
$server = "localhost";
$username = "root";
$password = "";
$databasename = "museum";

// Syntax untuk koneksi ke MySQL
$con = mysqli_connect($server, $username, $password, $databasename);

// Perkondisian jika gagal konek ke MySQL
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
