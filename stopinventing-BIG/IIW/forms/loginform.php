<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <style>   
    
    </style> 
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="../processors/login.php" method="post">
        <p>Felhasználónév:</p>
        <input class="text" type="text" name="username">
        <br>
        <p>Jelszó:</p>
        <input class="text" type="password" name="password">
        <br><br>
        <input class="btn" type="submit" value="Bejelentkezés" name="login">
        <a class="nono" href="../index.php?page=0">Jaj, mégse szeretnék bejelentkezni</a>
        <button><a href ="regform.php">Regisztráció</a></button>
    </form>
    
</body>
</html>
