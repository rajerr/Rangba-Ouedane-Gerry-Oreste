<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css<?php echo "?".rand(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <title>Créer joueur</title>
</head>
<header>
    <div>
        <img class="img-header" src="../Images/logo-QuizzSA.png">
        <h3 class="label-header">Le plaisir de jouer</h3>
    </div>   
</header>
<body>
    <div class="div-nouveau-joueur">
        <div class="div-entete-joueur">
            <label class="div-h-joueur">S'INSCRIRE</label><br>
            <label class="div-label-joueur" >Pour tester votre niveau de culture Générale</label>
        </div>
        <div class="div-file-j">
            <img class="avatar-img-j" src="" alt="">
            <label class="div-avatar-joueur" for="">Avatar du joueur</label>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" id="form-joueur">
            <label class="div-label-joueur" for="">Prenom</label><br>
            <input class="div-input-joueur" type="text" name="prenom" error="error-1" placeholder=" Entrer votre prenom"><br>
            <div class="erreur" id="error-1"> </div>
            <label class="div-label-joueur" for="">Nom</label><br>
            <input class="div-input-joueur" type="text" name="nom" error="error-2" placeholder="Entrer votre nom"><br>
            <div class="erreur" id="error-2"> </div>
            <label class="div-label-joueur" for="">Login</label><br>
            <input class="div-input-joueur" type="text" name="login" error="error-3" placeholder="saisir un Login"><br>
            <div class="erreur" id="error-3"> </div>
            <label class="div-label-joueur" for="">Mot de passe</label><br>
            <input class="div-input-joueur" type="password" name="password" error="error-4" placeholder="saisir votre password"><br>
            <div class="erreur" id="error-4"> </div>
            <label class="div-label-joueur" for="">Confirmer mot de passe</label><br>
            <input class="div-input-joueur" type="password" name="c_password" error="error-5" placeholder=" veuillez Confirmer password"><br>
            <div class="erreur" id="error-5"> </div>
            <label class="div-label-joueur" for="">Avatar</label>
            <input type="file" name="file" error="error-6"><br>
            <div class="erreur" id="error-6"> </div>
            <div class="erreur"><?php if(isset($error)){ echo $error; }?> </div>
            <input class="div-btn-creer-user" type="submit" name="creer" value="Créer Compte">
        </form>
    </div>
</body>
</html>
<script type="text/javascript" src="js/quizzcreation.js"></script>

<?php

$file_name = $_FILES['photo']['name'];
$file_extension = strchr($file_name, ".");

$file_tmp_name = $_FILES['photo']['tmp_name'];
$file_destination = '../Images/avatar/'.$file_name;
$extensions_valide  = array('.jpg','.JPG','.jpeg','.JPEG','.png','.PNG' );

if(in_array(!$file_extension, $extensions_valide)){
    $error = "Impossible de charger seuls les fichiers au format jpg et png sont acceptés";
}else{
    if(move_uploaded_file($file_tmp_name, $file_destination)){
        $error="le fichier est chargé";
    }else{
        $error="une erreur est survenu";
    }
}

if(isset($_POST['creer'])){
    $user = array();

    $user['prenom'] = $_POST['prenom'];
    $user['nom'] = $_POST['nom'];
    $user['login'] = $_POST['login'];
    $user['password'] = $_POST['password'];
    $user['profil'] = "joueur";
    $user['photo'] = $_POST['file'];

    $js = file_get_contents('../json/users.json');
    $js = json_decode($js, true);
    $js[]= $user;
    $js = json_encode($js);
    file_put_contents('../json/users.json', $js);

}

?>