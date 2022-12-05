<?php
    session_start();
    require "../mydbms.php";
    $con = connect('mnist_stopinventing', 'root', '');
    $userId = $_SESSION["id"];
    $query = "UPDATE users SET role ='".$_POST['newRole']."' WHERE userId=".$_POST['userId'];
    $result = mysqli_query($con, $query) or die ("Nem sikerült ".$query);
    header('Location: ../index.php');
?>