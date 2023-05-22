<?php
    // Ini adalah contoh komentar 1 baris
    /* Ini adalah contoh komentar banyak baris
       Ini baris selanjutnya */

    // Standar Output
    // echo, print
    echo "Hello World";
    print "Hello World";
    // print_r, var_dump
    print_r("Hello World");
    var_dump("Hello World");

    // penulisan sintaks PHP
    // 1. PHP di dalam HTML
    // 2. HTML di dalam PHP (tidak disarankan)
    // Variabel dan Tipe Data
    $nama = "Falya";
?>
<html>
    <body>
        <h1>Halo, Selamat Belajar <?php echo "Falya"; ?> </h1>
        <h1>Halo, Selamat Belajar <?php echo $nama; ?> </h1>
        <p><?php echo "Ini adalah paragraf" ?></p>
        <?php 
            echo"<h1>Ini contoh HTML dalam PHP</h1>";
        ?>
    </body>
</html>


