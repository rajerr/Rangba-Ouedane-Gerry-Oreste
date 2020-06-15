<?php
session_start();
?>
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
  </head>
  <body>
  <header class="">
    <div class="row border border-info">
        <div class="col-sm-4 col-md-3 col-lg-2 col-xs-4 col-xlg-2 bg-light h-50">
            <img class="col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xlg-12 h-50 w-50 ml-5 " src="../assets/Images/logo-QuizzSA.png" alt="">
        </div>
        <div class="col-sm-8 col-md-6 col-lg-8 col-xs-8 col-xlg-8  bg-info">
            <h2 class="section-heading text-center mt-3 ml-5">LE PLAISIR DE JOUEUR</h2>
            <h5 class="section-heading text-center ml-5">Creer et paramettrez vos Quizz</h5>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-2 col-xs-12 col-xlg-2 h-50 mx-auto d-block">
        <img class="rounded-circle  col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xlg-12 h-50 w-50 ml-5 mt-4 mx-auto d-block" src="../assets/Images/avatar/<?php echo $_SESSION['photo']?>" alt="">
            <ul id="menu-vertical" class="mx-auto d-block bg-info">
                <li class="section-heading text-center "><a href="">Joueur</a>
                    <ul>
                    <label class="text text-danger font-weight-bold"><?php echo $_SESSION['nom']?></label>
                            <label class="text text-danger font-weight-bold"><?php echo $_SESSION['prenom']?></label>
                            <li class="">
                                <label for="">Vous avez:</label>
                                <label class="text-success font-weight-bold " for=""><?php echo $_SESSION['score']?> points</label>
                            </li>
                            <li class="mb-4"><a href="jeux.php?lien=topjoueur">Top 5 joueurs</a></li>
 <li ><a href="../pages/logout.php"><button type="submit" class="btn btn-info" id="deconnexion" name="deconnexion" >Deconnexion</button></a></li>                    
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </div>
</header>   
        <div class="container">
            <div class="col-lg-9 col-xlg-9 col-md-9 col-xs-12 col-sm-12 mt-1 border border-info float-left menui" >
        
            </div>
        </div>

</body>
<footer class="col-12 bg-info fixed-bottom">
    <h6 class="section-heading text-center mx-auto d-block ">COPYRIGHT@ (QUIZZ) 2020</h6>
</footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
</html>
<?php
if(isset($_GET['lien'])){
    if($_GET['lien']=='topjoueur'){
        require_once('../pages/top_joueur.php');
    }elseif($_GET['lien']=='inscription'){
        require_once('../pages/inscription.php');
    }
}
?>