<?php
    //cek apakah tidak ada data dari $_GET
    if( !isset($_GET["nama"])){
        //redirect
        header("Location: get.php");
        exit;
    }
?>
<html>
    <body>
        <ul>
            <li><?= $_GET["nama"] ?></li>
            <li><?= $_GET["umur"] ?></li>
            <li><?= $_GET["alamat"] ?></li>
        </ul>
    </body>
</html>