<!-- <?php
    // variabel scope
    $x = 10;

    function tampilX(){
        // $x = 15;
        echo $x;
    }

    tampilX();
    echo "<br>$x";
?> -->

<?php
    //variabel superglobal, merupakan array asosiatif
    // $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV

    // var_dump($_GET);

    // $_GET["nama"] = "Falya";
    // $_GET["nim"] = "123456";

    // var_dump($_GET);
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
?>
<html>
    <body>
        <h2>Daftar Siswa</h2>
        <ul>
            <?php foreach($data as $siswa) : ?>
                <li>
                    <a href="get2.php?nama=<?= $siswa["nama"]; ?>
                    &umur=<?= $siswa["umur"]; ?>&alamat=<?= $siswa["alamat"]; ?>"><?= $siswa["nama"]; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>