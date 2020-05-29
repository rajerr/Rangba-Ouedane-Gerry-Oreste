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
            <img class="avatar-img-j"  alt="" id="avatar" value="<?php if(isset($_POST['fichier'])){echo $_POST['fichier'];}?>">
            <label class="div-avatar-joueur" for="">Avatar du joueur</label>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" id="form-joueur">
            <label class="div-label-joueur" for="">Prenom</label><br>
            <input class="div-input-joueur" type="text" name="prenom" error="error-1" placeholder=" Entrer votre prenom" 
            value="<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];}?>"><br>
            <div class="erreur" id="error-1"></div>

            <label class="div-label-joueur" for="">Nom</label><br>
            <input class="div-input-joueur" type="text" name="nom" error="error-2" placeholder="Entrer votre nom"
            value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];}?>"><br>
            <div class="erreur" id="error-2"></div>

            <label class="div-label-joueur" for="">Login</label><br>
            <input class="div-input-joueur" type="text" name="login" error="error-3" placeholder="saisir un Login"
            value="<?php if(isset($_POST['login'])){echo $_POST['login'];}?>"><br>
            <div class="erreur" id="error-3"> </div>

            <label class="div-label-joueur" for="">Mot de passe</label><br>
            <input class="div-input-joueur" type="password" name="password" error="error-4" placeholder="saisir votre password"
            value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>"><br>
            <div class="erreur" id="error-4"> </div>

            <label class="div-label-joueur" for="">Confirmer mot de passe</label><br>
            <input class="div-input-joueur" type="password" name="c_password" error="error-5" placeholder=" veuillez Confirmer password"
            value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>"><br>
            <div class="erreur" id="error-5"> </div>
            
            <label class="div-label-joueur" for="">Avatar</label>
            <input type="file" name="fichier" id="" error="error-6" accept="image/" onchange="loadFile(event)"
            value="<?php if(isset($_POST['fichier'])){echo $_POST['fichier'];}?>"><br>
            <div class="erreur" id="error-6"> </div>
            <div class="erreur">
                <?php if(isset($error)){ echo $error; }?>
             </div>
            <input class="div-btn-creer-user" type="submit" name="creer" value="Créer Compte">
        </form>
    </div>
</body>
</html>
<script  type="text/javascript" src="..js/validerjoueur.js"></script>
<script>
var loadFile = function(event) {
    var avatar = document.getElementById('avatar');
    avatar.src = URL.createObjectURL(event.target.files[0]);
    avatar.onload = function() {
      URL.revokeObjectURL(avatar.src) 
    }
  };
</script>
<?php
if(isset($_POST["creer"])) {
    $error="";
    $file_name = $_FILES['fichier']['name'];

    if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['login']) || 
    empty($_POST['password']) || empty($_POST['c_password']) || empty($_FILES['fichier'])){
        $error=" veuillez remplir tous les champs";
    }else{
        $data=file_get_contents('../json/users.json');
        $js=json_decode($data,true);           
        
        foreach($js as $value){
            if($value[$i]['login']== $_POST['login']){
                 $error="Ce compte existe déja, veuillez changer le login";
            break;
            }else{
                if($_POST['password']!= $_POST['c_password']){
                    $error="les mots de passe ne sont pas identiques";
                break;
                }else{
                    $user=array();
                    $user['profil']="joueur";
                    $user['prenom']=$_POST['prenom'];
                    $user['nom']=$_POST['nom'];
                    $user['login']=$_POST['login'];
                    $user['password']=$_POST['password'];
                    $user['score']=0;
                    $user['photo']=$file_name;
                   
        
                if(isset($_FILES['fichier'])){
                    $file_name = $_FILES['fichier']['name'];
                    $file_extension = strrchr($file_name, ".");
                    $fichier = basename($_FILES['fichier']['name']);
                    $file_dest = '../Images/avatar/';
                    $extensions_auto = array('.jpg', '.JPG', '.png', '.PNG', '.JPEG', '.JPEG');
                    if(in_array($file_extension, $extensions_auto)){
                        move_uploaded_file($_FILES['fichier']['tmp_name'], $file_dest . $fichier);
                } 
            }
            $js[]=$user;
            $js=json_encode($js);
            file_put_contents('../json/users.json',$js);
            header('location:../index.php');
                }
            }
        
        }
    }
}
?>