<?php
    $koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

    // cek apakah tombol submit sudah ditekan
    if (isset($_POST["submit"])) {
        // ambil data dari setiap elemen form
        $id = $_POST["id"];
        $judul = $_POST["judul"];
        $tahun_terbit = $_POST["tahun_terbit"];
        $harga = $_POST["harga"];

        // query UPDATE data
        $query = "UPDATE buku SET
                    judul = '$judul',
                    tahun_terbit = '$tahun_terbit',
                    harga = '$harga'
                    WHERE id = $id";
        mysqli_query($koneksi, $query);

        if (mysqli_affected_rows($koneksi) > 0) {
            echo "<script>
                alert('Data berhasil diupdate.');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
                alert('Data gagal diupdate.');
                document.location.href = 'index.php';
            </script>";
        }
    }
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
    <h1>Update Data</h1>
    <?php
        // ambil data buku berdasarkan ID
        $id = $_GET["id"];
        $query = "SELECT * FROM buku WHERE id = $id";
        $result = mysqli_query($koneksi, $query);
        $buku = mysqli_fetch_assoc($result);
    ?>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $buku['id']; ?>">
        <ul>
            <li>
                <label for="judul">Judul : </label>
                <input type="text" name="judul" id="judul" value="<?php echo $buku['judul']; ?>">
            </li>
            <li>
                <label for="tahun_terbit">Tahun Terbit : </label>
                <input type="text" name="tahun_terbit" id="tahun_terbit" value="<?php echo $buku['tahun_terbit']; ?>">
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" value="<?php echo $buku['harga']; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update</button>
            </li>
        </ul>
    </form>
</body>
</html>
