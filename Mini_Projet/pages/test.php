<?php
session_start();
$data= file_get_contents('../json/questions.json');
$questions = json_decode($data, true);

$NbrePage = ceil(count($questions)/5);
?>
<form method="post">
<table>
<?php

if (isset($_POST['suivant'] ) && $_SESSION['fin']<count($questions)) {
                $debut=$_SESSION['fin'];
                $fin=$_SESSION['fin']+5;
            }elseif (isset($_POST['precedent']) && $_SESSION['fin']>count($questions)) {
                $debut=$_SESSION['fin']-count($questions);
                $fin=$_SESSION['fin']-1;
            }else
            {
                $debut=0;
                $fin=5;
            }
            $_SESSION['j']=$debut+1;
?>
<div class="menu-jeux">

<div  class="question">
        <?php
            for ($i=$debut; $i <$fin ; $i++) {
                if ($i<count($questions)){
?>
                        <label class="label-joueur-t" for=""><?php  echo "Question " .$i."/".count($questions)?></label><br>
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
        } $_SESSION['j']++;
$_SESSION['fin']=$fin;
        if (isset($_POST['suivant']) OR $_SESSION['fin']>= count($questions)-1) {
            echo "<button  name='precedent' style='float:left;margin-left:-0vw;'> Precedent</button> ";
        }
        ?>
        <?php
        if ($_SESSION['fin']< count($questions)) {
            echo "<button class='bttn' name='suivant' style='float:right;margin-top:1.7vw'> suivant</button> ";
        }

        ?>
</table>

</form>

</div>

<div class="div-btn">
<?php   
        for($page = 1; $page <=$NbrePage; $page++){
            echo '<a href="index2.php?p=liste_questions&page='.$page.'">('.$page.')</a>';
        }
?>
</div>
            
</div>