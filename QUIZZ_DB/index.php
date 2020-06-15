<!doctype html>
<html lang="en">
  <head>
    <title>Quizz SA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
  </head>
  <body>
      <div class="container" id="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-4 col-xlg-4 ">
                <img src="assets\Images\logo-QuizzSA.png" class="img-fluid max-width: 100% height: auto" alt="logo-QuizzSA">
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-8 col-xlg-8 bg-info">
                <div class="col-12">
                        <h2 class="section-heading text-center mt-5">CONNEXION</h2>
                    </div>
                    <form action="index.php" method="post" id="form-connexion">
                        <div class="container border border-light mt-5">
                                <div class="form-group row">
                                    <div class="col-md-3 mt-2"> login</div>
                                    <div class="col-lg-12 mt-2">
                                        <input type="text" class="col-6" name="login" id="login" value=""  error="error-1">
                                    </div>
                                    <div class="erreur text-danger ml-5" id="error-1"> </div>
                                </div>  
                                <div class="form-group row">
                                    <div class="col-md-3 mt-2 ">Password</div>
                                    <div class="col-lg-12 mt-2">
                                        <input type="password"  class="col-6" name="password" id="password" value=""  error="error-2">
                                    </div>
                                    <div class=" erreur text-danger ml-5" id="error-2"> </div>
                                </div>  
                                <div class="form-group ml-5">
                                    <div class="row">   
                                        <button name="btnsubmit" id="submit" class="btn btn-info border border-light mt-3" type="submit">Se connecter</button>
                                    </div>
                                <div class="lg-col-9 mt-5 ml-5"> 
                                    <label class="lg-col-6" for="">Pas de Compte?</label>
                                    <a href="pages/inscription.php"><input  class="btn btn-info" type="button" id="inscription" name="inscription" value="S'inscrire pour joueur"> </a>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
      </div>
        <script src="assets/js/connexion.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script src="assets/js/scriptConnexion.js"></script>
</body>
</html>