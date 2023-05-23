<?php
    // if - else
    $x = 5;
    if($x < 10){
        echo "Benar";
    }else{
        echo "Salah";
    }

    //if - else if - else
    if($x < 10){
        echo "Benar";
    }else if($x == 10){
        echo "Tepat";
    }
    else{
        echo "Salah";
    }

    // switch case
    $x = 2;
    switch($x){
        case 1: 
            echo "Ini Satu";
        break;
        case 2:
            echo "Ini Dua";
        break;
        default:
            echo "Salah";
        break;
    }

    // ternary
    $umur = 18;

    $kategoriUsia = ($umur >= 18) ? "Dewasa" : "Anak-anak";

    echo "Kategori usia: " . $kategoriUsia;

?>