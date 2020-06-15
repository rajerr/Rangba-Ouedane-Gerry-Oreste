<?php

function isconnect(){
    if(!isset($_SESSION['statut'])){
        header("location:../index.php");
    }
}

function deconnexion(){
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    unset($_SESSION['statut']);
    session_destroy();
}

?>