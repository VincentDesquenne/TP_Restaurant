<?php

require_once ('Connexion.php') ;
class DialogueBD { 
    public function getUtilisateurs($log,$pass) { //Accéder à la base de données des utilisateurs avec pseudo et mot de passe correspondant
 
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT * FROM utilisateur WHERE pseudo = ? AND mdp = ?";
            $sth = $conn->prepare($sql);
            $sth->execute(array($log,$pass)); //on 
            $tabUtilisateurs = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $tabUtilisateurs;
            } catch (PDOException $e) {
                $erreur = $e->getMessage();
            }
        }
    public function getPlats($cat) { //accéder aux plats d'une catégorie donnée en paramètre
 
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT * FROM plat WHERE CodeCat = ?";
            $sth = $conn->prepare($sql);
            $sth->execute(array($cat));
            $tabPlats = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $tabPlats;
            } catch (PDOException $e) {
                $erreur = $e->getMessage();
            }
        }    
        
    public function getCatégories() { 
 
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT * FROM categorie";
            $sth = $conn->prepare($sql);
            $sth->execute();
            $tabCat = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $tabCat;
            } catch (PDOException $e) {
                $erreur = $e->getMessage();
            }
        } 
    
} 
