<div class="row bg-secondaire">
    <div class="col col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xlg-10 border border-info float-right  mx-auto d-block mt-2 content" id="div-inputs">
        <h4 class="col-12 text-info section-heading text-center "> Creer Questions</h4>
        <form action="" method="post" id="formQuestion">
            <div class="form-group col-10 mb-5">
                <label class="text-info ml-5" for="">Questions</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Saisir la question" error="error1">
                <small class="text-danger" id="error1"></small>
            </div>
            <div class="form-group col-2 float-right qst">
                <label class="text-info" for="">Points</label>
                <input type="number" class="form-control" name="nom" id="nom" placeholder="" error="error2">
                <small class="text-danger" id="error2" ></small>
            </div>
            <div class="input-group col-10 mb-5 " id="row_0">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="">Type Question</label>
                </div>
                <select class="custom-select"  name="typeselect" id="typeselect">
                    <option selected>Choisir...</option>
                    <option id="text" value="text">Text</option>
                    <option id="simple" value="simple">Simple</option>
                    <option id="multiple" value="multiple">Multiple</option>
                </select>
            </div>
            <div class="form-group col-2 float-right qstt">
                <button type="button" class="form-control border border-white w-100" name="nom" id="nom"  onclick="creerInput()"><img src="../assets\Images\Icônes\ic-ajout-réponse.png" alt=""></button>
                <button name="btnsave" id="btnsave" class="btn btn-info border border-light mt-5 " type="button">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
<script src="../assets\js\scriptAjoutChampsQuestion.js"></script>