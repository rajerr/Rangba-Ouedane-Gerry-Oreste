<!DOCTYPE html>

<html lang="en">
    <head >
             <title >PHP</title>
             <meta charset="utf-8">
             <link rel="stylesheet" type="" href="/css/style.css" />
             <link rel="stylesheet" type="" href="application1/css/style1.css" />
    </head>
    <body class="body">
            <div>
                <form action="" method="POST">
                    <h4>EXERCICE 1</h4><br><br>
                            <input placeholder="saisir un n "class="input" type="text" id="n" name="n"><br><br>
                            <input class="input" type="submit" value="calculer" name="calculer">
                </form>
            </div>
        </body>
<?php
    function nombrePremier($nombre){
        $c=0;
        $nbreP=false;
        for($i=2; $i<=$nombre/2; $i++){
            if($nombre%$i==0){
                $c++; 
            } 
        }
        if($c>=2){
            $nbreP=false;
        }else{
            $nbreP=true;
        }
        return $nbreP;
    }
    
    function Moyennetab($n,$m){
        $moyenne =$n/$m;

            return $moyenne;
    }
    

if(isset($_POST['calculer'])){
    $T['superieur']=array();
    $T['inferieur']=array();
    $m=Moyennetab($T1);
        if(is_numeric($_POST['n'])){
            if($_POST['n']<=10000){
                echo"entrer une valeur superieur à 10000";
            }
            else{
                $n = $_POST['n'];
                $T1= array();
                for($i=1;$i<=$n;$i++){
                    if(nombrePremier($i)) {
                        array_push($T1,$i);
                        
                    }    
                }
                $a=array_sum($T1);
                $m=Moyennetab($a,count($T1));
                echo"<br> <br>";
                echo" Le Tableau T1"."<br><br><br>";
                foreach($T1 as $tab1){
                    if($tab1<$m){
                        array_push($T['inferieur'],$tab1);
                    }else{
                        array_push($T['superieur'],$tab1);
                    }
                    echo "$tab1  ";
                }
                echo"<br> <br>";
                echo" Tableau inferieur"."<br><br>";
                foreach($T['inferieur'] as $inf){
                    echo "$inf ";
                }
                echo"  ";
                echo" <br><br><br>";
                echo" Tableau superieur"."<br><br>";
                foreach($T['superieur'] as $inf){
                    echo "$inf ";
                }
                
            }        
        } 
        else{
            echo"entrez une valeur supérieur à 10000 (dix milles)";
    }

}
    ?>

</html>