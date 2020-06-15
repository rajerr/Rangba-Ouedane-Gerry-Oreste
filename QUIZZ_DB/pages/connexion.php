    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-4 col-xlg-4 ">
        <img src="assets\Images\logo-QuizzSA.png" class="img-fluid max-width: 100% height: auto" alt="logo-QuizzSA">
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-8 col-xlg-8 bg-info">
        <div class="col-12">
                <h2 class="section-heading text-center mt-5">CONNEXION</h2>
            </div>
            <form action="index.php?action=connexion" method="post" id="form-connexion">
                <div class="container border border-light mt-5">
                        <div class="form-group row">
                            <div class="col-md-3 mt-2"> login</div>
                            <div class="col-lg-12 mt-2">
                                <input type="text" class="col-6" name="login" value=""  error="error-1">
                            </div>
                            <div class="erreur text-danger ml-5" id="error-1"> </div>
                        </div>  
                        <div class="form-group row">
                            <div class="col-md-3 mt-2 ">Password</div>
                            <div class="col-lg-12 mt-2">
                                <input type="password"  class="col-6" name="password" value=""  error="error-2">
                            </div>
                            <div class=" erreur text-danger ml-5" id="error-2"> </div>
                        </div>  
                        <div class="form-group ml-5">
                            <div class="row">   
                                <button name="btnsubmit" id="submit" class="btn btn-info border border-light mt-3" type="submit">Se connecter</button>
                            </div>
                        <div class="lg-col-9 mt-5 ml-5"> 
                            <label class="lg-col-6" for="">Pas de Compte?</label>
                            <a><input  class="btn btn-info" type="button" id="inscription" name="inscription" value="S'inscrire pour joueur"> </a>
                        </div>
                    </div> 
                </div>
            </form>
        </div>
    </div>