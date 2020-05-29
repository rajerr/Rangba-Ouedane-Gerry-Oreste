<?php
session_start();
$data= file_get_contents('../json/questions.json');
$questions = json_decode($data, true);
$_SESSION['questions'] = $questions;
$_SESSION['NombreQuestion'];

$NbreParPage = 1;
$NbrePage = ceil($_SESSION['NombreQuestion']/$NbreParPage);
?>
<form method="post">
<table>
<?php

if (isset($_POST['suivant'] ) && $_SESSION['fin']<$_SESSION['NombreQuestion']) {
                $debut=$_SESSION['fin'];
                $fin=$_SESSION['fin']+$NbreParPage;
            }elseif (isset($_POST['precedent']) && $_SESSION['fin']>$_SESSION['NombreQuestion']+1) {
                $debut=$_SESSION['fin']-$_SESSION['NombreQuestion'];
                $fin=$_SESSION['fin']-$NbreParPage;
            }else
            {
                $debut=0;
                $fin=$NbreParPage;
            }
            $_SESSION['j']=$debut+1;
?>
<div class="menu-jeux">

<div  class="question">
        <?php
            for($i=$debut; $i <$fin ; $i++){
                if ($i<$_SESSION['NombreQuestion']){
?>
                        <label class="label-joueur-t" for="">
                            <label style="text-decoration: underline;"><?php  echo "Question " .($i+1)."/". ($_SESSION['NombreQuestion'])?></label><br><br>
                            <?php echo $_SESSION['questions'][$i]['question']; ?>
                        </label><br>
                        <label style="margin-left: 10%; color:skyblue" for="">***************************************</label>
                        <label class="label-point" for=""><?php echo $_SESSION['questions'][$i]['point'] .pts; ?> </label><br> 
                       
                                
<?php
                    // echo $questions[$i]['question'];
                    echo"<br>";
                    if ($_SESSION['questions'][$i]['type']=='SIMPLE' || $_SESSION['questions'][$i]['type']=='MULTIPLE'){
                        foreach($questions[$i]['reponse'] as $key => $qcm){
                            if ($questions[$i]['type']=="SIMPLE"){ 
                                echo '&nbsp;&nbsp;';
                                echo '<input type="radio" name="r['.$i.']" id="r" >';
                            }
                            if ($questions[$i]['type']=="MULTIPLE"){ 
                                echo '&nbsp;&nbsp;&nbsp;&nbsp;';
                                    echo '<input type="checkbox" name="c['.$i.']" id="c">';
        
                            }       echo '&nbsp;&nbsp;';
                                    echo $qcm.'</br>';
                        }  
                    }if ($_SESSION['questions'][$i]['type']=='TEXT'){
                        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        echo '<input type="text" name="t" id="t" value=""></br>';
                    }
                }
        }  $_SESSION['j']++;
        $_SESSION['fin']=$fin;
    ?>
        </div>
                <div class="div-btn1">
    <?php   
                        if (isset($_POST['suivant']) OR $_SESSION['fin']>= $_SESSION['NombreQuestion']) {
                            echo "<button  name='precedent'  class='btn-precedent'> Precedent</button> ";
                        }
                        if ($_SESSION['fin']<= $_SESSION['NombreQuestion']) {
                            echo "<button  name='suivant' class='btn-suivant'> suivant</button> ";
                        }
                        if($_SESSION['fin'] == $_SESSION['NombreQuestion']){
                            echo "<button  name='valider' class='btn-terminer'> Terminer</button> ";
                        }
    ?>          </div>            
    </div>
    </table>
    </form>