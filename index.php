<?php
    require 'functions.php';
    $buku = query("SELECT * FROM buku");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($buku as $row): ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["judul"] ?></td>
            <td><?php echo $row["tahun_terbit"] ?></td>
            <td><?php echo $row["harga"] ?></td>
            <td><a href="hapus.php?id=<?php echo $row["id"] ?>">hapus</a> || <a href="update.php?id=<?php echo $row["id"] ?>">update</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>