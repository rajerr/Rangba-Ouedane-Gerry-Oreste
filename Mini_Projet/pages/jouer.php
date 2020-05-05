<?php
session_start();
$data= file_get_contents('../json/questions.json');
$questions = json_decode($data, true);

$NbreParPage = 1;
$NbrePage = ceil(count($questions)/$NbreParPage);
?>
<form method="post">
<table>
<?php

if (isset($_POST['suivant'] ) && $_SESSION['fin']<count($questions)) {
                $debut=$_SESSION['fin'];
                $fin=$_SESSION['fin']+$NbreParPage;
            }elseif (isset($_POST['precedent']) && $_SESSION['fin']>count($questions)+1) {
                $debut=$_SESSION['fin']-count($questions);
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
                if ($i<count($questions)){
?>
                        <label class="label-joueur-t" for=""><?php  echo "Question " .$i."/".(count($questions) -1)?></label><br>
                        <label style="margin-left: 10%" for="">***************************************</label>
                        <label class="label-joueur" for=""> <?php echo $questions[$i]['question']; ?></label><br>          
<?php
                    // echo $questions[$i]['question'];
                    echo"<br>";
                    if ($questions[$i]['type']=='SIMPLE' || $questions[$i]['type']=='MULTIPLE'){
                        foreach($questions[$i]['reponse'] as $key => $qcm){
                            if ($questions[$i]['type']=="SIMPLE"){ 
                                echo '&nbsp;&nbsp;';
                                echo '<input type="radio" name="r['.$i.']" id="r" >';
                            }
                            if ($questions[$i]['type']=="MULTIPLE"){ 
                                echo '&nbsp;&nbsp;';
                                    echo '<input type="checkbox" name="c['.$i.']" id="c">';
        
                            }       echo '&nbsp;&nbsp;';
                                    echo $qcm.'</br>';
                        }  
                    }if ($questions[$i]['type']=='TEXT'){
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
                        if (isset($_POST['suivant']) OR $_SESSION['fin']>= count($questions)) {
                            echo "<button  name='precedent'  style=' margin-left: -40%; background-color: grey; border-radius: 5px'> Precedent</button> ";
                        }
                        if ($_SESSION['fin']<= count($questions)) {
                            echo "<button  name='suivant' style='margin-left: 55%; background-color: skyblue; border-radius: 5px'> suivant</button> ";
                        }
                        if($_SESSION['fin'] == count($questions)){
                            echo "<button  name='valider' style='margin-left: -10%; background-color:  rgb(50, 210, 50); border-radius: 5px'> Valider</button> ";
                        }
    ?>          </div>            
    </div>
    </table>
    </form>