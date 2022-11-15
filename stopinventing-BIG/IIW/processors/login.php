<?php
    require "../mydbms.php";

    $con = connect('viccoldal', 'root', '');
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users
        WHERE username='$username' AND password='$password'";
    $results=mysqli_query($con, $query) or die ("Nem sikerült ".$query);
    $loggedInUser=mysqli_fetch_row($results);
    //var_dump($data);
    if($loggedInUser == NULL)
    {
        echo "Helytelen felhasználónév és jelszó páros, kérem próbálja újra";
        echo "Vissza a bejelentkezéshez <a href='../forms/loginform.php'>itt</a>";
    }
    else {
        session_start();
        $_SESSION['id']=$loggedInUser[0];
        $_SESSION['username']=$loggedInUser[1];
        $_SESSION['role']=$loggedInUser[4];
        header("Location: ../index.php");
    }
        
?>