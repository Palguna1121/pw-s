<?php
include "header.php";
?>
                <!-- Begin Page Content -->
                <div style="color: black" class="container-fluid font-weight-bold">
<?php
$bilangan = 5;
for ($a=1; $a<=10; $a++){
echo "Bilangan Sekarang adalah $bilangan <br>"; $bilangan =
$bilangan + $a;
}
?>
                </div>
<?php
include "footer.php";
?>