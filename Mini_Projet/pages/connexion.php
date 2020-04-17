<?php
  session_start();
        $users = file_get_contents('json/users.json');
        $users = json_decode($users, true);
if(isset($_POST['connexion'])) {
                $login =$_POST['login'];
                $password=$_POST['password'];
                for($i=0; $i<count($users); $i++){
                        if($login!=$users[$i]['login'] || $password!=$users[$i]['password'] ){
                                 $error="Login ou le mot de passe incorrect";
                        }elseif($login==$users[$i]['login'] && $password==$users[$i]['password']){
                                        if($users[$i]['profil']=='joueur'){
                                                $j=$i;
                                        $_SESSION['prenom']=$users[$j]['prenom'];
                                        $_SESSION['nom']=$users[$j]['nom'] ;
                                        $_SESSION['profil']=$users[$j]['photo'];
                                        header('Location:pages/index2.php');    
                                        }else{
                                                $j=$i;
                                                $_SESSION['prenom']=$users[$j]['prenom'];
                                                $_SESSION['nom']=$users[$j]['nom'] ;
                                                $_SESSION['profil']=$users[$j]['photo'];
                                                header('Location:pages/index1.php');    
                                        }
                        }else{          
                                header('Location:/index.php');   
                        }
                
        }
}  
?>