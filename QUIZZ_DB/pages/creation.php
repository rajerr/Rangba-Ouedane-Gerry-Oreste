
<div class="row bg-secondaire">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xlg-10 border border-info float-right  mx-auto d-block mt-1 content">
        <form action="" method="post" class="form" id="formAdmin" enctype="multipart/form-data">
        <h4 class="mx-auto d-block section-heading text-center border border-info text-info">Creer Admin</h4>
            <div class="col-7">
                <div class="form-group ">
                    <label class="text-info" for="">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
                    <small class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label class="text-info" for="">Prenom</label>
                    <input type="text" class="form-control" name="prenom_ad" id="prenom" placeholder="Votre prenom">
                    <small class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label class="text-info" class="text-info" for="">Login</label>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Votre login">
                    <small class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label class="text-info" for="">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Votre password">
                    <small class="text-danger"></small>
                </div>
                <div class="form-group">
                    <label class="text-info" for="">Confirmer</label>
                    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="confirmez password">
                    <small class="text-danger"></small>
                </div>
            </div>
            <div class="col-4 float-right profil">
            <div class="col-12 mx-auto d-block">
                <img class="rounded-circle  col-12 mx-auto d-block " src="../assets/Images/avatar/avatar.jpg" id="avatar"  alt="">
            </div>
                <div class="form-group">
                    <h3 class="section-heading text-center ml-2 mt-2 text-info" for="">Avatar</h3>
                    <input class="mt-3 text-info" type="file" class="form-control-file" accept="image/" onchange="loadFile(event)" name="photo" id="photo">
                    <small class="text-danger"></small>
                    <div class="row">   
                        <button name="valider" id="valider" class="btn btn-info border border-light mt-5 ml-5" type="submit">Enregistrer</button>
                    </div>
                </div>
            </div>
            <div class="tex-info"><?php if(isset($_POST['msg'])){echo $msg;}?></div>
        </form>
    </div>
</div>
<script rel="javascript" type="text/javascript" src="../assets/js/scriptSaveAdmin.js"></script>

<?php
if(isset($_FILES['photo'])){
    $filename = $_FILES['photo']['name'];
    $file_extension = strrchr($filename, ".");
    $photo = basename($_FILES['photo']['name']);
    $file_dest = '../assets/Images/avatar/';
    $extensions_auto = array('.jpg', '.JPG', '.png', '.PNG', '.JPEG', '.JPEG');
    if(in_array($file_extension, $extensions_auto)){
        move_uploaded_file($_FILES['photo']['tmp_name'], $file_dest . $photo);
    }
}
?>