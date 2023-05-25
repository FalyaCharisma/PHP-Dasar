<?php

    // https://www.php.net/manual/en/funcref.php

  $string = "Hello, World!";
  echo strlen($string); // Output: 13
  
  $string = "hello, world!";
  echo strtoupper($string); // Output: HELLO, WORLD!

  $string = "HELLO, WORLD!";
  echo strtolower($string); // Output: hello, world!

  //explode
  $string = "Hello, World!";
  $array = explode(", ", $string);
  print_r($array);

  //strcmp
  $string1 = "apple";
  $string2 = "banana";
  $result = strcmp($string1, $string2);
  if ($result < 0) {
      echo "String 1 kurang dari String 2";
  } elseif ($result > 0) {
      echo "String 1 lebih dari String 2";
  } else {
      echo "String 1 sama dengan String 2";
  }

  $array = [1, 2, 3, 4, 5];
  echo count($array); // Output: 5

  echo date("Y-m-d"); // Output: 2023-05-24 https://www.php.net/manual/en/function.date.php

  $timestamp = strtotime("2023-05-24");
  echo date("Y-m-d", $timestamp); // Output: 2023-05-24

?>

<!-- <?php
    function tampilkanPesan() {
        echo "Halo, selamat datang!";
    }
      
    // Memanggil fungsi
    tampilkanPesan();
      
?> -->

<!-- <?php
    function tampilkanBiodata($nama, $umur, $alamat, $pekerjaan) {
        echo "Nama: " . $nama . "<br>";
        echo "Umur: " . $umur . "<br>";
        echo "Alamat: " . $alamat . "<br>";
        echo "Pekerjaan: " . $pekerjaan . "<br>";
    }
      
    // Memanggil fungsi
    tampilkanBiodata("Ahmad", 25, "Jakarta", "Programmer");
      
?> -->

<!-- <?php
    function hitungJumlah($bilangan1, $bilangan2) {
        $jumlah = $bilangan1 + $bilangan2;
        return $jumlah;
      }
      
      // Contoh penggunaan fungsi
      $hasil = hitungJumlah(5, 7);
      echo "Jumlah dari 5 dan 7 adalah: " . $hasil;
      
?> -->

<!-- <?php
  function nilaiMax($bil1, $bil2, $bil3){
    $max = 0;
    if($bil1 > $bil2 && $bil1 > $bil3){
      $max = $bil1;
    }

    return $max;
  }

  echo "Hasil " . nilaiMax(6,5,4);
?> -->

<!-- <?php
    function hitungLuasLingkaran($jariJari) {
        $luas = 3.14 * ($jariJari ** 2);
        return $luas;
      }
      
      // Memanggil fungsi
      $luasLingkaran = hitungLuasLingkaran(7);
      echo "Luas lingkaran dengan jari-jari 7 adalah " . $luasLingkaran;      
?> -->
<!-- 
<?php
    function hitungTotalHarga($hargaSatuan, $jumlahBarang, $diskon, $pajak) {
        $hargaTotal = $hargaSatuan * $jumlahBarang;
        
        // Menghitung diskon
        if ($diskon > 0) {
          $diskonNominal = $hargaTotal * ($diskon / 100);
          $hargaTotal -= $diskonNominal;
        }
        
        // Menambahkan pajak
        if ($pajak > 0) {
          $pajakNominal = $hargaTotal * ($pajak / 100);
          $hargaTotal += $pajakNominal;
        }
        
        return $hargaTotal;
      }
      
      // Memanggil fungsi
      $hargaTotal = hitungTotalHarga(5000, 10, 20, 10);
      echo "Harga total: Rp " . $hargaTotal;
      
?> -->
<?php
  function tampilBuah($buah){
    $no = 0;
    foreach($buah as $namaBuah){
      echo "Nama buah indeks ke $no adalah $namaBuah <br>";
      $no++;
    }
  }

  $buah = array("apel", "jeruk", "pisang", "mangga");

  tampilBuah($buah);
?>
<!-- <?php
    function hitungRataRata($nilai) {
        $jumlah = count($nilai);
        $total = array_sum($nilai);
        $rataRata = $total / $jumlah;
        foreach($nilai as $bil){
          echo "$bil ";
        }
        return $rataRata;
      }
      
      // Memanggil fungsi
      $bil = [80, 85, 90, 95, 100];
      echo "Rata-rata nilai adalah " . hitungRataRata($bil);
      
?> -->
<!-- <?php
function tampil($nilai){
  foreach($nilai as $bil){
    echo "$bil ";
  }
}
   $bil = [80, 85, 90, 95, 100];
   tampil($bil);
?> -->
<!-- 
<?php
    function hitungRata2($nilai) {
        $jumlah = 0;
        $total = 0;
        foreach ($nilai as $subArray) {
          foreach ($subArray as $nilaiSatuan) {
            $total += $nilaiSatuan;
            $jumlah++;
          }
        }
        $rataRata = $total / $jumlah;
        return $rataRata;
      }
      
      // Memanggil fungsi
      $nilai = [
        [80, 85, 90],
        [95, 100, 90],
        [85, 80, 95]
      ];
      $rataRata = hitungRata2($nilai);
      echo "Rata-rata nilai adalah " . $rataRata;
      
?> -->