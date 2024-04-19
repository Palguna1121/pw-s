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
            <h2>Data Matakuliah</h2>
            <div class="box">
                <p><a href="tambah-matakuliah.php" class="tambah">Tambah Data</a></p>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">NO</th>
                            <th>MATAKULIAH</th>
                            <th width="220px">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $matakuliah = mysqli_query($conn, "SELECT * FROM tb_matakuliah ORDER BY matkul_id DESC");
                        if(mysqli_num_rows($matakuliah) > 0){
                            while($row = mysqli_fetch_array($matakuliah)){
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++ ?></td>
                            <td><?php echo $row['matkul_name'] ?></td>
                            <td align="center">
                                <a href="edit-matakuliah.php?id=<?php echo $row['matkul_id'] ?>">Edit</a> ||
                                <a href="tambah_tugas.php?matkul_id=<?php echo $row['matkul_id'] ?>" class="">Tambah Tugas</a> ||
                                <!-- <a href="?hapus_id=<?php //echo $row['matkul_id'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a> -->
                                <?php 
                                    if(isset($_GET['hapus_id'])){
                                        $id_hapus = $_GET['hapus_id'];
                                        $delete = mysqli_query($conn, "DELETE FROM tb_matakuliah WHERE matkul_id = '$id_hapus'");
                                        if($delete){
                                            echo '<script>alert("Data berhasil dihapus.");</script>';
                                            echo '<script>window.location="matakuliah.php"</script>';
                                        } else {
                                            echo '<script>alert("Data gagal dihapus.");</script>';
                                        }
                                    }                                        
                                ?>
                            </td>
                        </tr>
                        <?php }}else{ ?>
                        <tr>
                            <td colspan="3" align="center">Tidak Ada Data</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    
<?php
include 'templates/footer.php';
?>


