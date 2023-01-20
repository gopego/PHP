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
    <?php
    $nama1 = "Fahmi";
    $nama2 = "Udin";
    $nama3 = "Mudi";
    $alamat1 = "Sumbawa";
    $alamat2 = "Jateng";
    $alamat3 = "Malang";
    $hobi1 = "Berlari";
    $hobi2 = "Berenang";
    $hobi3 = "Memancing";
    ?>
    <div class="container d-flex flex-column justify-content-center h-100 align-items-center">
        <h1>Tugas PHP 1: Memanggil Data</h1>
        <div class="container col-6">
            <table border="1" class="table table-dark table-striped table-fixed">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Hobi</th>
                </thead>
                <tbody>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $nama1; ?></td>
                        <td><?php echo $alamat1; ?></td>
                        <td><?php echo $hobi1; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><?php echo $nama2; ?></td>
                        <td><?php echo $alamat2; ?></td>
                        <td><?php echo $hobi2; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><?php echo $nama3; ?></td>
                        <td><?php echo $alamat3; ?></td>
                        <td><?php echo $hobi3; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>