<?php
     $koneksi = mysqli_connect("localhost", "root","", "phpdasar");

     $id = $_GET["id"];
     $query = "DELETE FROM buku WHERE id = $id";
     $result = mysqli_query($koneksi,$query);

     if(mysqli_affected_rows($koneksi) > 0){
        echo "<script>
         document.location.href = 'index.php';
        </script>
        ";
    }
    else{
        echo "Gagal";
    }
?>