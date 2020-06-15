<?php
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    unset($_SESSION['statut']);
    session_destroy();
    header("location: ../index.php")
?>