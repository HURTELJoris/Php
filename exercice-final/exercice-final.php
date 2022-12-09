<?php session_start()?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice final</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>    
    </head>

    <body>

        <p id="titre">Créer une appli web avec un bouton de connexion qui demande un login et un mot de pass.
             Comparer la valeur saisie avec le mdp et le login qui sera dans le code « Julien » « 1234 »
             - Si le login n’est pas bon afficher toujours le formulaire avec le message le login est inconnu. 
             -Si le mdp n’est pas bon afficher toujours le formulaire avec le message le mot de pass est incorrect.
             -Si le login et le mdp sont ok affichez un message de bienvenue et cachez le formulaire.
             Puis affichez un bouton de déconnexion. Faites en sorte qu’une fois connecté l’utilisateur 
             le reste lorsque on actualise la page. Lorsque l’on clique sur le bouton de déconnexion la session doit être détruite</p>

    
        <?php
        if(isset($_POST["Deconnexion"]))
        {
        session_unset();
        session_destroy();
        }
        if(isset($_POST["Valider"]))
        {
            if($_POST["password"]=="1234" && $_POST["login"]=="julien" )
            {
            //si identifié alors session true
            $_SESSION["EtatConnexion"]=true ;
            }
        }
        else
        {
            if($_POST["password"]!="1234")
            {
            echo "Ce n'est pas le bon mdp";
            }

            if($_POST["login"]!="julien")
            {
            echo "Ce n'est pas le bon Login";
            }
        }
        


        //si il y a une session on affiche le site sinon ça sera le formulaire de connexion
        if((isset($_SESSION["EtatConnexion"]) && $_SESSION["EtatConnexion"]==true))
        {
        ?>
            <p>Bienvenue sur le site</p>
            <form action="" method="post" class="form-example">
                <div class="form-example">
                    <input type="submit" value="Deconnexion" name="Deconnexion" >
                </div>
            </form>

        <?php
        }
        else
        {
        ?>
            <form action="" method="post">
                <fieldset>
                    <legend>Identifiant</legend>
                    <p>
                        <label for="login">Login :</label> 
                        <input type="text" name="login" id="login"/>
                    </p>
                    <p>
                        <label for="password">Mot de passe :</label> 
                        <input type="password" name="password" id="password" value="" /> 
                        <input type="submit" name="Valider" value="Valider" />
                    </p>
                </fieldset>
            </form>
        <?php 
        }
        ?>

    </body>
            
</html>