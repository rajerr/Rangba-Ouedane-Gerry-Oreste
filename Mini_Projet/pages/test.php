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
    $data= file_get_contents('../json/users.json');
    $users = json_decode($data, true);
        $NbreParPage = 15;
        $NbreTotal = count($users['joueur']);
        $NbreDePage = ceil($NbreTotal/$NbreParPage);
        $Pages=0;
        if(isset($_GET['page']) && is_numeric($_GET['page'])){
            $PageActuelle = $_GET['page'];
        }else{
            $PageActuelle = 1;
        }
        if($PageActuelle<1){
            $PageActuelle = 1;
        }elseif($PageActuelle > $NbreDePage){
            $PageActuelle = $DernierPage;
        }

        if($Pages < $NbreDePage){
            $nbf=($Pages*$NbreParPage);
        }else{
            $nbf=$NbreTotal;
        }
        $colonne=array_column($joueurs, 'score');
        array_multisort($colonne, SORT_DESC, $joueurs);
            for($i=$Pages*$NbreParPage; $i< $nbf; $i++){             
?>
    <table> 
        <tbody>
            <tr>
                <td><?= ucfirst($users['joueur'][$i]['prenom']) ?></td>
                <td><?= strtoupper($users['joueur'][$i]['nom']) ?></td>
                <td><?= $users['joueur'][$i]['score'] ?></td>
            </tr>
<?php
            }
            $Pages++;
?>
        </tbody>
    </table>
    </div>
</div>
<?php 
if($Pages<=$NbreDePage){
?>
<div class="btn">
<a href="inde1.php?p=../pages/index1.php?p=liste_joueurs&Pages=<?=$Pages?>">
<button type="submit" name="" id="">Suivant</button>
</a>
</div>
<?php
}
?>
</div>
