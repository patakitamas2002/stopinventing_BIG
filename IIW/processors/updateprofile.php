<?php
session_start();
require "../mydbms.php";
$con = connect('mnist_stopinventing', 'root', '');
$currentName = $_SESSION['username'];
$ujFelhasznalonev = $_POST['username'];
$ujJelszo = md5($_POST['password']);
$ujJelszoIsmet = md5($_POST['passwordAgain']);
$userId = $_SESSION['id'];
$query = null;
//var_dump($_FILES["pfp"]["tmp_name"]);

if (isset($_POST['username'])) {
    rename('../imgs/' . $currentName, '../imgs/' . $ujFelhasznalonev);
    $fileNev = trim($_FILES["pfp"]["name"]);
    //echo $fileNev;
    $utvonal = "../imgs/" . $ujFelhasznalonev . "/" . $fileNev;
    if (!empty($_POST['password']) && !empty($_POST['passwordAgain']) && $ujJelszo == $ujJelszoIsmet && move_uploaded_file($_FILES["pfp"]["tmp_name"], $utvonal)) {

        if (!file_exists('../imgs/' . $currentName)) {
            mkdir("../imgs/" . $ujFelhasznalonev, 0777, true);
        }        
        //echo move_uploaded_file($_FILES["pfp"]["tmp_name"], $utvonal);
        //move_uploaded_file($_FILES["pfp"]["tmp_name"], $utvonal);
        $query = "UPDATE users
        SET username='$ujFelhasznalonev', password='$ujJelszo', pfp='$fileNev'
        WHERE userId=$userId";
    } elseif (move_uploaded_file($_FILES["pfp"]["tmp_name"], $utvonal)) {        
        if (!file_exists('../imgs/' . $currentName)) {
            mkdir("../imgs/" . $ujFelhasznalonev, 0777, true);
        }
        
        $query = "UPDATE users
            SET username='$ujFelhasznalonev', pfp='$fileNev'
            WHERE userId=$userId";

    } elseif (!empty($_POST['password']) && !empty($_POST['passwordAgain']) && $ujJelszo == $ujJelszoIsmet) {
        $query = "UPDATE users
            SET username='$ujFelhasznalonev',password='$ujJelszo'
            WHERE userId=$userId";
    }
    elseif($ujJelszo != $ujJelszoIsmet){
        echo 'A két jelszó nem egyezik <a href="../index.php?page=-10">vissza</a><br>';
    }
    else {
        $query = "UPDATE users
        SET username='$ujFelhasznalonev'
        WHERE userId=$userId";
    }
}
if($query != null){
$result = mysqli_query($con, $query);
}
else die("Nem sikerült ");
$_SESSION['username'] = $ujFelhasznalonev;
//echo $fileNev;
echo "Sikeres frissítés!";
echo "<a href='../index.php?page=-10'>Vissza a profilomhoz</a>";
