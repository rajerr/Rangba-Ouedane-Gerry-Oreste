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
            <input class=""type="text" name="num" placeholder="donner un nombre" /><br><br>
            <input class="btn_valider" type="submit" value="envoyer" name="valider">
            <input class="btn_annuler" type="reset" value="annuler" name="annuler"><br><br>

<?php
if(isset($_POST['valider'])){
    $num = (int)$_POST["num"];
        if($num<=0){
            echo "veuillez saisir un entier positif";
    }else{
        for($i = 1; $i <=$num ; $i++){
            $strnote = "Mot ".$i;
            echo "<label>$strnote</label><br>";
            echo '<input type="text" name="m[]"/>';
            echo "<br><br>";
      }
    }
?>
     <button class="btn_resultat" name="resultat" id="resultat">Resultat</button>
<?php

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
}
} if(isset($_POST["resultat"])){
    $nbr_mot = 0;
    $length = getLength($_POST['m']);
    for ($i=0; $i < $length; $i++) { 
        $string = toUpperString($_POST["m"][$i]);
        if(isIn($string,"M")>=0){
            $nbr_mot++;
        }
    }
    echo "Vous avez saisi $length Mot(s) dont <span>$nbr_mot avec la lettre M</span>";
}    
?>
 </form>

    
</body>
</html>
<style>
    .btn_valider{
        background-color: skyblue; 
        height: 35px;
        width:12%;
        color:white;
    }
    .btn_annuler{
        margin-left:3%; 
        background-color: red; 
        height: 35px; 
        color:white;
        width:12%;
    }
    .btn_resultat{
        margin-left:8%; 
        background-color: green; 
        height: 35px; 
        width:12%;
        color:white;
    }
    .label{
        margin-left:5%
        
    }
    .input{

    }
</style>