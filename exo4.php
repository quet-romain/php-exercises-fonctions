<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            function fonc($nombre1, $nombre2) {
                echo  '</br>' . $nombre1 .' '. $nombre2 . '</br></br>';
                if ($nombre1 > $nombre2) {
                    echo 'Le premier nombre est plus grand</br>';
                }
                elseif ($nombre1 < $nombre2) {
                    echo  'Le premier nombre est plus petit</br>';
                }
                elseif ($nombre1 == $nombre2) {
                    echo 'Les deux nombres sont identiques</br>';
                }
            }
        fonc(1,5);
        fonc(5,3);
        fonc(6,6);
        ?>
    </body>
</html>
