<?php
require_once('DialogueBD.php');
session_start();
try {
    $categorie=$_GET["categ"]; //on récupère la catégorie sélectionné
    $undlg = new DialogueBD();
    $mesPlats = $undlg->getPlats($categorie);
} catch (Exception $e) {
    $erreur = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <link rel="stylesheet" type="text/css" href="design.css"/>
  <title>Restaurant Maison du Délice</title>  <!-- Nom dans l'onglet -->
</head>
<body>
  <?php
  echo $_SESSION['login']; //pseudo
  echo "<br />";
  ?>
  <a href="deconnexion.php">Déconnexion</a>
  <table> <!--Tableau des plats-->
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prix (en euros)</th>
        <th>Image</th>
        <th>Hit Parade</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach ($mesPlats as $ligne) { //Affichage de chaque plat avec nom prix image et hit parade
            echo"<tr>";
                $ref = $ligne['RefPlat'];
                $nom = $ligne['NomPlat'];
                echo "<th>$nom</th>";
                $prix = $ligne['Prix'];
                echo "<th>$prix</th>";
                $image = $ligne['NomImg'];
                echo "<th><img src='images/$image' class='plat'</th>";
                $hit = $ligne['HitParade'];
                echo "<th>$hit</th>";
            echo"</tr>";
        }    

      ?>

  </tbody>
</table>
  <p class='centre'><a href="selection.php">Retour à la séléction de la catégorie</a></p> <!--Possibilité de revenir à la selection-->
</body>
</html>

