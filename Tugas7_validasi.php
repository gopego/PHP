<?php
session_start();

// check if form is submitted
$error = '<p class="blink text-danger">Username/password salah!</p>
';
if (isset($_POST["submit"])) {
  // check if the username and password match
  if ($_POST["username"] == "fahmi" && $_POST["password"] == "jurumapin") {
    $_SESSION["logged_in"] = true;
    header("Location: Tugas7_berhasil.php");
  } else {
    $_SESSION["error"] = $error;
    header("Location: Tugas7_session_1.php");
  }
}
?>