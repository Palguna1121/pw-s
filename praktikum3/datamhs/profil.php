<?php
session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="auth/login.php"</script>';
    }

    include 'db.php';

$query = mysqli_query($conn, "SELECT * FROM tb_profil WHERE admin_id = '".$_SESSION['id']."' ");
$d = mysqli_fetch_object($query);
?>

<?php
include 'templates/header.php';
?>
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

<?php
include 'templates/footer.php';
?>
