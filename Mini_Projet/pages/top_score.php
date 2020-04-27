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
                echo strtoupper($joueurs[$i]['nom']);
                    echo"&nbsp;&nbsp";
                echo ucfirst($joueurs[$i]['prenom']);
                    echo"&nbsp;&nbsp";
                echo $joueurs[$i]['score'] .pts;
                echo"<br>";
            }

?>
</div>