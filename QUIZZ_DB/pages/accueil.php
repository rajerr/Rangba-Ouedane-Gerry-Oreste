<?php
session_start();
?>
<header class="">
    <div class="row border border-info">
        <div class="col-sm-4 col-md-3 col-lg-2 col-xs-4 col-xlg-2  h-50">
            <img class="col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xlg-12 h-50 w-50 ml-5 d-none d-sm-block d-md-block d-lg-block d-xlg-block" src="../assets/Images/logo-QuizzSA.png" alt="">
        </div>
        <div class="col-sm-8 col-md-6 col-lg-8 col-xs-8 col-xlg-8  bg-info">
            <h2 class="section-heading text-center mt-3 ml-5">LE PLAISIR DE JOUEUR</h2>
            <h5 class="section-heading text-center ml-5">Creer et paramettrez vos Quizz</h5>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-2 col-xs-12 col-xlg-2 h-50 mx-auto d-block">
        <img class="rounded-circle  col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xlg-12 h-50 w-50 mt-4 mx-auto d-block" src="../assets/Images/avatar/<?php echo $_SESSION['photo']?>" alt="">
            <ul id="menu-vertical" class="mx-auto d-block">
                <li class="section-heading text-center "><a href="#">Administrateur</a>
                    <ul>
                        <li class="text text-danger font-weight-bold"><?php echo $_SESSION['nom']?></li>
                        <li class="text text-danger font-weight-bold"><?php echo $_SESSION['prenom']?></li>
                        <li ><a href="../pages/logout.php"><button type="submit" class="btn btn-info" id="deconnexion" name="deconnexion" >Deconnexion</button></a></li>
                    </ul>
                </li>
            </ul>

        </div>
        </div>
    </div>
</header>   
    <div class="container">
            <div class=" d-none d-md-block d-lg-block d-xlg-block col-4 float-left mt-4 menu">
                <div class="row mt-5 ml-5">
                    <label><img class="icon mt-5" src="../assets/Images/Icônes/dashbord.png" alt=""></label>
                    <div class="row ml-1"> <a href="admin.php"><button class="btn btn-info  mt-5" type="button" id="dashbord"> Dashbord</button></a></div>
                </div>
                    <div class="row mt-5 ml-5">
                    <label><img class=" icon" src="../assets/Images/Icônes/users.png" alt=""></label>
                        <div class="dropdown">
                        <button class="btn btn-info  dropdown-toggle" type="button" id="users" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            Gestion des Users
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="admin.php?lien=creation">Creer Admin</a>
                            <a class="dropdown-item" href="admin.php?lien=liste_joueur">Lister Joueurs</a>
                        </div>
                    </div>
                </div>
               <div class="row mt-5 ml-5">
               <label><img  class="icon" src="../assets/Images/Icônes/jeux.png" alt=""></label>
                    <div class="dropdown">
                        <button class="btn btn-info  dropdown-toggle" type="button" id="question" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            Gestion des Questions
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="admin.php?lien=liste_question">Lister Questions</a>
                            <a class="dropdown-item" href="admin.php?lien=creer_question">Ajouter question</a>
                        </div>
                    </div>
               </div>
            </div> 

            <!--Navbar-->
        <nav class="navbar navbar-light light-blue lighten-4">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Navbar</a>

        <!-- Collapse button -->
        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
            class="fas fa-bars fa-1x"></i></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Dashbord <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
        <!-- Links -->

        </div>
        <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->
    </div>
<footer class="col-12 bg-info fixed-bottom">
    <h6 class="section-heading text-center mx-auto d-block ">COPYRIGHT@ (QUIZZ) 2020</h6>
</footer>
