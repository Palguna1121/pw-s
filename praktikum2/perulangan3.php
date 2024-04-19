<?php
include "header.php";
?>
                <!-- Begin Page Content -->
                <div style="color: black" class="container-fluid font-weight-bold">
<?php
$bil = 5;
while ($bil <= 100)
{
if ($bil % 10 == 0) echo $bil. "<br />";
$bil++;
}
?>
                </div>
<?php
include "footer.php";
?>