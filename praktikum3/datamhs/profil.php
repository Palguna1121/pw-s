<?php
session_start();
include 'db.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}
$query = mysqli_query($conn, "SELECT * FROM tb_profil WHERE admin_id = '".$_SESSION['id']."' ");
$d = mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
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
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><strong><a href="profil.php">Profil</a></strong></li>
                <li><a href="matakuliah.php">Matakuliah</a></li>
                <li><a href="tugas.php">Tugas</a></li>
                <li><a href="logout.php">| LOGOUT |</a></li>
            </ul>
        </div>
    </header>
    <!-- content -->
    <div class="section">
        <div class="container">
            <h2>Profil</h2>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
                    <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
                    <input type="text" name="tlp" placeholder="Telepon" class="input-control" value="<?php echo $d->admin_telp ?>" required>
                    <input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email ?>" required>
                    <input type="text" name="almt" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_adress ?>" required>
                    <input type="submit" name="submit" value="Ubah Profil" class="btn">
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $nama = ucwords($_POST['nama']);
                    $user = $_POST['user'];
                    $tlp = $_POST['tlp'];
                    $email = $_POST['email'];
                    $alamat = ucwords($_POST['almt']);
                    $update = mysqli_query($conn, "UPDATE tb_profil SET admin_name = '".$nama."', username = '".$user."', admin_telp = '".$tlp."', admin_email = '".$email."', admin_adress = '".$alamat."' WHERE admin_id = '".$d->admin_id."' ");
                    if ($update) {
                        echo '<script>alert("Ubah Data Berhasil")</script>';
                        echo '<script>window.location="profil.php"</script>';
                    } else {
                        echo 'Gagal'.mysqli_error($conn);
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - INSTITUT BISNIS DAN
            TEKNOLOGI INDONESIA</small>
        </div>
    </footer>
</body>
