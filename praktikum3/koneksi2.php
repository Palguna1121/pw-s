<?php
$host = "localhost";
$user = "root"; 
$pass = ""; 
$db = "instiki"; 
$connect = mysqli_connect($host, $user, $pass);
//check koneksi
if($connect){
    //memilih database
    $select = mysqli_select_db($connect, $db);
  //check apakah database yang anda tuliskan ada
    if($select){
    echo "Berhasil menemukan database ".$db;
    }
    else{
    echo "Database " .$db. "tidak ditemukan";
    }
}
else{
echo "Koneksi database GAGAL";
}
?>