<?php
include "header.php";
?>
                <!-- Begin Page Content -->
                <div style="color: black" class="container-fluid font-weight-bold">
<?php
$bil = 1;
while ($bil <= 17)
{
echo "Bilangan sekarang adalah $bil<br />";
$bil++;
}
echo "Nilai bilangan selanjutnya adalah:".$bil;
?>
                </div>
<?php
include "footer.php";
?>
