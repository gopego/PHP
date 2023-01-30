<?php
session_start();
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
      overflow-y: hidden;

    }

    .blink {
      animation: blinker 1.2s linear infinite;
    }

    @keyframes blinker {
      50% {
        opacity: 0;
      }
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
        echo "pagi ";
      } else {
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
  <div class="container d-flex flex-column h-100 align-items-center ">
    <h1 class="mt-4">Tugas PHP 7: Session</h1>
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
              <?php
                if (isset($_SESSION["error"])) {
                  $error = $_SESSION["error"];
                  echo "<span>$error</span>";
                }
                ?>
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                <form action="Tugas7_validasi.php" method="post" enctype="multipart/form-data">
                  <div class="form-outline form-white mb-4">
                    <input type="text" name="username" id="username" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Username</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX">Password</label>
                  </div>
                  <button class="btn btn-outline-light btn-lg px-5" value="Send" name="submit" type="submit">Login</button>
                  
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>

<?php
unset($_SESSION["error"]);
?>