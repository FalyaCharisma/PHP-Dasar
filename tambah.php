<?php
     $koneksi = mysqli_connect("localhost", "root","", "phpdasar");

     //cek apakah tombol submit sudah ditekan
     if( isset($_POST["submit"])){
        // ambil data dari setiap elemen form
        $judul = $_POST["judul"];
        $tahun_terbit = $_POST["tahun_terbit"];
        $harga = $_POST["harga"];

        //query INSERT data
        $query = "INSERT INTO buku 
                    VALUES 
                    ('', '$judul', '$tahun_terbit', '$harga');
                    ";
        mysqli_query($koneksi, $query);

        // return mysqli_affected_rows($koneksi);

        if(mysqli_affected_rows($koneksi) > 0){
            echo "<script>
             document.location.href = 'index.php';
            </script>
            ";
        }
        else{
            echo "Gagal";
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
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="judul">Judul : </label>
                <input type="text" name="judul" id="judul">
            </li>
            <li>
                <label for="tahun_terbit">Tahun Terbit : </label>
                <input type="text" name="tahun_terbit" id="tahun_terbit">
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>

        </ul>
    </form>
</body>
</html>