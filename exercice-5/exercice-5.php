<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
       
        <style> #titre {margin-bottom:50px} #rouge{color: red ; text-align: center ; justify-content: center ; size: 300%; }</style>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Entrez votre texte : <input type="text" name="texte">
            <input type="submit">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
  
            $text = $_POST['texte'];

            if (empty($text)) 
            {
                echo "Il n'y a pas de texte !";
            } 

            else 
            {
                echo "<div id='rouge'>".$text."</div>";
            }
        }

        ?>
        
    </body>
</html>