<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css<?php echo "?".rand(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    
    <title>Quiz</title>
</head>
<?php
   include_once("header.php");
   $users = file_get_contents('json/users.json');
   $users = json_decode($users, true);
?>
<body>
<form method="get" action="connexion.php">
    <div class="container">
       <div class="contenu">
            <div class="profil">
               <a href="index1.php"> <img class="avatar" src="../Images/avatar/<?php echo $_SESSION['profil']?>" alt=""/></a><br>
               <div class="div">
               <label class="label_identy"><?php echo strtoupper( $_SESSION['nom']) ?></label>
                <label class="label_identy"><?php echo strtoupper($_SESSION['prenom'])?></label>
            </div>
        <div class="menu1">
            <nav class="menu" style="font-family: Josefin sans;">
                    <ul>
                        <li class="option"> <a href="index1.php?p=liste_questions" >Liste Questions
                        <img class="icon-menu"src="../Images/Icônes/ic-liste.png">
                        </a></li>
                        <li class="option"><a href="index1.php?p=creer_admin" >Creer Admin
                        <img class="icon-menu1"src="../Images/Icônes/ic-ajout.png">
                        </a></li>
                        <li class="option"><a href="index1.php?p=liste_joueurs">Liste Joueurs
                        <img class="icon-menu1"src="../Images/Icônes/ic-liste.png">
                        </a></li>
                        <li class="option"><a href="index1.php?p=creer_questions"  >Creer Questions
                        <img class="icon-menu"src="../Images/Icônes/ic-ajout.png">
                        </a></li> 
                    </ul>
                </nav>
        </div>
       </div>
    </div>
</form>
    <?php
        if(isset($_GET['p'])){
            $m=$_GET['p'];
            if($m=="liste_questions"){
                include_once("../pages/listequestion.php");
            }elseif($m=="creer_admin"){
                include_once("../pages/creeradmin.php");
            }elseif($m=="liste_joueurs"){
                include_once("../pages/listejoueur.php");
            }elseif($m=="creer_questions"){
                include_once("../pages/creerquestion.php");
            }
        }
    ?>
</body>
</html>