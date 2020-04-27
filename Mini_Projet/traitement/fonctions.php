<?php
function connexion($login, $password){
    $users=getData();
    foreach ($users as $key => $user) {
        if($user['login']===$login && $user['password']===$password){ 
            $_SESSION['user']=$user;
            $_SESSION['statut']="login";
            if($user['profil']==="admin"){
                return "accueil";
            }else{
                return "jeux";
            }
        }
    }
        return $error;
}


function isconnect(){
    if(!isset($_SESSION['statut'])){
        header("location:index.php");
    }
}

function deconnexion(){
    unset($_SESSION['user']);
    unset($_SESSION['statut']);
    session_destroy();
}


function getData($file="users"){
        $date=file_get_contents("./data/.$file.json");
        $data=json_decode($data, true); 
        return $data;
}



?>