<?php
    require_once "conn.php";
    $id = $_GET["id"];
    $query = "DELETE FROM barang WHERE kode_barang = '$id'";
    $query2 = "DELETE FROM detail where kode_barang = '$id'";
    if (mysqli_query($conn, $query2)){
        echo "berhasil dihapus";
    }
    if (mysqli_query($conn, $query)) {
        header("location: Tugas10_index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>