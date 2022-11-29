<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <style>   
    table {  
        border-collapse: collapse;  
    }  
        .inline{   
            display: inline-block;   
               
            margin: 20px 0px;   
        }   
         
        input, button{   
            height: 34px;   
        }  </style> 
<?php
    require 'mydbms.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viccek</title>
</head>
<body>
<table >  
    <thead>  
        <th>Keresés</tr>
    <tr>
    <form action="" method="$_GET">
        <th><input type="text" name="searchTitle" placeholder="Cím"></th>        
        <th><input type="text" name="searchJoke" placeholder="Vicc"></th>
        <th><input type="text" name="searchUser" placeholder="Feltöltő"></th>
        <th><button type="submit" name="kereses">Keresés</button></th>
    </form>
    </tr>
</table> 
<?php  
$searchTitle= "";
$searchJoke= "";
$searchUser= "";
if(isset($_GET["searchTitle"])){    
    $searchTitle= $_GET["searchTitle"];
    //echo $searchTitle;
}
if(isset($_GET["searchJoke"])){
    $searchJoke= $_GET["searchJoke"];
}
if(isset($_GET["searchUser"])){
    $searchUser= $_GET["searchUser"];
}
if(!isset($_SESSION['id'])){
require 'mydbms.php';
}

$con = connect('viccoldal', 'root', '');
$query= "SELECT posts.postDate as date, users.username as uploader, 
    posts.postTitle as title, posts.joke as joke, posts.postImage as image,
    posts.postType as type, posts.uploaderId as uploaderId, posts.postId as id
    from posts
    INNER JOIN
    users ON uploaderId = users.userId
    WHERE 
    posts.postTitle LIKE '%$searchTitle%' AND
    posts.joke LIKE '%$searchJoke%' AND
    users.username LIKE '%$searchUser%'"; 
    
//echo $query;
$result = mysqli_query($con , $query);
$results = mysqli_fetch_all($result);
foreach($result as $row){
?>
<table class="table table-bordered table-striped">
        <td><?php echo $row["uploader"] ?> </td>
        <?php if (isset($_SESSION['id'])){
            if ($_SESSION['role'] == 'mod' || $_SESSION['id'] == $row['uploaderId'] ) : ?>
            <td><form action="./postdelete.php" method="POST">
                <input type="hidden" name="postId" value="<?= $row["id"] ?>">
                <button type="submit">Töröl</button>
            </form></td>
    <?php endif; } ?>
        
    <tr> 
        <th><?php echo $row["title"]; ?> </th>
        <th><?php echo $row["date"]; ?> </th>
    <tr><td>  
        <?php
        if($row['type'] == 'joke'){
            echo $row["joke"];
        }
        else{
            $path = "jokes/".$row["uploader"]."/". $row["title"]."/". $row["image"];
            echo "<img src=$path height=400>";
        } 
        ?>
        </td>  
    </tr>
</table>
<?php

}
?>
