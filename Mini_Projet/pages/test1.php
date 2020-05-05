<?php
$tab = array(
    'fruit1' => 'apple',
    '2' => 'orange',
    '3' => 'grape',
);
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// Cette boucle affiche toutes les clés
// dont la valeur vaut "apple"
foreach($tab as $key=>$val){
//while ($fruit_name = current($array)) {
    if (count($tab)!=0){
    if ($key == key($array) ) {
        echo '<input type="checkbox" name="c" id="c" checked="checked">';
    }
    else echo '<input type="checkbox" name="c" id="c">';

    next($array);
    
}
}
//}


//   if(isset($_POST['valider'])){
//       if(empty($_POST['number']) && is_numeric($_POST['number'])<=0){
//             $error = "veuillez verifier le champs nombre de question par jeu";
//       }else {
    $NbreParPage = 5;
    $NbreTotal = count($questions);
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
    $indD = 
    $indF = 
    $limit = 'LIMIT'.($PageActuelle - 1)* $NbreParPage. ',' . $NbreParPage;
    $pagination = "";
    if($DernierPage != 1){
        if($PageActuelle > 1){
            $precedent = $PageActuelle - 1;
            $pagination .= '<a class="btnbtn" href="index1.php?p=liste_questions&page='.$precedent.'">Precedent</a> &nbsp;&nbsp;';
            for($i = $PageActuelle - $NbreDePageAvAp ; $i<$PageActuelle; $i++){
                if($i>0){
                    $pagination .= '<a href="index1.php?p=liste_questions&page='.$i.'">'.$i.'</a>&nbsp;';
                }
            }
        }
        $pagination .= '<span class="active">'.$PageActuelle.'</span>&nbsp;';
  
        for($i = $PageActuelle + 1; $i <= $DernierPage; $i++){
            $pagination .= '<a href="index1.php?p=liste_questions&page='.$i.'">'.$i.'</a>';
            if($i >= $PageActuelle + $NbreDePageAvAp){
            break;
            }
        }
        if($PageActuelle != $DernierPage){
            $suivant = $PageActuelle +1;
            $pagination .= '<a class="btn" href="index1.php?p=liste_questions&page='.$suivant.'">Suivant</a>&nbsp&nbsp';
        }
    }
//       }
//   }

?>





