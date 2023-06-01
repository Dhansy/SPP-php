<!-- login.html -->

<!DOCTYPE html>
<html>
  <head>
    <title>Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/login.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
  </head>
  <body>
    <div class="main">
      <p class="sign" align="center">Login as admin</p>
      <form class="form" method="post">
        <input class="user" type="text" align="center" placeholder="Username" name="user" required>
        <input class="pass" type="password" align="center" placeholder="Password" name="password" required>
        <button class="submit" align="center" type="submit" name="sign-in">Sign in</button>   
        <div align="center">
          <p class="label small fw-bold mt-2 pt-1 mb-0">Login sebagai siswa? <a href="login.php" class="link-danger">Click here</a></p>
        </div>
      </form>
    </div>
  </body>
</html>


<!-- login.php -->

<?php
session_start();
include 'koneksi.php';

if (isset($_POST['user']) && isset($_POST['password'])) {
  $username = $_POST['user'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    // jika username atau password kosong
    header("location:login_petugas.php?pesan=gagal");
    exit();
  }

  $login = mysqli_query($sambung, "SELECT * FROM petugas WHERE username='$username' AND password='".md5($password)."'");
  $cek = mysqli_num_rows($login);

  if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == "admin") {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "admin";
      $_SESSION['nama_petugas'] = $data['nama_petugas'];
      $_SESSION['id'] = $data['id_petugas'];
      $_SESSION['status_login']=true;
      header("location:dashboard_admin.php");
      exit();
    } elseif ($data['level'] == "petugas") {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "petugas";
      $_SESSION['nama_petugas'] = $data['nama_petugas'];
      $_SESSION['id'] = $data['id_petugas'];
      $_SESSION['status_login']=true;
      header("location:dashboard_petugas.php");
      exit();
    } else {
      // jika level tidak sesuai
      header("location:login_petugas.php?pesan=gagal");
      exit();
    }
  } else {
    // jika username atau password salah
    header("location:login_petugas.php?pesan=gagal");
    exit();
  }
}
?>
