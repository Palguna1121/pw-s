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
    echo "Berhasil menemukan database ".$db . "<br>";
    }
    else{
    echo "Database " .$db. "tidak ditemukan" . "<br>";
    }
}
else{
echo "Koneksi database GAGAL";
}
//membuat query
$query = mysqli_query($connect, "select * from table_siswa");
$data = mysqli_fetch_array($query);
$kolom1 = $data[0];
$kolom2 = $data[1];
$kolom3 = $data[2];
$kolom4 = $data[3];
echo $kolom1 ." ". $kolom2 ." ". $kolom3 ."
".$kolom4;

?>