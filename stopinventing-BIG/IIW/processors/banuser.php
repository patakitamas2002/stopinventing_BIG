<?php

use LDAP\Result;

    require '../mydbms.php';
    $con = connect('viccoldal','root','');
    $query="DELETE FROM users WHERE userId=".$_POST['userId'];
    $query2="DELETE FROM posts WHERE uploaderId=".$_POST['userId'];
    $result2 = $result = mysqli_query($con, $query2) or die ("Nem sikerült ".$query2);
    $result = mysqli_query($con, $query) or die ("Nem sikerült ".$query);
    header('Location: ../index.php');
?>