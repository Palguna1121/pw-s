<?php
session_start();
include 'db.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="auth/login.php"</script>';
}

include 'templates/header.php';
?>
<head>
    <style>
        .form > * + * {
            padding-top: 10px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
    <!-- content -->
    <div class="section">
        <div class="container">
            <h2>Tambah Data Tugas 
                <?php 
                    $matkul_id = $_GET['matkul_id'];
                    $matkul_query = mysqli_query($conn, "SELECT matkul_name FROM tb_matakuliah WHERE matkul_id = '$matkul_id'");
                    $matkul_row = mysqli_fetch_array($matkul_query);
                    echo $matkul_row['matkul_name'];
                ?>
            </h2>
            <div class="box" style="padding: 20px; display: flex; align-items: center; justify-content: center;">
                <form action="" method="POST" class="form" enctype="multipart/form-data">
                    <label for="tugas_name">Nama Tugas</label>
                    <input type="text" name="tugas_name" id="tugas_name" placeholder="Nama Tugas" class="input-control" required>

                    <label for="matkul">Matakuliah</label>
                    <input type="text" name="matkul" id="matkul" value="<?php echo $matkul_row['matkul_name']; ?>" class="input-control" readonly required>

                    <label for="nama_nim">Nama Mahasiswa</label>
                    <input type="text" name="nama_nim" id="nama_nim" placeholder="Nama Mahasiswa" class="input-control" required>
                    <!-- <select name="nama_nim" id="nama_nim" class="input-control" required>
                        <option value="">-- Pilih Mahasiswa --</option>
                        <?php
                            // $mahasiswa = mysqli_query($conn, "SELECT nama_nim FROM tb_tugas");
                            // while($m = mysqli_fetch_array($mahasiswa)){
                            //     echo '<option value="'.$m['nama_nim'].'">'.$m['nama_nim'].'</option>';
                            // }
                        ?>
                    </select> -->

                    <label for="tugas_format">Format Tugas</label>
                    <select name="tugas_format" id="tugas_format" class="input-control" required>
                        <option value="">-- Pilih Format --</option>
                        <option value=".pdf">.pdf</option>
                        <option value=".png">.png</option>
                        <option value=".jpg">.jpg</option>
                        <option value=".jpeg">.jpeg</option>
                        <option value=".docx">.docx</option>
                    </select>

                    <label for="tugas_image">Tugas Image</label>
                    <input type="file" name="tugas_image" id="tugas_image" class="input-control">

                    <input style="margin-top: 20px; padding: 5px 10px;" type="submit" name="submit" value="Submit" class="btn">
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $matkul_id = $_GET['matkul_id'];
                    $tugas_name = ucwords($_POST['tugas_name']);
                    $nama_nim = $_POST['nama_nim'];
                    $tugas_format = $_POST['tugas_format'];
                    
                    $ekstensi_diperbolehkan = array('pdf','png','jpg','jpeg','docx');
                    $nama = $_FILES['tugas_image']['name'];
                    $x = explode('.', $nama);
                    $ekstensi = strtolower(end($x));
                    $ukuran = $_FILES['tugas_image']['size'];
                    $file_tmp = $_FILES['tugas_image']['tmp_name'];
                    
                    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                        if($ukuran < 1044070){
                            move_uploaded_file($file_tmp, 'tugas/'.$nama);
                            $insert = mysqli_query($conn, "INSERT INTO tb_tugas VALUES (DEFAULT,'$matkul_id','$tugas_name','$nama_nim','$tugas_format','$nama',0,NOW())");
                            if($insert){
                                echo '<script>alert("Tambah Tugas BERHASIL")</script>';
                                echo '<script>window.location = "tugas.php"</script>';
                            }else{
                                echo 'gagal '.mysqli_error($conn);
                            }
                        }else{
                            echo '<script>alert("Maaf, Ukuran File Terlalu Besar. Maksimal 1MB")</script>';
                        }
                    }else{
                        echo '<script>alert("Maaf, Ekstensi File Tidak Diizinkan")</script>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php
include 'templates/footer.php';
?>

