<!DOCTYPE html>
<html>
<head lang="fr">
<meta charset="utf-8">
<title> Projet Exalog</title>
<link rel="shortcut icon" href="img/logo.png" />
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="script.js"></script>

    <body>
        <center> 
            <ul>      	
                <li><a href="default.asp">Accueil</a></li>
                <li><a href="news.asp">Comment fusionner les fichiers</a></li>
                <li><a href="contact.asp">A quoi ça sert ?</a></li>
                <li><a href="identifiant.php">Connexion</a></li>
            </ul>
            <h1>Projet Exalog</h1>
            <div class="shadow-box">
            <div id="file-list" class="file-list">
                <input type="file" name="selected_files[]">
                <button type="button" onclick="AjouterDesFichiers()">+</button>
            </div>
            <div id="retirer" class="retirer">
                <button type="button" onclick="RetirerDesFichiers()">-</button>
            </div>
            </p>
            
            
            
            <form action="backend.php" method="post" enctype="multipart/form-data">
                <button class="button" type="submit" onclick="show('popup')">Fusionner les fichiers</button>
                <div id="file-list"></div>
                    <div class="popup" id="popup">
                    <p>Félicitations</p>
                    <p>La fusion des fichiers à réussi avec succès </p>
                    <a  type="submiti" onclick="hide('popup')">Terminer</a>
                </div>
                </div>
            </form>
        </center>
    </div>
    </body>
</html>
<?php
?>
