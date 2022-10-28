<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 1a</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
        <?php 
            $NombreAleatoire = rand ( 0 , 100 );
            if $NombreAleatoire%2 == 1
            {
            ?>
                <div id = 'impaire'>
                    <?php
                    echo $NombreAleatoire."est impaire";
                    ?>
                </div>
            <?php
            }
            else
            {
            ?>
                <div id = 'paire'>
                    <?php
                    echo $NombreAleatoire."est paire";
                    ?>
                </div>
            <?php
            }

        ?>
    </body>

</html>