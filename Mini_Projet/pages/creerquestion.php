<div class="enregistrer-question">
    <h2 class="title_question" for="">PARAMETREZ VOTRE QUESTION</h2>
    <form action="" method="post" id="form-question">
        <div class="champs-saisie" id="div-inputs">
                <br>
            <label class="label-qs" for="">Questions</label>
            <input class="input area" name="question" id="" error="error1" value="<?php if(isset($_POST['question']) && empty($_POST['question'])){echo $_POST['question'];}?>"></input><br>
            <div class="erreur" id="error1"> </div>
            <label class="label-qs" for="">Nbre de points</label>
            <input class="input nbr" type="number" name="number" id="" error="error2" value="<?php if(isset($_POST['number']) && ($_POST['number'])< 1 ){echo $_POST['number'];}?>" ><br>
            <div class="erreur" id="error2"> </div>
                <div class="rows" id="row_0">
                    <label class="label-qs" id="label" for="">Type de Reponse</label>
                    <select class="input qs" error="error3" name="select" id="select">
                        <option class="option"> Choisir un Type</option>
                        <option class="option" id="multiple" value="multiple">Multiple</option>
                        <option class="option" id="simple" value="simple">Simple</option>
                        <option class="option" id="text" value="text">Text</option>
                    </select>
                    <button class="btn-i" type="button"  onclick="creerInput()"><img src="../Images/Icônes/ic-ajout-réponse.png" alt=""></button>
                    <div class="erreur" id="error3"> </div>
                </div>
                <!-- <?php     var_dump($_POST);?> -->
        </div>
                <div class="erreur">
                    <?php if(isset($error)){ echo $error; }?>
                </div>
                <input class="btn-e" type="submit" name="enregistrer" value="Enregistrer">
    </form>
    
</div>
<script type="text/javascript" src="../js/creerquestion.js"></script>

<?php
if(isset($_POST['enregistrer'])){
    $error="";
    $select= $_POST['select'];
    $reponses=$_POST['reponse'];
    $radio= $_POST['radio'];
    $bonne = $_POST['checkbox'];
    
    

    $data=file_get_contents('../json/questions.json');
    $data=json_decode($data,true);

    if(empty($_POST['question']) && empty($_POST['number']) && empty($select) && empty($_POST['reponse'])){
        $error = "Tous les champs sont obligatoire";
    }else{
        $questions = array();
        $questions['question']=$_POST['question'];
            if($_POST['number']<1){
                $error="Le point doit être supérieur à 1";
                exit;
            }else{
                $questions['point']=$_POST['number'];
            }
        $questions['type']= strtoupper($select);
            if($select == "text"){
                $questions['reponse']=strtoupper($_POST['reponse']);
            }else{
                if($select == "simple"){
                    for($i=1; $i <= count($reponses); $i++){
                        $questions['reponse'][$i]=strtoupper($reponses[$i]);
                    }
                    for($i=1; $i<=count($radio); $i++){ 
                    $questions['bonne']=$radio;
                    }
                }else {
                    if($select =="multiple"){
                       for($i=1; $i<= count($reponses); $i++){
                        $questions['reponse'][$i]=strtoupper($reponses[$i]);
                        }
                        for($i=1; $i<=count($bonne); $i++){
                            $questions['bonne']=$bonne;
                        }
                    }

                }
            }
    $data[]=$questions;
    $data=json_encode($data);
    file_put_contents('../json/questions.json',$data);
    }

}
?>