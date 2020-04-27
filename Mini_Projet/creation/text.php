<?php
 $user=array();
 $user['profil']="joueur";
 $user['prenom']="joueur";
 $user['nom']="joueur";
 $user['login']="joueur";
 $user['password']="joueur";

 $js=file_get_contents('../json/users.json');
 $js=json_decode($js,true);
 $js[]=$user;
 $js=json_encode($js);
 var_dump($js);
 file_put_contents('../json/users.json',$js);

 
?>



<?php
 $liste="";
 $joueurs = array();
     $data= file_get_contents('../json/users.json');
     $users = json_decode($data, true);
    for($i=0; $i<= count($users); $i++){
        if($users[$i]['profil']=="joueur"){
            // $joueurs[]= DESC($users[$i]['score']);
                    $_SESSION['nom'] = $users[$i]['nom'];
                    $_SESSION['prenom'] = $users[$i]['prenom'];
                    $_SESSION['score'] = $users[$i]['score'];
                    // echo $_SESSION['nom'];
                    // echo"   ";
                    // echo $_SESSION['prenom'];
                    // echo"   ";
                    // echo $_SESSION['score'];
                    // echo"<br>";
    
        }
        $_SESSION['liste'] = $users[$i]['profil']=="joueur"; 
     }
?>  

<div class="content-liste-j">
                <div>
                    <h4 class="title">LISTE DES JOUEURS PAR SCORE</4>
                 </div>
                 <div>
                        <div class="border_content">   
                        <?php
                            if(isset($_SESSION[$liste])){
                                $NbreParPage = 15;
                                $NbreTotal = sizeof($_SESSION['$liste']);
                                $NbreDePage = ceil($NbreTotal/$NbreParPage);
                                $nbreMaxInt = 4;
                                if(isset($_GET['page']) && is_numeric($_GET['page'])){
                                    $PageActuelle = $_GET['page'];
                                }else{
                                    $PageActuelle = 1;
                                }
                                echo '<table style="width:100%">
                                <tr>
                                  <th><label class="label-title-nom" for="">Nom</label></th>
                                  <th><label class="label-title-prenom" for="">Prenom</label></th> 
                                  <th><label class="label-title-score" for="">Scores</label></th>
                                </tr> 
                                
                                <tr>' ;
                                for($i=($PageActuelle-1)*15; $i<$PageActuelle*15; $i++){
                                    for($j=$i; $j<=$i; $j++){
                                        if($j>=$NbreTotal){
                                        break;
                                        }
                                        echo' <td class="div-list-nom">'. $_SESSION['nom'].'</td>';
                                        echo' <td class="div-list-prenom">'.$_SESSION['prenom'].'</td>';
                                        echo' <td class="div-list-score">'.$_SESSION['score'].'</td>';
                                        echo'</tr>;';
                                    }     
                            }
                            echo'</table>';
                            for($i=1; $i <=$NbreDePage; $i++) { 
                                echo ' <a href="..page/listejoueur.php?page='.$i.'">'.$i.'</a> ';
                            }
                        }
                                
                        ?>
                        </div>
                </div>
                <a href="#"><button class="btn-svt"  type="button">SUIVANT</button> </a>
            </div>