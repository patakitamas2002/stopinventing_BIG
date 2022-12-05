<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <form action="../processors/register.php" method="POST" enctype="multipart/form-data">
        <h1>Regisztráció</h1>
        <p>Email*:</p> <input type="email" name="email" required placeholder="example@host.com"><br>
        <p>Felhasználónév*:</p> <input type="text" name="username" required placeholder="Username"><br>
        <p>Jelszó*:</p> <input type="password" name="password" placeholder="Password" required><br>
        <p>Profilkép feltöltése:</p> <input type="file" accept=".jpeg,.jpg,.png" name="pfp"><br>
        <input class="reg" type="submit" name="submit" value="Regisztrálok" />
    </form>
    
</body>
</html>
