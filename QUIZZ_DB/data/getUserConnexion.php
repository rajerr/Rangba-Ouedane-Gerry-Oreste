<?php
require "../db/connexion.php";
         session_start();
        
        $req = $db->prepare('SELECT * FROM users WHERE login =? AND password =?');
        $req->execute(array($_POST["login"], $_POST["password"]));
       $result = $req->fetchAll();
        if(count($result)<1){
            echo "echec";
        }
        else{
            $_SESSION['login'] = $result[0]['login'];
            $_SESSION['password'] = $result[0]['password'];
            $_SESSION['nom'] = $result[0]['nom'];
            $_SESSION['prenom'] = $result[0]['prenom'];
            $_SESSION['score'] = $result[0]['score'];
            $_SESSION['photo'] = $result[0]['photo'];
            echo ($result[0]['profil']);
        }
?>