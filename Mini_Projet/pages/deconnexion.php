<?php 


  session_start();
  // Réinitialisation du tableau de session
  // On le vide intégralement

  if(isset($_POST['deconnexion'])){
    //echo " <a onclick=\"return confirm('Vous souhaitez quitter votre session ?');\" href='deconnexion.php'> Me Deconnecter</a>";
  $_SESSION = array();
    // Destruction du tableau de session
    unset($_SESSION);
  // Destruction de la session
  session_destroy();
  header('Location:/index.php');
  }
 ?>