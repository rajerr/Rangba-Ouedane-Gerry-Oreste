<?php
 $db="";
 try
 {
      //$db =new PDO( 'mysql:host=mysql-oreste.alwaysdata.net;dbname=oreste_quizz;charset=utf8','oreste','R@jerr2013');
      $db =new PDO( 'mysql:host=localhost;dbname=quizz;charset=utf8','root');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     die('erreur de la connexion à la base de données');
 }



?>