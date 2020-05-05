       
<?php
session_start();
  $data= file_get_contents('../json/users.json');
  $users = json_decode($data, true);
  $joueurs=[];
      foreach($users as $key=>$value){
          if($value['profil']==="joueur"){
              $joueurs[]=$value;
          }
      }
  $NbreParPage = 15;
  $NbreTotal = count($joueurs);
  $NbrePage = ceil($NbreTotal/$NbreParPage);
  ?>
  <form method="post">
  <table>
  <?php
  
  if (isset($_POST['suivant'] ) && $_SESSION['fin']<$NbreTotal) {
                  $debut=$_SESSION['fin'];
                  $fin=$_SESSION['fin']+$NbreParPage;
              }elseif (isset($_POST['precedent']) && $_SESSION['fin']> $NbreTotal+1) {
                  $debut=$_SESSION['fin']-($NbreTotal+1);
                  $fin=$_SESSION['fin']-$NbreParPage;
              }else
              {
                  $debut=0; 
                  $fin=$NbreParPage;
              }
              $_SESSION['j']=$debut+1;
  ?>
 <div class="content">
        <div>
               <h4 class="title">LISTE DES JOUEURS PAR SCORE</4>
        </div>
    <div>
        <div class="border_content">

                    <label class="label-title-nom" for="">Nom</label>
                    <label class="label-title-prenom" for="">Prenom</label>
                    <label class="label-title-score" for="">Scores</label>

<?php
    $colonne=array_column($joueurs, 'score');
    array_multisort($colonne, SORT_DESC, $joueurs);
            for($i=$debut; $i <$fin ; $i++){
                if($i<=count($joueurs)){
                    ?>
                    <div class="div-list-nom">
                            <?php echo strtoupper($joueurs[$i]['nom']); ?>
                    </div>
                    <div class="div-list-prenom">
                            <?php echo ucfirst($joueurs[$i]['prenom']);?>
                    </div>
                    <div class="div-list-score">
                            <?php  echo $joueurs[$i]['score'] ;?>pts
                    </div><br>
        <?php  
                }
               
            }  $_SESSION['j']++;
            $_SESSION['fin']=$fin;
?>
   
            <div class="div-btn1">
<?php   
                    if (isset($_POST['suivant']) OR $_SESSION['fin']>= count($joueurs)) {
                        echo "<button  name='precedent'  style='margin-left: -30%; background-color: grey; border-radius: 5px'> Precedent</button> ";
                    }
                    for($page = 1; $page <=$NbrePage; $page++){
                        echo '<a style="margin-left: 10%"  href="index1.php?p=liste_joueurs&page='.$page.'">('.$page.')</a>';
                    }
                    if ($_SESSION['fin']<= count($joueurs)) {
                        echo "<button  name='suivant' style='margin-left: 10%; background-color: skyblue; border-radius: 5px'> suivant</button> ";
                    }
?>          </div>         
 </div>   
</div>
</table>
</form>
           
