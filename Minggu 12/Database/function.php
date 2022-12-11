<?php

//include <-- bisa pakai ini juga selain require_once
require_once __DIR__ . "/koneksi.php";

koneksi();

function retrieveData(){
    $koneksi = koneksi();
    
    $sql = "SELECT * FROM tugas_azmi";
    $result = $koneksi->query($sql);

    // foreach ($result as $data) {
    //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    // }
    // query itu untuk menampilkan result

    return $result;
}

// ambil data
function ambilSatuData($id){
    $koneksi = koneksi();
    
    $sql = "SELECT * FROM tugas_azmi WHERE id_tugas='$id'";
    $result = $koneksi->query($sql);

    return $result;
}


//addeddata
function addData($tugas, $deadline){
    $koneksi = koneksi();
    
    
    $sql = "INSERT INTO tugas_azmi (id_tugas,azmi_tugas,deadline) VALUES (NULL,'$tugas','$deadline')";
    /* query itu menampilkan result */
    /* kalau non query bisa pakai execute sql atau prepare */
    /* pakai query bisa dihack */
    $result = $koneksi->exec($sql);

    return $result;
}

/* edit data */
function editData($id, $tugas, $deadline){
    $koneksi = koneksi();
    
    $sql = "UPDATE tugas_azmi SET azmi_tugas='$tugas',deadline='$deadline' WHERE id_tugas = '$id'";
    $result = $koneksi->exec($sql);

    return $result;
}

/* deleted data */

function deleteData($id){
    $koneksi = koneksi();
    
    $sql = "DELETE FROM tugas_azmi WHERE id_tugas='$id'";
    $result = $koneksi->exec($sql);

    return $result;
}