<?php

$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "toko2";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO barang (nama_barang, harga, jumlah) VALUES ('$nama_barang', $harga, $jumlah)";

  if (mysqli_query($conn, $sql)) {
    echo "update sukses";
} else {
    echo "Something went wrong. Please try again later.";
}
?>