<?php
$msg="";
require_once "../db/connexion.php";

if($_POST['nom']=="" || $_POST['prenom']=="" ||$_POST['login']=="" || $_POST['password']=="" || $_FILES['photo']=="" ){
    $msg= "Tous les champs sont obligatoires";
    die();
}else{ 
    
$profil='admin';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$login = $_POST['login'];
$password = $_POST['password'];
$photo = $_FILES['photo']['name'];


global $db;

$c = array(
    'profil'    => "admin",
    'nom'       => $_POST['nom'],
    'prenom'    => $_POST['prenom'],
    'login'     => $_POST['login'],
    'password'  => $_POST['password'],
    'photo'     =>$filename
);
$sql = "INSERT INTO users(profil,nom,prenom,login,password,photo) VALUES(:profil,:nom,:prenom,:login,:password,:photo)";
$req = $db->prepare($sql);
if ($result = $req->execute($c)) {
    $msg="Success un enregistrement effectué";
}else{
    $msg="echec d'enregistrement";
}
echo json_encode($result);
}
?>