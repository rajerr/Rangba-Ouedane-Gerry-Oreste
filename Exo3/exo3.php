<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
        <form action="" method="post" style="margin-left:35%">
            <label class="label" style="">Combien de Mots</label><br><br>
            <input class=""type="text" name="num" placeholder="donner un num" value="<?php if((isset($_POST['num'])) && 
            ($_POST['num']>0)){ echo $_POST['num'];} ?>"/><br><br>
            <input class="btn_valider" type="submit" value="envoyer" name="valider">
            <input class="btn_annuler" type="reset" value="annuler" name="annuler"><br><br>
        
<?php
if(isset($_POST['valider'])){
    $num = (int)$_POST["num"];
        if($num<=0){
            echo '<div style="color: #f9150e; margin-top: 2%; font-size: 20px">veuillez saisir un entier positif</div>';
            echo "<br>";
        }else{
            for($i = 1; $i <=$num ; $i++){
                $libelle = "Mot ".$i;
                echo "<label>$libelle</label><br>";
                echo '<input type="text" name="m'.$i.'"  value="';
                if(isset($_POST["mot$i"])){
                    echo $_POST["mot$i"];
                }
                echo  ' "/>';
                echo "<br><br>";
            }
        ?>
           <button class="btn_resultat" name="resultat" id="resultat">Resultat</button>
         </form>
        <?php
                $error = '';
                $num=  $_POST['num'];
                $nbre_mot = 0;
                for ($i=1; $i<=$nombre;$i++){
                    if(isset($_POST['resultat'])){
                        if(isset($_POST["m$i"])){
                            if(empty($_POST["m$i"])){
                                $error= 'Donner un mot';
                            }
                            else {
                                $m = $_POST["m$i"];
                                if(preg_match('#[^a-zA-Z^-]#', $m)){
                                    $error= 'Donner un mot';
                                }
                                else{
                                    if(preg_match("#M#i", $m)) {
                                        $nbre_mot= $nbre_mot + 1;
                                    }
                                }
                            }
                        }
                    }
                }if(isset($nbre_mot) && $nbre_mot!=0){
                     echo "<span class='info'>Vous avez saisi $length Mot(s) dont $nbr_mot avec la lettre M</span>";
                }
?>
                 
<?php
    } 
} 
// fonctions
function toUpperString(string $string){
    $length = getStringlength($string);
    $result = "";
    for ($i=0; $i < $length ; $i++) { 
        $result .= toUpper($string[$i]);
    }
    return $result;
}
function getStringlength(string $string){
    $j = 0;
    for ($i=0; isset($string[$i]) ; $i++) { 
        $j++;
    }
    return $j;
}
function getLength($array){
    if(gettype($array) === "array"){
        return getArrayLength($array);
    }
    elseif (gettype($array) === "string") {
        return getStringlength($array);
    }
}
function getArrayLength(array $array){
    $i = 0;
    foreach ($array as $value) {
        $i++;
    }
    return $i;
}
function toUpper($char){
    if(isLetter($char)){
        $alphabet = [
            'a' => 'A', 'b' => 'B', 'c' => 'C', 'd' => 'D', 'e' => 'E',
            'f' => 'F', 'g' => 'G', 'h' => 'H', 'i' => 'I', 'j' => 'J',
            'k' => 'K', 'l' => 'L', 'm' => 'M', 'n' => 'N', 'o' => 'O',
            'p' => 'P', 'q' => 'Q', 'r' => 'R', 's' => 'S', 't' => 'T', 
            'u' => 'U', 'v' => 'V', 'w' => 'W', 'x' => 'X', 'y' => 'Y',
            'z' => 'Z'
        ];
        foreach ($alphabet as $lowerCase => $upperCase) {
            if($lowerCase == $char){
                $char = $upperCase;
                return $char;
            }
        }
    }
    return $char;
}   ?>
</body>
</html>
<style>
    .btn_valider{
        background-color: skyblue; 
        height: 35px;
        width:12%;
        color:white;
        border-radius:10px;
    }
    .btn_annuler{
        margin-left:3%; 
        background-color: red; 
        height: 35px; 
        color:white;
        width:12%;
        border-radius:10px;
    }
    .btn_resultat{
        margin-left:8%; 
        background-color: green; 
        height: 35px; 
        width:12%;
        color:white;
        border-radius:10px;
    }
    .label{
        margin-left:5%
        
    }
    .info{
        font-size: 30px; 
        background-color: grey; 
        margin-top: 3%; 
        height: 70px;
    }
</style>
