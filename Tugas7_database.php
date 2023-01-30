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
    <div class="container d-flex flex-column justify-content-center h-100 align-items-center">
        <h1>Tugas PHP 7: Memanggil Data Dari Database</h1>
        <div class="container col-8">
            <table border="1" class="table table-dark table-striped table-fixed">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th class="text-center" scope="col">NIP</th>
                        <th class='text-center' scope="col">Nama</th>
                        <th class='text-center' scope="col">Alamat</th>
                        <th class='text-center' scope="col">No Telp</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class='text-center' scope="col">Tgl Bergabung</th>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "kantor");

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $query = "SELECT * FROM karyawan";
                    $result = mysqli_query($conn, $query);
                    $num_rows = mysqli_num_rows($result);

                    for ($i = 0; $i < $num_rows; $i++) {
                        $row = mysqli_fetch_assoc($result);
                        echo "<tr>";
                        echo "<td>" . $row["id_karyawan"] . "</td>";
                        echo "<td>" . $row["nip"] . "</td>";
                        echo "<td class='text-center'>" . $row["nama_karyawan"] . "</td>";
                        echo "<td class='text-center'>" . $row["alamat"] . "</td>";
                        echo "<td class='text-center'>" . $row["notelp"] . "</td>";
                        echo "<td class='text-center'>" . $row["email"] . "</td>";
                        echo "<td class='text-center'>" . $row["tglbergabung"] . "</td>";
                        echo "</tr>";
                    }

                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>