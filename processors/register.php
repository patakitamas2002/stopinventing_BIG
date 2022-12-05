<?php
    require '../mydbms.php';

    if(isset($_POST['username']) &&
        isset($_POST['password']) &&
        isset($_POST["email"])) {

        /*echo $_POST['username'];
        echo $_POST['password'];
        echo $_POST['perms'];*/

        $con = connect('mnist_stopinventing', 'root', '');
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $email = $_POST['email'];
        //$pfp = $_POST['pfp'];
        $checkName="SELECT COUNT(*) FROM `users` WHERE `username` = '$username' OR `email` = '$email'";
        $check = mysqli_query($con, $checkName);
        $result = mysqli_fetch_row($check);
        if($result[0] > 0) {
            echo "Már létező felhasználónév vagy email!<br/>";
            echo "<a href='../forms/regform.php'>Vissza a regisztrációhoz</a>";
            
        }

        else{
            
        
            
            if(!file_exists('../imgs/'.$username)){
                mkdir("../imgs/".$username, 0777, true); 
            }
            $fileNev = trim($_FILES["pfp"]["name"]);
            //echo $fileNev;
            $utvonal = "../imgs/".$username."/".$fileNev;
            //echo $utvonal;
            move_uploaded_file($_FILES["pfp"]["tmp_name"], $utvonal);
            $query =  'INSERT INTO users(username, password, email, pfp,role)
            VALUES("'.$username.'", "'.$password.'", "'.$email.'", "'.$fileNev.'",'"user"')';

            $results = mysqli_query($con, $query)  or die ("Nem sikerült ".$query);
            echo "Sikeres regisztráció!";
            echo "<a href='../forms/loginform.php'>Tovább a bejelentkezéshez</a>";
            }
        }
