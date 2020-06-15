<?php
require_once "../db/connexion.php";

global $db;
$offset = $_POST['offset'];
$limit = $_POST['limit'];

$sql ="
        SELECT * 
        FROM users
        WHERE users.profil = 'joueur' ORDER BY score DESC
        LIMIT {$limit} 
        OFFSET {$offset}
";
$req = $db->query($sql);
$result = $req->fetchAll(2);

echo json_encode($result);

?>