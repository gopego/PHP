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
    <div class="container d-flex flex-column justify-content-center h-100 align-items-center">
        <h1>Tugas PHP 2: Perulangan</h1>
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
                    <?php
                    $anggota = [
                        [
                            'nama' => 'Angga',
                            'alamat' => 'Aceh',
                            'hobi' => 'Berenang'
                        ],
                        [
                            'nama' => 'Dita',
                            'alamat' => 'Medan',
                            'hobi' => 'Menari'
                        ],
                        [
                            'nama' => 'Ron',
                            'alamat' => 'Riau',
                            'hobi' => 'Memancing'
                        ],
                        [
                            'nama' => 'Intan',
                            'alamat' => 'Banten',
                            'hobi' => 'Menggambar'
                        ],
                        [
                            'nama' => 'Rita',
                            'alamat' => 'Palembang',
                            'hobi' => 'Melukis'
                        ],
                        [
                            'nama' => 'Ulum',
                            'alamat' => 'Samarinda',
                            'hobi' => 'Membaca'
                        ],
                        [
                            'nama' => 'Ratna',
                            'alamat' => 'Ambon',
                            'hobi' => 'Mengaji'
                        ],
                        [
                            'nama' => 'Puput',
                            'alamat' => 'Sumbawa',
                            'hobi' => 'Berlari'
                        ],
                        [
                            'nama' => 'Wawan',
                            'alamat' => 'Ternate',
                            'hobi' => 'Berselancar'
                        ],
                        [
                            'nama' => 'Billy',
                            'alamat' => 'Jakarta',
                            'hobi' => 'Trampolin'
                        ]
                    ];

                    $i = 0;
                    foreach ($anggota as $data) {
                        $i++;
                    ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['hobi']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>