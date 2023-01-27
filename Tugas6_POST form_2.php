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
        
        <div class="container d-flex justify-content-center mt-3">
        <h1 class="align-items-center">Hasil Upload Data Anggota</h1>
        </div>
        <div class="container">
            <div class="page-body">
                <div class="card card-sm shadow-sm" style="height: 70px;">
                    <div class="card-body">
                        <div class="d-flex">
                            <a href="Tugas6_Post form.php" class="fs-5 text-decoration-underline fw-bold">Anggota</a>
                            <p class="fw-bold ms-1 fs-5">>> Detail Anggota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $nama= $_FILES["foto"]["name"];
        $file_tmp=$_FILES["foto"]["tmp_name"];
        if(move_uploaded_file($file_tmp, 'gambar/'.$nama)){



        // $nama=$_GET['nama'];
        // $alamat=$_GET['alamat'];
        // $umur=$_GET['umur'];
        // $jk=$_GET['jk'];
        // $hobi=$_GET['hobi'];
        // $foto=$_GET['foto'];
        // $golongan=$_GET['golongan'];     

        ?>

        <div class="container mt-2">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div>
                  <div class="row d-flex justify-content-start">
                    <div
                      class="mt-2 col-4 d-flex justify-content-center align-items-center"
                    >
                      <img
                        src="gambar/<?= $nama ?>"
                        class="rounded-circle shadow-sm"
                      />
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3 mt-4">
                    <div>
                      <p class="fs-5 fw-bold">Nama</p>
                      <p class="fs-5 fw-bold">Email</p>
                      <p class="fs-5 fw-bold">Jenis Kelamin</p>
                      <p class="fs-5 fw-bold">Alamat</p>
                    </div>
                    <div>
                      <p class="fs-5"><?= $_POST["name"]; ?></p>
                      <p class="fs-5"><?= $_POST["email"]; ?></p>
                      <p class="fs-5"><?= $_POST["jk"]; ?></p>
                      <p class="fs-5"><?= $_POST["alamat"]; ?></p>                    
                      
                    </div>
                  </div>
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container col-7">
        </div>
<?php
}
?>


</body>

</html>