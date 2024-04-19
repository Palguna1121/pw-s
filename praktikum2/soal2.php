<?php
include "header.php";
?>
                <!-- Begin Page Content -->
                <div style="color: black" class="container-fluid font-weight-bold">
    <p>
        Menampilkan bilangan bulat 5 s/d 100 yang berkelipatan 10
        <p>
            <?php
                // Menampilkan bilangan bulat 5 s/d 100 yang berkelipatan 10
                for ($i = 10; $i <= 100; $i += 10) {
                    echo $i . "\n";
                }
            ?>
        </p>
    </p>
                
                <br>

    <p>
        Menjumlahkan bilangan 2 s/d 50
        <p>
            <?php
                // Menjumlahkan bilangan 2 s/d 50
                $jumlah = 0;
                for ($i = 2; $i <= 50; $i++) {
                    $jumlah += $i;
                }
                echo "Jumlah total: " . $jumlah . "\n";
            ?>
        </p>
    </p>

                <br>

    <p>
        Mencari banyaknya bilangan bulat mulai dari 3 s/d 127 yang merupakan kelipatan 6
        <p>
            <?php
                // Mencari banyaknya bilangan bulat mulai dari 3 s/d 127 yang merupakan kelipatan 6
                    $jumlahKelipatan6 = 0;
                    for ($i = 6; $i <= 127; $i += 6) {
                        $jumlahKelipatan6++;
                    }
                    echo "Banyaknya bilangan kelipatan 6: " . $jumlahKelipatan6 . "\n";
            ?>
        </p>
    </p>

    </div>
<?php
include "footer.php";
?>