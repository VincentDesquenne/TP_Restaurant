<?php
if (isset ($_SESSION)){
  session_unset ();
  session_destroy ();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <link rel="stylesheet" type="text/css" href="design.css">
  <title>Restaurant Maison du Délice</title>  <!-- Nom dans l'onglet -->
</head>
<body class='centre'>
  <h1>Bienvenue dans la Maison du Délice </h1> <!-- Titre principale-->
  <div>
    <img src= "resto.jpg" class="image1">
    <p>
      Veuillez rentrer vos identifiants</p>
      <div>  
          <form method="post" action="Utilisateur.php">
          <p>
            <label for="champPseudo">Pseudo</label>  <!-- Balise pour le pseudo-->
            <input type="text" name="login" id='champPseudo' required/>
            <br/>
            <label for="champMdp">Mot de passe</label>
            <input type="password" name="mdp0" id='champMdp' required/><!-- Balise pour mot de passe-->
            <br />  
            <input type="submit" name="connexion" value="Connexion">
          </p>
        </form>
      </div>
    </div>
  </body>
  </html>
