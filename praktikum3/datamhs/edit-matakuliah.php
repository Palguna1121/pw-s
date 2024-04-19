<?php
session_start();
include 'db.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="auth/login.php"</script>';
}

// Ambil data matakuliah berdasarkan ID
$matakuliah = mysqli_query($conn, "SELECT * FROM tb_matakuliah WHERE matkul_id = '".$_GET['id']."' ");
if(mysqli_num_rows($matakuliah) == 0){
    echo '<script>window.location="matakuliah.php"</script>';
}
$m = mysqli_fetch_object($matakuliah);

include 'templates/header.php';
?>
    <!-- content -->
    <div class="section">
        <div class="container">
            <h2>Edit Data Matakuliah</h2>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Matakuliah" class="input-control" value="<?php echo $m->matkul_name ?>" required>
                    <input type="submit" name="submit" value="Submit" class="btn">
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $nama = ucwords($_POST['nama']);
                    $update = mysqli_query($conn, "UPDATE tb_matakuliah SET matkul_name = '".$nama."' WHERE matkul_id = '".$m->matkul_id."'");
                    if($update){
                        echo '<script>alert("Edit Matakuliah BERHASIL")</script>';
                        echo '<script>window.location = "matakuliah.php"</script>';
                    }else{
                        echo 'gagal '.mysqli_error($conn);
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php
include 'templates/footer.php';
?>

