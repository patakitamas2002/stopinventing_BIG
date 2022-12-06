<!DOCTYPE html>
<html lang="hu">
<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <style>   
        table
        {  
            border-collapse: collapse;  
        }  
        .inline
        {   
            display: inline-block;   
                
            margin: 20px 0px;   
        }   
            
        input, button
        {   
            height: 34px;   
        }
    </style>
<link rel="manifest" href="manifest.webmanifest"/>
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
    <div>
        <p>Szeretné mobilon is használni az alkalmazást?
            Telepítse az alábbi gombbal a készülékére!
            <button id="enable">Telepítés engedélyezése</button>
        </p>
    </div>

    <button id="install">Alkalmazás telepítése</button>
    <div class="footer">
        ©2022 Eszterházy Károly Katolikus Egyetem. Minden jog fenntartva.
    </div>
    <script src="script.js"></script>
</body>
</html>