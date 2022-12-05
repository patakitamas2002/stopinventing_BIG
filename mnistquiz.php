<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .guessPart{
            width: 20%;
            height: 100%;
            margin: auto;
        }
        #numInput{
            width:50%;
        }
        button{
            width: 100px;
            height: 50px;
        }
        #feher{
            color:white;
        }
        #send{
            width:100%;
        }
    </style>
    <script>
    function input(e){
        var tbInput = document.getElementById("numInput");
        tbInput.value = e.value;
    }
    function random(){
        var tbInput = document.getElementById("numInput");
        var random = Math.floor(Math.random() * 9)+1;
        tbInput.value = random;
    }
    </script>
</head>
<body>
<?php
if(!isset($_SESSION['id'])){
    //require './mydbms.php';
    session_start();
}
    require 'menu.php';
?>
<?php

    require 'mydbms.php';

// // if(!isset($_SESSION['id'])){
// //     require './mydbms.php';
// // }

    if (isset($_GET['number'])) {
        $ertek = intval($_GET['number']);
        if ($ertek == $_SESSION['number']) {
            $_SESSION['helyes'] = $_SESSION['helyes'] + 1;
            $_SESSION['kerdesek'] = $_SESSION['kerdesek'] - 1;
            header("Location: mnistquiz.php");
        } else {
            $_SESSION['kerdesek'] = $_SESSION['kerdesek'] - 1;
            header("Location: mnistquiz.php");
        }
    
}

//echo $_SESSION['id'];


$random = rand(0, 20000);
$con = connect('mnist_stopinventing', 'root','');
$query = "SELECT filename,number,actualvalue FROM stat WHERE id = $random";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$_SESSION['Image'] = $row['filename'];
$_SESSION['number'] = substr($_SESSION['Image'], -6, 1);
if($_SESSION['kerdesek']<=0){
    $user = $_SESSION['username'];
    $helyes = $_SESSION['helyes'];
    /*$query = "INSERT INTO rangsor SET username = ' ".$_SESSION["username"]." ', score =' ".$helyes." ' ";*/
    if($_SESSION['id'] != ''){
        $query2 ="INSERT INTO rangsor(username,score) values('".$user."','".$helyes."')";
    }
    $result = mysqli_query($con,$query2);
    $_SESSION['kerdesek'] = 12;
    $_SESSION['helyes'] = 0;
    header("Location: index.php");
}
?>


<div class="guessPart">
<p id="feher">Maradt kérdések száma: <?php echo $_SESSION['kerdesek']?></p>
<p id="feher">Helyes válaszok száma: <?php echo $_SESSION['helyes']?></p>
<img src="./Images/<?php echo $_SESSION['Image']?>"/>
<form>

    <input type ="number" id="numInput" name="number" min="0" max="9" maxlength="1" required>
    <br>
    
    <button type="button" value ="1" onclick="input(this);">1</button>
    <button type="button" value ="2"onclick="input(this);">2</button>
    <button type="button" value ="3"onclick="input(this);">3</button>
    <button type="button" value ="4"onclick="input(this);">4</button>
    <button type="button" value ="5"onclick="input(this);">5</button>
    <button type="button" value ="6"onclick="input(this);">6</button>
    <button type="button" value ="7"onclick="input(this);">7</button>
    <button type="button" value="8"onclick="input(this);">8</button>
    <button type="button" value ="9"onclick="input(this);">9</button>
    <button type="button" onclick="document.getElementById('numInput').value=''">Clr</button>
    <button type="button" value ="0"onclick="input(this);">0</button>
    <button type="button" onclick="random();">Random</button>
    <br>
    <input id="send" type="submit" value="Küldés">
    </form>
</div>
</body>
</html>