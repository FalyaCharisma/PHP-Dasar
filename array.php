<!-- <?php
    $buah = array("apel", "jeruk", "pisang", "mangga");

    // Menampilkan nilai dalam array dengan perindeks tanpa looping
    echo "Buah dengan indeks ke-0 adalah " . $buah[0] . "<br>";
    echo "Buah dengan indeks ke-1 adalah " . $buah[1] . "<br>";
    echo "Buah dengan indeks ke-2 adalah " . $buah[2] . "<br>";
    echo "Buah dengan indeks ke-3 adalah " . $buah[3] . "<br>";

?> -->
<!-- <?php
    $angka = array(2,8,4,5);
    $max = $angka[0]; //2

    for($i=1; $i < count($angka); $i++){
        if($angka[$i] > $max){
            $max = $angka[$i];
        }
    }

    echo "Maksimal = " .$max;
?> -->

<!-- <?php
    //array asosiatif
    $siswa = ["id"=>1, "nama"=>"Anton"];
    echo $siswa["id"];

?> -->

<!-- <?php
    $harga = array("apel" => 5000, "jeruk" => 3000, "pisang" => 2000);

    // Akses nilai dalam array dengan kunci
    echo "Harga apel adalah " . $harga["apel"] . " rupiah.";

    // Mengubah nilai dalam array dengan kunci
    $harga["jeruk"] = 3500;
    echo "Harga jeruk sekarang adalah " . $harga["jeruk"] . " rupiah. <br>";
?> -->

<!-- <?php
    $harga = array("apel" => 5000, "jeruk" => 3000, "pisang" => 2000, "mangga" => 8000);
    $total=0;
    // Menampilkan nilai dalam array dengan looping
    foreach($harga as $buah => $harga_buah){
        echo "Harga " . $buah . " adalah " . $harga_buah . " rupiah.<br>";
        $total +=$harga_buah;
    }
    echo "Total $total";
?> -->

<!-- <?php
    $student_scores = array(
        "John" => 90,
        "Sarah" => 85,
        "Mike" => 95,
        "Amanda" => 80
    );

    // Menampilkan data siswa dan nilai mereka menggunakan looping
    foreach($student_scores as $student_name => $score) {
        echo $student_name . " mendapatkan nilai " . $score . "<br>";
    }

?> -->

<!-- <?php
    //array multidimensi
    $buah = [
        ["Apel", 10000],
        ["Mangga", 15000],
        ["Pisang", 5000]
    ];

    foreach ($buah as $data) {
        echo "Nama: " . $data[0] . ", Harga: " . $data[1] . "<br>";
    }

?> -->

<!-- <?php
    //menambah elemen array
    $buku = array("Matematika", "Bahasa");

    $buku[] = "Kimia";

    foreach ($buku as $data =>$data_buku){
        echo "Buku $data adalah $data_buku <br>";
    }

    //mengurangi elemen array
    unset($buku[1]);

    echo "<pre>";
    print_r($buku);
    echo "</pre>";

?> -->

<!-- <?php
    $angka = array(0, 1, 2, 3, 4, 5);

    // Mengambil 3 elemen pertama dari array
    $slice1 = array_slice($angka, 0, 3);

     // Menampilkan nilai dalam array dengan perindeks
    for($i = 0; $i < count($slice1); $i++){
        echo $slice1[$i] ."<br>";
    }


    // Mengambil 2 elemen terakhir dari array
    $slice2 = array_slice($angka, -2);

    // Menampilkan hasilnya
    echo "Array asli: ";
    print_r($angka);

    echo "Hasil slice 1: ";
    print_r($slice1);

    echo "Hasil slice 2: ";
    print_r($slice2);

?> -->

<!-- <?php
 
    $nilai_matematika = array("John" => 90,"Sarah" => 85, "Mike" => 95, "Amanda" =>80);

    foreach($nilai_matematika as $nama => $nilai){
        echo "Nilai " . $nama . " adalah " . $nilai . "<br>";
    }

    $jumlah_siswa = count($nilai_matematika);
    $total_nilai = 0;

    foreach($nilai_matematika as $nama => $nilai) {
        $total_nilai += $nilai;
    }

    $rata_rata = $total_nilai / $jumlah_siswa;

    echo "Rata-rata nilai ujian matematika siswa-siswa adalah " . $rata_rata;

?> -->

<?php
    // $nilai = array(
    //     array("Andi", 90, 85, 95),
    //     array("Budi", 80, 70, 75),
    //     array("Cici", 95, 85, 90)
    // );

    $nilai = [["Andi", 90, 85, 95],["Budi", 80, 70, 75]];

    echo "<table>";
    echo "<tr><th>Nama</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Tugas</th><th>Rata-Rata</th></tr>";

    foreach ($nilai as $row) {
        echo "<tr>";
        $nama = $row[0];
        $uts = $row[1];
        $uas = $row[2];
        $tugas = $row[3];
        $ratasiswa = ($uts + $uas + $tugas)/3; 
        echo "<td>$nama</td>";
        echo "<td>$uts</td>";
        echo "<td>$uas</td>";
        echo "<td>$tugas</td>";
        echo "<td>$ratasiswa</td>";
       
        echo "</tr>";
    }

    echo "</table>";

?>

<!-- <?php
    $data = [
        "Andi"=>[
            "nama" => "Andi",
            "umur" => 25,
            "alamat" => "Jakarta"
        ],
        "Budi"=>[
            "nama" => "Budi",
            "umur" => 30,
            "alamat" => "Bandung"
        ],
        "Cici"=>[
            "nama" => "Cici",
            "umur" => 28,
            "alamat" => "Surabaya"
        ]
    ];

    // Menampilkan seluruh data pada array multidimensi
    // foreach ($data as $key => $value) {
    //     echo "Data " . $key . ":<br>";
    //     echo "Nama: " . $value["nama"] . "<br>";
    //     echo "Umur: " . $value["umur"] . "<br>";
    //     echo "Alamat: " . $value["alamat"] . "<br><br>";
    // }

    foreach ($data as $name => $data){
        echo $name . "<br>";
        foreach($data as $key => $value){
            echo $key . " = " . $value;
            echo "<br>";
        }
        echo "<br>";
    }

?> -->
<?php
function tampilkan_data_buku($data) {
  echo "<table>";
  echo "<tr><th>Judul Buku</th><th>Penulis</th><th>Penerbit</th><th>Tahun Terbit</th><th>Harga</th></tr>";
  foreach ($data as $buku) {
    echo "<tr>";
    foreach ($buku as $nilai) {
      echo "<td>$nilai</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}

function cari_buku_termahal($data) {
    $harga_termahal = 0;
    $buku_termahal=[]; //array kosong
  
    foreach ($data as $buku) {
      if ($buku[4] > $harga_termahal) { //membandingkan harga /indeks ke 4
        $harga_termahal = $buku[4];
        $buku_termahal = $buku;
      }
    }
    return $buku_termahal;
  }

// Simpan daftar buku pada sebuah array multidimensi
$daftar_buku = array(
  array("Harry Potter dan Batu Bertuah", "J.K. Rowling", "Gramedia", 1998, 80000),
  array("The Hunger Games", "Suzanne Collins", "Mizan", 2008, 65000),
  array("To Kill a Mockingbird", "Harper Lee", "HarperCollins", 1960, 50000),
  array("The Lord of the Rings", "J.R.R. Tolkien", "Penerbit Nusa Indah", 1954, 120000)
);

// Tampilkan daftar buku dalam bentuk tabel
tampilkan_data_buku($daftar_buku);

// Tampilkan buku harga termahal
$buku_termahal = cari_buku_termahal($daftar_buku);
echo "<br><br>Buku termahal adalah ".
$buku_termahal[0]." karya ".$buku_termahal[1].
" dengan harga "."<b>".$buku_termahal[4]."</b>";
?>
