<?php 


  session_start();
  // Réinitialisation du tableau de session
  // On le vide intégralement

  if(isset($_POST['deconnexion'])){
    //echo " <a onclick=\"return confirm('Vous souhaitez quitter votre session ?');\" href='deconnexion.php'> Me Deconnecter</a>";
  $_SESSION = array();
  // Destruction de la session
  session_destroy();
  // Destruction du tableau de session
  unset($_SESSION);
  header('Location:index.php');
  }
 ?>