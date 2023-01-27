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
            if (date("g") > 5 and date("g") < 12) {
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
            ?> Pukul <?php echo date("H:i:s") ?>
        </h5>
    </div>
    <div class="container d-flex flex-column justify-content-center h-100 align-items-center mt-5">
        <h1>Tugas PHP 6: Form POST</h1>
        <div class="container col-7">
            <div class="card">
                <div class="card-body">
                    <form action="Tugas6_POST form_2.php" method="post" enctype="multipart/form-data">
                        <div class="row align-items-center py-2">
                            <div class="col-md-3 ps-5">
                                <h6 for="name" class="mb-0">Full name</h6>
                            </div>
                            <div class="col-md-9 pe-5">
                                <input type="text" name="name" class="form-control form-control-lg" />
                            </div>
                        </div>
                        <hr class="mx-n3">

                        <div class="row align-items-center py-2">
                            <div class="col-md-3 ps-5">
                                <h6 for="email" class="mb-0">Email address</h6>
                            </div>
                            <div class="col-md-9 pe-5">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="example@example.com" />
                            </div>
                        </div>
                        <hr class="mx-n3">
                        
                        <div class="row align-items-center py-2">
                            <div class="col-md-3 ps-5">
                                <h6 for="form-select" class="mb-0">Jenis Kelamin</h6>
                            </div>
                            <div class="col-md-9 pe-5">
                            <select class="form-select" name="jk" aria-label="Default select example">
                            <option selected disabled>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                            </div>
                        </div>

                        <hr class="mx-n3">

                        <div class="row align-items-center py-2">
                            <div class="col-md-3 ps-5">
                                <h6 for="alamat" class="mb-0">Alamat</h6>
                            </div>
                            <div class="col-md-9 pe-5">
                                <textarea name="alamat" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <hr class="mx-n3">

                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-5">
                                <h6 for="foto" class="mb-0">Upload Foto</h6>
                            </div>
                            <div class="col-md-9 pe-5">
                                <input name="foto" class="form-control" id="formFileLg" type="file" />
                            </div>
                        </div>
                        <hr class="mx-n3">
                        <div class="px-5 py-4 d-grid col-10 mx-auto">
                            <button type="submit" name="submit" value="Send" class="btn btn-primary btn-lg">Kirim</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>


</body>

</html>