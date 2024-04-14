<?php
session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initialscale=1">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="./css/style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <img src="./images/instiki-logo.png" width="200px">
            <ul>
                <li><strong><a href="dashboard.php">Dashboard</a></strong></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="matakuliah.php">Matakuliah</a></li>
                <li><a href="tugas.php">Tugas</a></li>
                <li><a href="logout.php">| LOGOUT |</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h2>Dashboard</h2>
            <div class="box">
                <h4 align="center">
                    Selamat Datang 
                    <?php
                        echo $_SESSION['a_global']-> admin_name
                    ?> 
                    di Website INSTITUT BISNIS DAN TEKNOLOGI INDONESIA
                </h4>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - INSTITUT BISNIS DAN TEKNOLOGI INDONESIA</small>
        </div>
    </footer>
</body>
</html>