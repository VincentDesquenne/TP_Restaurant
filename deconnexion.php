<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <link rel="stylesheet" type="text/css" href="design.css"/>
  <title>Restaurant Maison du Délice</title>
</head>
<body class='centre'>
  <?php
  session_unset (); // Detruit les variables
  if (session_id()!= ""){
    session_destroy (); // detruit la session
  }
  ?>
    <h1>Déconnexion</h1>
    <h2>A bientôt !</h2>
    <img src='https://media.giphy.com/media/LMQo5ad3JdjCAba7Sv/giphy.gif'>
    <br/>
    <a href='index.php'>Revenir sur la page d'accueil</a>
              
</body>
</html>
