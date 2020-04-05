<?php
include('exo4/fonctions.php');
?>
<DOCTYPE html>
<html lang="en">
    <head>
            <title >PHP</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type="" href="/css/style.css" />
    </head>
    <body class="body">
                <h4>Exercice 4</h4>
                <form method="post">
                    <TEXTAREA name="P" rows=10 COLS=40 class="input" type="text" id="P"  value="<?php if(isset($_POST['P'])) { echo $_POST['P'];}?>"></TEXTAREA><br><br>
                    <input type="submit" value="Corriger le text" name="afficher">
                </form>        
<?php

    if(isset($_POST['afficher'])){
        if (empty($_POST['P'])) {
            echo "Saisie d'un text obligatoire";
        }else{
            $parag=$_POST['P']; 
            $phrases= ucfirst(del_espace($parag));
            ?>
              <h4> Text corrigé</h4>
            <textarea rows=10 COLS=40 style="text-align: left" name="text"><?=decouper_text($phrases);?></textarea>
    <?php }}?>            
</body>
</html>