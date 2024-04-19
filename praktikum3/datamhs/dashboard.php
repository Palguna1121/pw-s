<?php
session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="auth/login.php"</script>';
    }
?>

<?php
include 'templates/header.php';
?>
    <!-- content -->
    <div class="section">
        <div class="container">
            <h2>Dashboard</h2>
            <div class="box">
                <h4 align="center">
                    Selamat Datang 
                    <?php
                        echo $_SESSION['a_global']-> admin_name
                    ?> 
                    di Website INSTITUT BISNIS DAN TEKNOLOGI INDONESIA
                </h4>
            </div>
        </div>
    </div>

<?php
include 'templates/footer.php';
?>

