<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="connexion">
            <div class="label-login">
                <label class="label">Login Form</label>
            </div>
                <form  method="POST" action="">
                        <input class="input-login" type="text" name="login" placeholder="Login"/>
                        <label class="login"><img class="icon-login"src="Images/Icônes/ic-login.png"></label>
                        <input class="input-password" type="password" name="password" placeholder="Password"/>
                        <label class="password"><img class="icon-password" src="Images/Icônes/ic-password.png"></label>
                        <input class="btn-connexion" type="submit" name="connexion" value="Connexion"/>
                        <a class="lien-inscri" href="index1.php"><strong>S'inscrire pour jouer?</strong></a>
                </form>
                <div class="erreur">
                        <?php
                                if(isset($error)){
                                    echo $error;
                                } 
                        ?>
                </div>
        </div>
</body>
</html>
<?php
  session_start();

        $users = file_get_contents('json/users.json');
        $users = json_decode($users, true);
if(isset($_POST['connexion'])) {
        if(empty($_POST['login']) && empty($_POST['password'])){ 
                $error= "Tous les Champs sont Obligatoires";
        }elseif($users[]=0){
                for($i=0; $i<=count($users[0]); $i++){
                        if($_POST['login']!=$users['joueur'][$i]['login'] || $_POST['password']!=$users['joueur'][$i]['password']){
                                $error= "Login ou mot de passe incorrect";
                        }elseif($_POST['login']==$users['joueur'][$i]['login'] && $_POST['password']==$users['joueur'][$i]['password']){
                                $j=$i;
                                $_SESSION['prenom']=$users['joueur'][$j]['prenom'];
                                $_SESSION['nom']=$users['joueur'][$j]['nom'] ;
                                $_SESSION['profil']=$users['joueur'][$j]['profil'];
                                header('Location:index2.php');   
                        }
                }   
        }elseif($users[]=1){
                for($i=0; $i<=count($users[1]); $i++){
                        if($_POST['login']!=$users['admin'][$i]['login'] || $_POST['password']!=$users['admin'][$i]['password']){
                                $error= "Login ou mot de passe incorrect";
                        }elseif($_POST['login']==$users['admin'][$i]['login'] && $_POST['password']==$users['admin'][$i]['password']){
                                $j=$i;
                                $_SESSION['prenom']=$users['admin'][$j]['prenom'];
                                $_SESSION['nom']=$users['admin'][$j]['nom'] ;
                                $_SESSION['profil']=$users['admin'][$j]['profil'];
                                header('Location:index1.php');   
                        }
                }
                
        }else{
                header('Location:index.php'); 
        }
}   
?>