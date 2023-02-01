<?php
    require_once "conn.php";
    $id = $_GET["id"];
    $query = "DELETE FROM barang WHERE kode_barang = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: Tugas8_index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>