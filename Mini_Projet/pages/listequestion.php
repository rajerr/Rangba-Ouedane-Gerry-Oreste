<?php
session_start();
$data= file_get_contents('../json/questions.json');
$questions = json_decode($data, true);

$NbreParPage = 5;
$NbrePage = ceil(count($questions)/$NbreParPage);
$error ="";
$_SESSION['NombreQuestion']  = 7 ;

if(isset($_POST['valider'])){
    if(empty($_POST['number']) || $_POST['number'] < 5){
        $error ="erreur le nombre doit être supérieur ou égale à 5 ";
    }else{
        $_SESSION['NombreQuestion'] = $_POST['number'];
    }
}
$partie = ceil(count($questions)/$_SESSION['NombreQuestion']);
?>
<form method="post" id="liste"> 
<table>
<?php
if (isset($_POST['suivant'] ) && $_SESSION['fin']<count($questions)) {
                $debut=$_SESSION['fin'];
                $fin=$_SESSION['fin']+$NbreParPage;
            }elseif (isset($_POST['precedent']) && $_SESSION['fin']>count($questions)+1) {
                $debut=$_SESSION['fin']-(count($questions)+1);
                $fin=$_SESSION['fin']-$NbreParPage;
            }else
            {
                $debut=0;
                $fin=$NbreParPage;
            }
            $_SESSION['j']=$debut+1;
?>
<div class="content">
    <div style="margin-top:1%">
            <div class="erreur"  id="liste"> <?php if(isset($error)){ echo $error ;} ?></div>
            <label class="label-input">Nbre de question/jeu</label>
            <input class="input-number" type="text" name="number" id="number" error="error" value="<?php  echo $_SESSION['NombreQuestion']; ?>">
            <input class="btn_ok" type="submit" name="valider" onclick="myFunction()"  value="ok">
    </div>
    <div class="border_content_lq">
        <?php 
        for($i=$debut; $i <$fin ; $i++){
            if ($i<=count($questions)){
                echo ($i+1).'- '.$questions[$i]['question'];
                echo"<br>";
                if ($questions[$i]['type']=='SIMPLE' || $questions[$i]['type']=='MULTIPLE'){
                    foreach($questions[$i]['reponse'] as $key => $qcm){
                        if ($questions[$i]['type']=="SIMPLE"){ 
                            echo '&nbsp;&nbsp;';
                            if (($key) == $questions[$i]['bonne'][0]){
                                echo '<input type="radio" name="r['.$i.']" id="r" checked>';
                            }else {echo '<input type="radio" name="r" id="r">';}
                        }
                        if ($questions[$i]['type']=="MULTIPLE"){ 
                            echo '&nbsp;&nbsp;';
                                if ( in_array(( $key),$questions[$i]['bonne'] )) {
                                    echo '<input type="checkbox" name="c['.$i.']" id="c" checked>';
                                    
                                }else {
                                    echo '<input type="checkbox" name="c" id="c">';
                                }
                        }          echo '&nbsp;&nbsp;';
                                   echo $qcm.'</br>';
                    }

                    
                }if ($questions[$i]['type']=='TEXT'){
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                    echo '<input readonly="readonly" type="text" name="t" id="t" value="'; echo $questions[$i]['reponse'].'"></br>';
                }
            }
    }  $_SESSION['j']++;
    $_SESSION['fin']=$fin;
?>
    </div>
            <div class="div-btn">
<?php   
                    if (isset($_POST['suivant']) OR $_SESSION['fin']>= count($questions)) {
                        echo "<button  name='precedent'  class='btnbtn'> Precedent</button> ";
                    }
                    if ($_SESSION['fin']<= count($questions)) {
                        echo "<button  name='suivant' class='btn'> suivant</button> ";
                    }
?>         
</div>
 </div>            

</table>
</form>
   
<script  type="text/javascript" src="js/valider.js"></script>
