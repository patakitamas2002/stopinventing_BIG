<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["username"]);
    unset($_SESSION["role"]);
    header('Location: index.php');
?>