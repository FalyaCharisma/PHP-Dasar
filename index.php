<?php
    //koneksi ke database
    $koneksi = mysqli_connect("localhost", "root","", "phpdasar");

    //mengambil data dari tabel / query data
    $result = mysqli_query($koneksi, "SELECT * FROM buku");
        // if(!$result){
        //     echo mysqli_error($koneksi);
        // }
    // var_dump($result);

    // mengambil data(fetch)
    // mysqli_fetch_row() untuk mengambil array numerik
    // mysqli_fetch_assoc() untuk mengambil array asosiatif
    // mysqli_fetch_array() untuk mengambil array dg keduanya
    // mysqli_fetch_object() untuk mengambil data object
    // $bk = mysqli_fetch_assoc($result);
    // var_dump($bk);

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
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Harga</th>
        </tr>
        <?php while ( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["judul"] ?></td>
            <td><?php echo $row["tahun_terbit"] ?></td>
            <td><?php echo $row["harga"] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>