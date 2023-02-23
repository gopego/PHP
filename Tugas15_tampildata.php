
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
    <?php
require_once ("Tugas15_connection.php");
$conn=new Connection();
$result=$conn->konek("toko2");


?>
</head>

<body>

<div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div>
            <h1 class="">Tugas PHP 15: OOP DB Class</h1>
                <table class="table table-bordered table-striped table-dark mt-3" style="width: 500px;">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=0;
                        if($result){
                            $datahasil=$conn->hasilbarang($result,$conn->ambilbarang());
                            while($result=$datahasil->fetch_object()){
                                $i++;
                            
                        ?>
                        <tr>
                            <th scope="row" class="text-center"><?php echo $i?></th>
                            <td><?php echo $result->nama_barang?></td>
                            <td><?php echo $result->harga;?></td>
                            <td><?php echo $result->jumlah;?></td>
                        </tr>
                        <?php
                            }
                            }?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>