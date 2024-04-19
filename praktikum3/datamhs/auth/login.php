<?php
    require_once "../db.php";

    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="view port" content="width-device-width, initial-scale=1">
        <title>Login Data Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link
        href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap"
        rel="stylesheet">
    </head>
    <body id="bg-login">
        <div class="box-login">
            <h2>Login</h2>
            <form action="" method="POST">
                <input type="text" name="user" placeholder="Username" class="input-control">
                <input type="password" name="pass" placeholder="Password" class="input-control">
                <input type="submit" name="submit" value="Login" class="btn">
            </form>
            <div class="box-register">
                <p>Belum punya akun?</p>
                <a href="register.php">Register</a>
            </div>
            <?php
            if(isset($_POST['submit'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                // Membuat prepared statement
                $stmt = $conn->prepare("SELECT * FROM tb_profil WHERE username = ? AND password = ?");
                $stmt->bind_param("ss", $user, $pass); // 'ss' menunjukkan bahwa kedua parameter adalah string
                $stmt->execute();
                $result = $stmt->get_result();
                if($result->num_rows > 0){
                    $d = $result->fetch_object();
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d->admin_id;
                    echo
                    '<script>window.location="../index.php"</script>';
                }else{
                    echo
                    '<script>alert("Username atau Password anda salah!")</script>';
                }
            }
            ?>
        </div>
    </body>
</html>
