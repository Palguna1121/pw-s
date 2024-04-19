<?php
    require_once "../db.php";

    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    </head>
    <body id="bg-login">
        <div class="box-login">
            <h2>Register</h2>
            <form action="" method="POST">
                <input type="text" name="admin_name" placeholder="Nama Lengkap" class="input-control">
                <input type="text" name="username" placeholder="Username" class="input-control">
                <input type="password" name="password" placeholder="Password" class="input-control">
                <input type="text" name="admin_telp" placeholder="Telepon" class="input-control">
                <input type="email" name="admin_email" placeholder="Email" class="input-control">
                <input type="text" name="admin_adress" placeholder="Alamat" class="input-control">
                <input type="submit" name="submit" value="Register" class="btn">
            </form>
            <div class="link-login">
                Sudah punya akun? <a href="login.php">Login</a>
            </div>
            <?php
            if(isset($_POST['submit'])){
                $admin_name = $_POST['admin_name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $admin_telp = $_POST['admin_telp'];
                $admin_email = $_POST['admin_email'];
                $admin_adress = $_POST['admin_adress'];

                // Membuat prepared statement untuk menambahkan user baru
                $stmt = $conn->prepare("INSERT INTO tb_profil (admin_name, username, password, admin_telp, admin_email, admin_adress) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $admin_name, $username, $password, $admin_telp, $admin_email, $admin_adress); // 'ssssss' menunjukkan bahwa semua parameter adalah string
                $stmt->execute();

                if($stmt->affected_rows > 0){
                    echo '<script>alert("Registrasi berhasil. Silakan login.")</script>';
                    echo '<script>window.location="../index.php"</script>';
                }else{
                    echo '<script>alert("Registrasi gagal. Username mungkin sudah digunakan atau data tidak valid.")</script>';
                }
            }
            ?>
        </div>
    </body>
</html>
