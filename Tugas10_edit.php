<?php
require_once "conn.php";
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $sql = "UPDATE barang SET nama_barang= '$nama_barang', harga= $harga, jumlah= $jumlah  WHERE kode_barang= " . $_POST["id"];
    if (mysqli_query($conn, $sql)) {
        echo "update sukses";
    } else {
        echo "Something went wrong. Please try again later.";
    }
   // echo "$nama_barang";


?>