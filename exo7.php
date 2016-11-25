<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            function fonc($age,$genre) {
                echo '</br>';
                if ($age>= 18) {
                    if ($genre == "Homme") {
                        echo "Vous êtes un homme et vous êtes majeur";
                    }
                    elseif ($genre == "Femme") {
                        echo "Vous êtes une femme et vous êtes majeur";
                    }
                }
                else {
                    if ($genre == "Homme") {
                        echo "Vous êtes un homme et vous êtes mineur";
                    }
                    elseif ($genre == "Femme") {
                        echo "Vous êtes une femme et vous êtes mineur";
                    }
                }
            }
        fonc(20,'Homme');
        fonc(14,'Homme');
        fonc(18,'Femme');
        fonc(15,'Femme');
        // Marche pas
        fonc(5,'femme');
        fonc(4,'homme');
        ?>
    </body>
</html>
