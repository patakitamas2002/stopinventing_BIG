<?php
    session_start();
    require "../mydbms.php";
    $con = connect('viccoldal', 'root', '');
    $userId = $_SESSION["id"];
    $query = "UPDATE users SET pfp ='' WHERE userId=$userId";
    $result = mysqli_query($con, $query) or die ("Nem sikerült ".$query);
    header('Location: ../index.php');
?>