       
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
  $DernierPage = ceil($NbreTotal/$NbreParPage);
  $NbreDePageAvAp = 4;
  if(isset($_GET['page']) && is_numeric($_GET['page'])){
      $PageActuelle = $_GET['page'];
  }else{
      $PageActuelle = 1;
  }
  if($PageActuelle<1){
      $PageActuelle = 1;
  }elseif($PageActuelle > $DernierPage){
      $PageActuelle = $DernierPage;
  }
  $limit = 'LIMIT'.($PageActuelle - 1)* $NbreParPage. ',' . $NbreParPage;
  $pagination = "";
  if($DernierPage != 1){
      if($PageActuelle > 1){
          $precedent = $PageActuelle - 1;
          $pagination .= '<a class="btnbtn" href="index1.php?p=liste_joueurs&page='.$precedent.'">Precedent</a> &nbsp;&nbsp;';
          for($i = $PageActuelle - $NbreDePageAvAp ; $i<$PageActuelle; $i++){
              if($i>0){
                  $pagination .= '<a href="index1.php?p=liste_joueurs&page='.$i.'">'.$i.'</a>&nbsp;';
              }
          }
      }
      $pagination .= '<span class="active">'.$PageActuelle.'</span>&nbsp;';

      for($i = $PageActuelle + 1; $i <= $DernierPage; $i++){
          $pagination .= '<a href="index1.php?p=liste_joueurs&page='.$i.'">'.$i.'</a>';
          if($i >= $PageActuelle + $NbreDePageAvAp){
          break;
          }
      }
      if($PageActuelle != $DernierPage){
          $suivant = $PageActuelle +1;
          $pagination .= '<a class="btn" href="index1.php?p=liste_joueurs&page='.$suivant.'">Suivant</a>&nbsp&nbsp';
      }
  }
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
            for($i=$PageActuelle*$NbreParPage; $i<$NbreTotal; $i++){
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
            $PageActuelle++;        
?> 
           </div>
           <?php   echo '<div class="pagination" id="pagination">'.$pagination.'</div>';?>
    </div>
</div>

