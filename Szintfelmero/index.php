<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo '1. feladat';
        random_int(1, 12);
        $tomb = array(random_int(1, 240));
        for ($index1 = 0; $index1 < count($tomb); $index1++) {
           
            for ($index2 = 0; $index2 < 12; $index2++) {
                 echo '<br>';
                if (!($index1 > $index1)) {
                    echo $tomb[$index1];
                }
           
            }
             
        }
        
        echo '<br>';
        echo '<br>';
        echo '2.feladat';
        $tomb2 = array();
        for ($i = 10; $i < count($tomb2); $i++) {
            
        }
        echo '<br>';
        echo '3.feladat';
        $szo = "Alma le eset a fárol.";
        for ($i = 0; $i < 10; $i++) {
            for ($index = 0; $index < $szo; $index++) {
               
               // $randomBetu=str_replace("A", "B", $szo,4);
                
               
                echo $szo;
            }
        }
        echo '<br>';
        echo '<br>';
        echo '4.feladat';

        echo '<br>';
        echo '5.feladat';
        ?>
    </body>
</html>
