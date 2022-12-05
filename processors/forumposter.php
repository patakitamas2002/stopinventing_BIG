<?php
session_start();
    require '../mydbms.php';
    if(isset($_POST["posttext"])){
        $text = $_POST["posttext"];
        $con = connect('mnist_stopinventing', 'root', '');
        $userId = $_SESSION['id'];
        $uploaded = "false";
        $kuldes_datum = date("Y-m-d H:i:s");
        $post_type = "";
        $query = "INSERT INTO posts(postTitle,joke,postImage,postLikes,postDate,uploaderId) VALUES ('$text','',0,$kuldes_datum,'$userId')"; 
        $results = mysqli_query($con, $query)  or die ("Nem sikerült ".$query);
        header('Location: ../index.php');
    
    }
?>