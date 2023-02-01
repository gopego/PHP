<!DOCTYPE html>
<html lang="en">
<?php
    require_once "conn.php";
    if(isset($_POST["nama_barang"]) && isset($_POST["harga"]) && isset($_POST["jumlah"])){
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $sql = "UPDATE barang SET nama_barang= '$nama_barang', harga= $harga, jumlah= $jumlah  WHERE kode_barang= ".$_GET["id"];
        if (mysqli_query($conn, $sql)) {
            header("location: Tugas8_index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Helvetica;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 60s ease infinite;
            height: 100vh;

        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>

<body>
<div class="bar container-fluid bg-dark">
        <h5 class="text-light">Selamat
            <?php
            date_default_timezone_set('Asia/Jakarta');
            setlocale(LC_ALL, 'id-ID', 'id_ID');
            if (date("H") < 11) {
                echo "vagi ";
            } elseif (date("H") > 11 AND date("H") < 15) {
                echo "siang ";
            }            
            else {
                echo "malam ";
            }
            ?>
            Fahmi. Hari ini adalah
            <?php
            date_default_timezone_set('Asia/Jakarta');
            setlocale(LC_ALL, 'id-ID', 'id_ID');
            echo strftime("%A, %d %B %Y");
            ?> Pukul <?php echo date("H:i") ?>
        </h5>
    </div>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Update Data</h1>
        <div class="container col-8">
            <?php 
                require_once "conn.php";
                $sql_query = "SELECT * FROM barang WHERE kode_barang = ".$_GET["id"];
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result -> fetch_assoc()) { 
                        $Id = $row['kode_barang'];
                        $nama_barang = $row['nama_barang'];
                        $harga = $row['harga'];
                        $jumlah = $row['jumlah'];
            ?>
                            <div class="card text-bg-dark">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Update Data Barang</h5>                        
                    
                        <form action="Tugas8_update.php?id=<?php echo $Id; ?>" method="post">
                                <div class="row h-100 align-content-center">
                                        <div class="form-group col-lg-3">
                                            <label for="">Nama Barang</label>
                                            <input type="text" name="nama_barang" id="name" class="form-control" value="<?php echo $nama_barang ?>" required>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="">Harga Barang</label>
                                            <input type="text" name="harga" id="name" class="form-control" value="<?php echo $harga ?>" required>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="">Jumlah Barang</label>
                                            <input type="text" name="jumlah" id="name" class="form-control" value="<?php echo $jumlah ?>" required>
                                        </div>
                                        
                                        
                                        <div class="form-group col-lg-2"  style="display: grid;align-items:  flex-end;">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary " value="Update">
                                        </div>
                                </div>
                            </form>
                    </div>
                </div>

                            
            <?php 
                    }
                }
            ?>
        </div>
    </section>
</body>

</html>