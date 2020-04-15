<?php
 session_start();
 require("connexion.php")
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css<?php echo "?".rand(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <title>connexion</title>
</head>
<header>
<?php
require_once('pages/connexion.php');
?>
    <div>
        <img class="img-header" src="Images/logo-QuizzSA.png">
        <h3 class="label-header">Le plaisir de jouer</h3>
    </div>   
</header>
<body>
        
</body>
</html>