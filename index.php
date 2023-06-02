<!DOCTYPE html>
<html>
<head>
<title> Projet Exalog</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="script.js"></script>
    <body> 
        
            <ul>      	
                <li><a href="default.asp">Accueil</a></li>
                <li><a href="news.asp">Comment fusionner les fichiers</a></li>
                <li><a href="contact.asp">A quoi ça sert ?</a></li>
                <li><a href="identifiant.php">Connexion</a></li>
                
            </ul>
            <h1>Projet Exalog</h1>

            <?php include 'merge.php'; ?>
           
            <form method="POST" enctype="multipart/form-data">
            
            <div id="file-list" class="file-list">
                <input type="file" name="selected_files[]">
                </p>
                <button type="button" onclick="AjouterDesFichiers()">+</button>
            </div>
            <div id="retirer" class="retirer">
                <button type="button" onclick="RetirerDesFichiers()">-</button>
            </div>
            </p>
            <?php include 'merge.php'; ?>
            <form method="post" enctype="multipart/form-data">
            
                <button type="submit" name="submit">Fusionner</button>
            
            </form>
        </div>
    </body>
</html>
