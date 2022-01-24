<?php 
session_start();

if (isset($_SESSION["admin"])) {
  echo "<script>
         window.location.replace('admin');
       </script>";
  exit;
}
if (!isset($_SESSION['user'])) {
   echo "<script>
         window.location.replace('login.php');
       </script>";
  exit;
}
require 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon dari Fontawesome -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>

    <title>Zoeyaskin</title>
    <style>
        #content {
            width: 100%;
        }
        .btn {
            text-decoration: none;
            padding: 5px 10px;
            background-color: red;
        } 
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="katalog.php">Katalog</a></li>
                <li><a href="pesanan.php">Pesanan Saya</a></li>
                <li><a href="logout.php" class="btn" style="border-bottom: none;">Logout</a></li>
            </ul>
        </nav>
        <div class="jumbotron">
            <h3>Zoeyaskin <i class="fab fa-accusoft"></i></h3>
            <p>Apa Kabar,
            <?php
                    if (isset($_SESSION['username'])) {
                     $username = $_SESSION['username'];

                     $query = mysqli_query($conn, "SELECT nama FROM user WHERE username = '$username'"); 
                     foreach ($query as $cf) {}

                     if($query->num_rows > 0) {
                      echo $cf['nama'];
                      }
                  }
                ?> ?
            </p>
        </div>
    </header>

    <main>
        <div id="content">
            <div class="card" style="margin: 100px 0;">
                <h3 class="judul">Siapa Kami?</h3>
                <p style="text-indent: 1.2rem;">Zoeyaskin adalah toko yang berdiri sejak tahun 2020, kami terus berupaya meningkatkan kualitas produk kami agar dapat berguna di masyarakat Indonesia.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&#169 Zoeyaskin <i class="fab fa-accusoft"></i> 2021</p>
    </footer>
</body>
</html>