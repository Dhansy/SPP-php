<html>
<head>
  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>
<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form" method="post">
      <input class="nisn " type="text" align="center" placeholder="nisn" name="nisn">
      <input class="pass" type="password" align="center" placeholder="Password" name="pass">
      <button class="submit" align="center" type="submit" name="sign-in">Sign in</button>   
      <div align="center">
              <p class="label small fw-bold mt-2 pt-1 mb-0">Login Sebagai admin? <a href="login_petugas.php" class="link-danger">Click here</a></p>
    </div>
  </div>
</body>
</html>

<?php 
    if($_POST){
        $nisn=$_POST['nisn'];
        $password=$_POST['pass'];
        if(empty($nisn)){
            echo "<script>alert('nis tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($sambung,"select * from siswa where nisn = '".$nisn."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $data_login=mysqli_fetch_array($qry_login);
                 // mengecek apakah di dalam tabel tersebut ada kolomnya 
                session_start();
                $_SESSION['nama']=$data_login['nama'];
                $_SESSION['nisn']=$data_login['nisn'];
                $_SESSION['status_login']=true;
                // Mengecek siapa yg login 
                header("location:dashboard_siswa.php");   
                // setelah login menuju ke kelas tersebut (profil.php)
            } else {
                echo "<script>alert('Nis dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
  
?>