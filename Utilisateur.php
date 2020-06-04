<?php
require_once('DialogueBD.php');
session_start();
try {          
        $l=$_POST['login']; //on récupère le login entré
        $pwd=$_POST['mdp0']; //on récupère le mot de passe
        $undlg = new DialogueBD();
        $unUtilisateur = $undlg->getUtilisateurs($l, $pwd);
        foreach ($unUtilisateur as $ligne) {
            $login = $ligne['pseudo'];         
            $mdp = $ligne['mdp'];
            }            
            if (isset($login) && isset($mdp)) //on vérifie que les identifiants sont bons
            {
               $_SESSION['login'] = $login;
               $_SESSION['mdp0'] = $mdp;
               $authOK = true; //authentification effectuée
            }
    } catch (Exception $e) {
        $erreur = $e->getMessage();
    } 
if (isset($authOK)){ //si authentification, utilisateur accède à la page de séléction
    include ('selection.php');
}
else{
    echo "<p class='accueil'>Les identifiants ne sont pas corrects. L'accès au site du restaurant est réservé aux utilisateurs authentifiés. Veuillez réessayer.<br/>";
    echo "<a href='index.php'>Retour à l'accueil</a></p>";
}
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="design.css">
    <title>Restaurant Maison du Délice</title>
</head>
 

 
