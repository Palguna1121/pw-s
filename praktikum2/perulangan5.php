<?php
include "header.php";
?>
                <!-- Begin Page Content -->
                <div style="color: black" class="container-fluid font-weight-bold">
<?php
for ($a = 1; $a <=2; $a++)
{
for ($b = 1; $b <= 4; $b++)
{
echo "Nilai a = ".$a. " Nilai b = ".$b. "<br />";
}
}
?>

</div>
<?php
include "footer.php";
?>