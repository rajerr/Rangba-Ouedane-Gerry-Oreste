<div class="div-score-top">
<?php
     $data= file_get_contents('../json/users.json');
     $users = json_decode($data, true);
     $joueurs=[];
         foreach($users as $key=>$value){
             if($value['profil']==="joueur"){
                 $joueurs[]=$value;
             }
         }
    $colonne=array_column($joueurs, 'score');
    array_multisort($colonne, SORT_DESC, $joueurs);
            for($i=0; $i < 5; $i++){
                echo "<label class='lab'for=''>".ucfirst($joueurs[$i]['prenom'])."</label>";
                echo"&nbsp;&nbsp";
                echo "<label class='lab' for=''>".strtoupper($joueurs[$i]['nom'])."</label>";
                echo"&nbsp;&nbsp";
                echo "<label class='s' for=''>".$joueurs[$i]['score'] .'pts'."</label>";
                echo"<br>";
            }

?>
</div>