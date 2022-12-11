<?php

//  Koneksi ke database menggunakan PDO

function koneksi(): PDO
{
    $host      = "localhost";
    $port      = 3306;
    $database  = "azmi-todolist";
    $username  = "root";
    $password  = "";

    // untuk mengecek terkoneksi atau tidak
//     try {
//         $con =  new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
//         echo "sukses";

        // $con = null;
//     } catch (\PDOException $th) {
//         $con =  new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
//         echo "gagal";
//     }

    // saat mengecek yang di bawah ini dihapus
    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}