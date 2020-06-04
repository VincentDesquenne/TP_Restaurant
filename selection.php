<?php
require_once('DialogueBD.php');
if (isset($_SESSION)){
}
else
    session_start();
try {
    $undlg = new DialogueBD(); //on créer une instance
    $lesCategories =  $undlg->getCatégories(); 
} catch (Exception $e) {
    $erreur = $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Selection catégorie</title>
  <link rel="stylesheet" type="text/css" href="design.css" />
</head>
<body>
  <?php
  if (isset($msgErreur)) {
      echo "Erreur : $msgErreur";
      }        
  ?>
  
  <?php 
  
  echo $_SESSION['login']; //Affichage du pseudo
  echo "<br />";
  ?>
  
  <a href="deconnexion.php">Déconnexion</a> <!--Possibilité de déconnexion-->
  
  <h1 class='centreh'>Choisissez votre catégorie</h1><br/>
  
  <?php
  echo "<ul class='centre'>";

    foreach ($lesCategories as $ligne){
        $code = $ligne['CodeCat'];
        $nom = $ligne['LibelleCat'];
        echo "<li class='centre'><a href='listePlats.php?categ=$code'>$nom</a></li>"; //affichage et lien des catégories
    }
   
    
  echo"</ul>";
  ?>
  
</body>
</html>
