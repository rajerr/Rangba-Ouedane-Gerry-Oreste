<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
        <form action="" methode="POST" style="margin-left:35%">
            <label style="margin-left:5%">Combien de Mots</label><br><br>
            <input  style=""type="text" name="num" placeholder="donner un nombre" value="<?php if(isset($_POST['num'])){echo $_POST['num'];  } ?>"><br><br>
            <button style="background-color:skyblue" name="valider" value="valider" type="submit">Valider</button> 
            <button style="background-color:red" name="annuler" value="annulerr" type="button">Annuler</button> 
        </form>
<?php
if(isset($_POST['valider'])){
    $num=$_POST['num'];
        if(!(is_numeric($_POST['num']) || ($_POST['num'])<=0) || empty($_POST['num'])){
            echo "veuillez saisir un entier positif";
    }else{
    //     for($i = 1; $i <=$num ; $i++){
    //         $strnote = "note" . strval($i+1);
    //         echo "<input type=\"text\" pattern=\"[0-9]+\"
    //                 value=\"" . $_POST[$strnote] . "\"
    //                 placeholder=\"" .($i+1). "\"
    //                 name=\"" .$strnote. "\"
    //                 id=\"".$strnote."\" >";
    //         $notes[$i] = $_POST[$strnote];
    //   }

    }
}    
?>
    
</body>
</html>