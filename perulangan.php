<?php
    //Pengulangan
    //for
    for($i = 0; $i < 10; $i++){
        echo "Hello World ";
    }

    //while
    $i = 0;
    while($i < 10){
        echo "Hello World";
        $i++;
    }

    //do-while
    $i = 0;
    do{
        echo "Hello World";
        $i++;
    }while($i < 10);

?>

<html>
    <head>
        <style>
            .warna-baris{
                background-color: gray;
            }
        </style>
    </head>
    <body>
        <table border="1">
            <!-- <?php 
                for($i=1; $i<=3; $i++){
                    echo "<tr>";
                        for($j=1; $j<=5; $j++){
                            echo "<td>$i, $j</td>";
                        }
                    echo "</tr>";
                }
            ?> -->

            <?php for($i=1; $i<=3; $i++){ ?>
                <?php if($i%2==1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                    <?php for($j=1; $j<=5; $j++): ?>
                        <td><?php echo "$i, $j"; ?></td>
                    <?php endfor ?>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>

