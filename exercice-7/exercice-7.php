<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
       
        <style> #titre {margin-bottom:50px} #violet{color:blueviolet ;}</style>


        <p id="titre">Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur 
            le bouton la page doit afficher ce que vous avez saisie et l’enregistre dans une variable de 
            session $_SESSIONS[]. Le but est que si vous actualisez votre page la variable est 
            mémorisée et le site affiche toujours la valeur saisie.</p>

        <form method="get" action="<?php session_start(); echo $_SERVER['PHP_SELF'];?>">
            Entrez votre texte : <input type="text" name="texte">
            <input type="submit">
        </form>

        <?php

        

        if ($_SERVER["REQUEST_METHOD"] == "GET") 
        {
  
            $text = $_GET['texte'];

            if (empty($text)) 
            {
                echo "<p>Il n'y a pas de texte !</p>";
                echo "La variable mémorisée est : ".$_SESSION["mem"];
            } 

            else 
            {
                echo "<div>La variable actuelle est : </div><div id='violet'>".$text."</div>";
                echo "La variable mémorisée est : ".$_SESSION["mem"];
            }
        }
            
        $_SESSION["mem"] = "<div id='violet'>".$text."</div>";
        

        ?>
        
    </body>
</html>