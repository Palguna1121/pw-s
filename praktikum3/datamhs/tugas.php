<?php
session_start();
include 'db.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="auth/login.php"</script>';
}
?>

<?php
include 'templates/header.php';
?>
    <!-- content -->
    <section class="section">
        <div class="container">
            <h1>Data Tugas</h1>
            <?php
                $matakuliah = mysqli_query($conn, "SELECT * FROM tb_matakuliah");
                while($row_mk = mysqli_fetch_array($matakuliah)){
            ?>
            <div class="columns is-centered">
                <div style="display: flex; justify-content: space-between" class="column is-6">
                    <h3 class="has-text-centered"><?php echo $row_mk['matkul_name'] ?></h3>
                    <a style="padding: 20px; margin-right: 20px" href="tambah_tugas.php?matkul_id=<?php echo $row_mk['matkul_id'] ?>" class="tambah">Tambah Tugas</a>
                </div>
                <div class="column is-12">
                    <table border="1" cellspacing="0" class="table">
                        <thead>
                            <tr>
                                <th>Nama Tugas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $tugas = mysqli_query($conn, "SELECT * FROM tb_tugas WHERE matkul_id = '".$row_mk['matkul_id']."' ORDER BY tugas_id DESC");
                                while($row = mysqli_fetch_array($tugas)){
                            ?>
                            <tr>
                                <td><?php echo $row['tugas_name'] ?></td>
                                <td align="center">
                                    <a href="edit-tugas.php?id=<?php echo $row['tugas_id'] ?>&matkul_id=<?php echo $row_mk['matkul_id'] ?>" class="button is-info">Edit</a>
                                    <a href="?hapus_id=<?php echo $row['tugas_id'] ?>" onclick="return confirm('Yakin ingin hapus?')" class="button is-danger">Hapus</a>
                                    <?php 
                                        if(isset($_GET['hapus_id'])){
                                            $id_hapus = $_GET['hapus_id'];
                                            $delete = mysqli_query($conn, "DELETE FROM tb_tugas WHERE tugas_id = '$id_hapus'");
                                            if($delete){
                                                echo '<script>alert("Data berhasil dihapus.");</script>';
                                                echo '<script>window.location="tugas.php"</script>';
                                            } else {
                                                echo '<script>alert("Data gagal dihapus.");</script>';
                                            }
                                        }                                        
                                    ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

    
<?php
include 'templates/footer.php';
?>

