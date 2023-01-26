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
            overflow: hidden;

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
            if (date("g")>5 AND date("g")<12) {
                echo "pagi.";
            } else {
                echo "malam.";
            }
            ?>
        Hari ini adalah
            <?php
            date_default_timezone_set('Asia/Jakarta');
            setlocale(LC_ALL, 'id-ID', 'id_ID');
            echo strftime("%A, %d %B %Y");
            ?> Pukul <?php echo date("H:i:s")?>
    </h5>
    </div>
    <div class="container d-flex flex-column justify-content-center h-100 align-items-center">
        <h1>Tugas PHP 5: Form GET</h1>
        <div class="container col-7">

            <table border="1" class="table table-dark table-striped table-fixed">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <!-- <th scope="col">Hobi</th>  -->
                        <th scope="col">Umur</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Golongan</th>
                        <th scope="col">Tunjangan</th>
                        <th scope="col">Foto</th>
                </thead>
                <tbody>
                    <?php
                    $anggota = [
                        [
                            'nama' => 'Angga',
                            'alamat' => 'Aceh',
                            'hobi' => 'Berenang',
                            'umur' => '22',
                            'jk' => '1',
                            'golongan' => '1',
                            'foto' => '1'
                        ],
                        [
                            'nama' => 'Dita',
                            'alamat' => 'Medan',
                            'hobi' => 'Menari',
                            'umur' => '23',
                            'jk' => '2',
                            'golongan' => '3',
                            'foto' => '2'
                        ],
                        [
                            'nama' => 'Ron',
                            'alamat' => 'Riau',
                            'hobi' => 'Memancing',
                            'umur' => '30',
                            'jk' => '1',
                            'golongan' => '2',
                            'foto' => '3'
                        ],
                        [
                            'nama' => 'Intan',
                            'alamat' => 'Banten',
                            'hobi' => 'Menggambar',
                            'umur' => '33',
                            'jk' => '2',
                            'golongan' => '1',
                            'foto' => '4'
                        ],
                        [
                            'nama' => 'Rita',
                            'alamat' => 'Palembang',
                            'hobi' => 'Melukis',
                            'umur' => '21',
                            'jk' => '2',
                            'golongan' => '3',
                            'foto' => '5'
                        ],
                        [
                            'nama' => 'Ulum',
                            'alamat' => 'Samarinda',
                            'hobi' => 'Membaca',
                            'umur' => '31',
                            'jk' => '1',
                            'golongan' => '4',
                            'foto' => '6'
                        ],
                        [
                            'nama' => 'Ratna',
                            'alamat' => 'Ambon',
                            'hobi' => 'Mengaji',
                            'umur' => '19',
                            'jk' => '2',
                            'golongan' => '2',
                            'foto' => '7'
                        ],
                        [
                            'nama' => 'Puput',
                            'alamat' => 'Sumbawa',
                            'hobi' => 'Berlari',
                            'umur' => '27',
                            'jk' => '2',
                            'golongan' => '4',
                            'foto' => '8'
                        ],
                        [
                            'nama' => 'Wawan',
                            'alamat' => 'Ternate',
                            'hobi' => 'Berselancar',
                            'umur' => '44',
                            'jk' => '1',
                            'golongan' => '2',
                            'foto' => '9'
                        ],
                        [
                            'nama' => 'Billy',
                            'alamat' => 'Jakarta',
                            'hobi' => 'Trampolin',
                            'umur' => '35',
                            'jk' => '1',
                            'golongan' => '3',
                            'foto' => '10'
                        ]
                    ];

                    $i = 0;
                    foreach ($anggota as $data) {
                        $i++;
                    ?>
                        <tr>
                            <th class="text-center" scope="row"><?= $i; ?></th>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td class="text-center"><?= $data['umur']; ?></td>
                            <td><?php
                                if ($data['jk'] == 1) {
                                    echo "Laki-laki";
                                } else {
                                    echo "Perempuan";
                                }
                                ?></td>
                            <td class="text-center"><?= $data['golongan']; ?></td>
                            <td><?php
                                if ($data['jk'] == 1) {
                                    if ($data['golongan'] == 1) {
                                        echo "Rp. 1.000,-";
                                    } else if ($data['golongan'] == 2) {
                                        echo "Rp. 1.500,-";
                                    } else if ($data['golongan'] == 3) {
                                        echo "Rp. 2.000,-";
                                    } else {
                                        echo "Rp. 2.500,-";
                                    }
                                } else {
                                    echo "Tidak ada";
                                }
                                ?>
                            </td>
                            <td><a class="btn btn-primary btn-sm" href="Tugas5_GET form_2.php?nama=<?= $data['nama']; ?>&alamat=<?= $data['alamat']; ?>&umur=<?= $data['umur']; ?>&golongan=<?= $data['golongan']; ?>&foto=<?= $data['foto']; ?>&hobi=<?= $data['hobi']; ?>&jk=<?= $data['jk']; ?>" role="button">Foto</a>
                                
                            </td>
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