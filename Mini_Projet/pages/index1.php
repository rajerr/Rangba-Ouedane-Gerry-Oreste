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
   include_once("../pages/enregistrerquestion.php");
   $users = file_get_contents('json/users.json');
   $users = json_decode($users, true);
?>
<body>
<form method="get" action="connexion.php">
    <div class="container">
       <div class="contenu">
            <div class="profil">
               <a href="index1.php"> <img class="avatar" src="../Images/avatar/<?php echo $_SESSION['profil']?>" alt=""/></a><br>
                <label class="label_identy"><?php echo $_SESSION['nom']?></label>
                <label class="label_identy"><?php echo $_SESSION['prenom']?></label>
            </div>
        <div class="menu">
               <a  href="#"><a href="index1.php?p=liste_questions" class="label-decor"> 
                   <img class="icon-menu"src="../Images/Icônes/ic-liste-active.png">
                    <h4 class="label-menu">Liste Questions</h4>
                </a>
                <ahref="#"><a href="index1.php?p=creer_admin"  class="label-decor">
                    <img class="icon-menu"src="../Images/Icônes/ic-ajout.png">
                    <h4 class="label-menu"> Créer Admin</h4>
                </a>
                <a href="#"><a href="index1.php?p=liste_joueurs" class="label-decor">
                    <img class="icon-menu"src="../Images/Icônes/ic-liste.png">
                    <h4 class="label-menu"> Liste Joueurs</h4>
                </a>
                <a href="#"><a href="index1.php?p=creer_joueurs"  class="label-decor">
                    <img class="icon-menu"src="../Images/Icônes/ic-ajout.png">
                    <h4 class="label-menu"> Créer Joueurs</h4>
                </a>
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
            }elseif($m=="creer_joueurs"){
                include_once("../pages/creerjoueur.php");
            }
        }
    ?>
</body>
</html>