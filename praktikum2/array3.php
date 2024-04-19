<?php
include "header.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
<?php
$mahasiswa = ["Lina", "Arni", "Jona", "Punjabi", "Marcus", "Marlin"];
echo "<strong>Nama Mahasiswa sebelum diurutkan : </strong><br
/>";
foreach($mahasiswa as $data => $nama){
echo "$data: $nama"."<br />";
 }
sort($mahasiswa);
echo "<strong>Nama Mahasiswa setelah diurutkan : </strong><br
/>";
foreach($mahasiswa as $data => $nama){
echo "$data: $nama"."<br />";
 }

?>

</div>
<?php
include "footer.php";
?>