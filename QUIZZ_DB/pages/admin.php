<!doctype html>
<html lang="en">
  <head>
    <title>Quizz SA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
    <script rel="javascript" type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  </head>
  <body>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script rel="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script rel="javascript" type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script rel="javascript" type="text/javascript" src="../assets/js/scriptConnexion.js"></script>
    <script rel="javascript" type="text/javascript" src="../assets/js/scriptGetUser.js"></script>

    <!--<script rel="javascript" type="text/javascript" src="../assets/js/ValidationAdmin.js"></script>-->
    <script rel="javascript" type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>
<?php
            require_once "../pages/accueil.php";

            if(isset($_GET['lien'])){
                if($_GET['lien']=="creation"){
                    require_once "../pages/creation.php";
                }elseif($_GET['lien']=="liste_joueur"){
                    require_once "../pages/liste_joueur.php";
                }elseif($_GET['lien']=="creer_question"){
                    require_once "../pages/creer_question.php";
                }elseif($_GET['lien']=="liste_question"){
                    require_once "../pages/liste_question.php";
                }else{
                    require_once "../pages/admin.php";
                }
            }else{
                require_once "../pages/admin.php";
            }
        ?>
