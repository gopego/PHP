<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>Fahmi</title>
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
    <div class="container d-flex flex-column col-8">
        <h1 class="text-center mt-4">Tugas PHP 8: CRUD</h1>
        <section>
            <div class="container">
                <div class="card text-bg-dark">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Input Data Barang</h5>                        
                    
                    <form action="Tugas8_input.php" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="">Nama barang</label>
                                <input type="text" name="nama_barang" id="name" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="">Harga barang</label>
                                <input type="text" name="harga" id="name" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="">Jumlah barang</label>
                                <input type="text" name="jumlah" id="name" class="form-control" required>
                            </div>


                            <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                                <input type="submit" name="submit" id="submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
        </section>

        <section style="margin: 50px 0;">
            <div class="container">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th class="text-center" scope="col">Harga Barang</th>
                            <th class="text-center" scope="col">Jumlah Barang</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=0;                        
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM barang";
                        if ($result = $conn->query($sql_query)) {
                            while ($row = $result->fetch_assoc()) {
                                $i++;
                                $Id = $row['kode_barang'];
                                $nama_barang = $row['nama_barang'];
                                $harga = $row['harga'];
                                $jumlah = $row['jumlah'];
                        ?>

                                <tr class="trow">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $nama_barang; ?></td>
                                    <td class="text-center"><?php echo $harga; ?></td>
                                    <td class="text-center"><?php echo $jumlah; ?></td>
                                    <td class="text-center"><a href="Tugas8_update.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a>
                                        <a href="Tugas8_delete.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>


</body>

</html>