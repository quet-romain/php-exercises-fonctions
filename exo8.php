<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            function fonc($nombre1,$nombre2,$nombre3) {

               $resulta = $nombre1 += $nombre2 += $nombre3;
                echo $resulta;
                echo '</br>';
            }
        fonc(5,9,3);
        fonc(1,2,3);
        ?>
    </body>
</html>
