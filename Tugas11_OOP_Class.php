<?php
    class Data {

        public $nama;
        public $umur;
        public $alamat;

        public function __construct($nm, $um, $al)
        {
            $this->nama=$nm;
            $this->umur=$um;
            $this->alamat=$al;

        }

        public function pNama()
        {
            echo $this->nama;
        }
        public function pUmur()
        {
            echo $this->umur;
        }
        public function pAlamat()
        {
            echo $this->alamat;
        }
    }

    $user1 = new Data ('Alimudin','22','Lombok');
    $user2 = new Data ('Lilia','21','Riau');
    $user3 = new Data ('Firman','33','Aceh');

?>
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

<div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div>
            <h1 class="">Tugas PHP 11: OOP Class</h1>
                <table class="table table-bordered table-striped table-dark mt-3" style="width: 500px;">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td><?php echo $user1->pNama();?></td>
                            <td><?php echo $user1->pUmur();?></td>
                            <td><?php echo $user1->pAlamat();?></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2</th>
                            <td><?php echo $user2->pNama();?></td>
                            <td><?php echo $user2->pUmur();?></td>
                            <td><?php echo $user2->pAlamat();?></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">3</th>
                            <td><?php echo $user3->pNama();?></td>
                            <td><?php echo $user3->pUmur();?></td>
                            <td><?php echo $user3->pAlamat();?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>