<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css"/>
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
<head>
    <meta charset="UTF-8">
    <title>Főoldal</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <div class="menu">
        
        <?php require "menu.php"; ?>
    </div>
    <div class="content">
        <?php require "content.php"; ?>
    </div>
<div class="footer">
asd
</div>
</body>
</html>