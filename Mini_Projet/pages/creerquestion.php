<div class="enregistrer-question">
    <h2 class="title_question" for="">PARAMETREZ VOTRE QUESTION</h2>
    <form action="" method="POST" id="form-question">
        <div class="champs-saisie" id="div-inputs">
                <br>
            <label class="label-qs" for="">Questions</label>
            <input class="input area" name="question" id="" error="error1"></input><br>
            <div class="erreur" id="error1"> </div>
            <label class="label-qs" for="">Nbre de points</label>
            <input class="input nbr" type="number" name="number" id="" error="error2" ><br>
            <div class="erreur" id="error2"> </div>
            <div class="rows" id="row_0">
                <label class="label-qs" id="label" for="">Type de Reponse</label>
                <select class="input qs" name="type" id="select" placeholder="choisir le type" error="error3" >
                    <option class="option"> Choisir un Type</option>
                    <option class="option" id="multi" value="multi">Multiple</option>
                    <option class="option" id="simple" value="simple">Simple</option>
                    <option class="option" id="text" value="text">Text</option>
                </select>
                <button class="btn-i" type="button" onclick="creerInput()"><img src="../Images/Icônes/ic-ajout-réponse.png" alt=""></button>
                <div class="erreur" id="error3"> </div>
            </div>
        </div>
    </form>
    <div class="erreur">
            <?php if(isset($error)){ echo $error; }?>
    </div>
    <button type="submit" class="btn-e" name="enregistrer">Enregistrer</button>
</div>
<script type="text/javascript" src="../js/creerquestion.js"></script>

<?php

if(isse($_POST['enregistrer'])){
    var_dump($_POST);
$error="";
    if(empty($_POST['question']) && empty($_POST['number']) && empty($_POST['type']) && empty($_POST['reponse'])){
        $error = "Tous les champs sont obligatoire";
    }else{
        $data=file_get_contents('../json/questions.json');
        $js=json_decode($data,true);
        
        if($select.$value == 'text'){
            for($i=0; $i<$reponse; $i++){
                    $questions = array();
                    $questions['question']=$_POST['question'];
                    $questions['point']=$_POST['number'];
                    $questions['type']=$_POST['type'];
                    $questions['reponse']=$_POST['reponse'];
                }
            }else{
                $questions = array();
                $questions['question']=$_POST['question'];
                $questions['point']=$_POST['number'];
                $questions['type']=$_POST['type'];
                 for($i=0; $i<= count($_POST['reponse']); $i++){
                    $questions['reponse'.$i]=$_POST['reponse'.$i];
                }
            }
            $js[]=$questions;
            $js=json_encode($js);
            file_put_contents('../json/questions.json',$js);
        }
    }
?>