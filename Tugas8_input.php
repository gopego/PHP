<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        if($nama_barang != "" && $harga != "" && $jumlah != "" ){
            $sql = "INSERT INTO barang (nama_barang, harga, jumlah) VALUES ('$nama_barang', $harga, $jumlah)";
            if (mysqli_query($conn, $sql)) {
                header("location: Tugas8_index.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Cannot be empty!";
        }
    }
?>