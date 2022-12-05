<!DOCTYPE html>
<html lang="hu">
<head>
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
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="home.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>Főoldal</title>
</head>
<body>
    <?php
        //session_destroy();
        session_start();
        $_SESSION['kerdesek'] = 12;
        $_SESSION['helyes'] = 0;
    ?>
    <div class="menu">
        
        <?php require "menu.php"; ?>
    </div>
<div class="footer">
asd
</div>
</body>
</html>