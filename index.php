<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    
    <link href="//db.onlinewebfonts.com/c/8d223b3ad8d4819e9dcf22757e4cc2c4?family=Arial" rel="stylesheet" type="text/css"/> 
    <link href="//db.onlinewebfonts.com/c/05289e866fe7e1e99d27a7a31f8d3b66?family=Trattatello" rel="stylesheet" type="text/css"/> 
    <title>ODC</title>

</head>
<body class="body">
    
    <nav class="menu">
            <a class="option" style="margin-left:20%" href="#"><a href="index.php">ACCUEIL</a>
            <a class="option" href="#"><a href="index.php?n=exo1">EXERCICE 1</a>
            <a class="option" href="#"><a href="index.php?n=exo2">EXERCICE 2</a>
            <a class="option" href="#"><a href="index.php?n=exo3">EXERCICE 3</a>
            <a class="option" href="#"><a href="index.php?n=exo4">EXERCICE 4</a>
            <a class="option" href="#"><a href="index.php?n=exo5">EXERCICE 5</a>

    </nav>
    <?php
        if(isset($_GET['n'])){
            $m=$_GET['n'];
            if($m=="exo1"){
                include("Exoun/exo1.php");
            }elseif($m=="exo2"){
                include("Exodeux/exo2.php");
            }elseif($m=="exo3"){
                include("Exo3/exo3.php");
            }
        }
    ?>
</body>
</html>