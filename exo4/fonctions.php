<?php
function est_phrase($phrase){
    if(preg_match_all("#^[A-Z].*[\.?!]$#", $phrase)){
        return $phrase;
    } 
        return false;
}
//renvoie la longueur d'une chaine
function size_t($chaine){ 
    for($i=0; isset($chaine[$i]); $i++);
    return $i;
}
//supression espace unitile
function del_espace($phrase){
    //trim permet de supprimer les espaces en debut et fin de chaine
    // /\s\s+/ sil ya deux ou plusieurs espace il remplace par ' ' une espace
    $netoyer = preg_replace('/\s\s+/', ' ' ,trim($phrase));
    return $netoyer;
}
function decouper_text($chaine){
   $ps= preg_split("#(?<=[.?!])\s*(?=[a-z])#i", $chaine);
    //la tu as les phrases decouper
   foreach ($ps as $p) {
      $p = del_espace($p);
      if (est_phrase($p)) {
          return $p;
      }else{
        echo " phrase non valide : ". $p . " ";
      }
   }
   
}
//var_dump(decouper_text('Jerry est un pro. vubkhn.'));

?>


