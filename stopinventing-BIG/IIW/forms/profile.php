<!-- php tagek között kapcsolatot létrehozni, a seesionben eltárolt
id-jű  -->
<?php 
    $con = connect('viccoldal', 'root','');
    $userId = $_SESSION['id'];
    $query = "SELECT username,pfp,role FROM users WHERE userId = '$userId'";

    $userdata = mysqli_query($con, $query);
    $userdata = mysqli_fetch_array($userdata);
    //var_dump($userdata);
    //echo "<br>";
    $path = './imgs/'.$userdata[0].'/'.$userdata[1];
    //echo $path;
    //echo $path;
    //echo $userdata[2]." test";
    if($userdata[1] != ""){
        echo "<img class='profile' src='$path' height=300>";
    }
    else{
        $path = './default_pfp/'.$userdata[2].'.jpg';
        echo "<img class='profile' src=$path height=300>";
    }
    //echo "<img src = 'imgs/pfp/0cf4695592d3011073f3f31045137456.jpg'>";
?>
<p id="error" style="color:red"></p>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <title>MyProfile</title>

<form name="updateForm" action="processors/updateprofile.php" method="POST" enctype="multipart/form-data" onsubmit="return JelszoCheck()">
    <input type="hidden" name="userId" value=<?=$_SESSION['id']?>>
    <p>Felhasználónév: </p>
    <input type="text" name="username" required value=<?=$_SESSION['username']?>><br>

    <p>Jelszó módosítása: </p>
    <input type="password" name="password" value="" required><br>

    <p>Jelszó megint: </p>
    <input type="password" name="passwordAgain" value="" required><br>

    <p>Profilkép frisstése: </p>
    <input type="file" accept=".jpeg,.jpg,.png" name="pfp"/><br>

    <input class="update" type="submit" name="update" value="Frissít">
</form>
<form name="updateForm" action="processors/deletepfp.php" method="POST" >
    <input class="del" type="submit" name="deletepfp" value="Profilkép törlése">
</form>

<style>   

    body{
        background-color: turquoise;
    }

    .update{
        background-color:chartreuse;
        border: 2px solid black;
    }

    .del{
        color: white;
        background-color:red;
        border: 2px solid black;
    }

    input {
        display: block;
        box-sizing: border-box;
    }
    
    p{
        color: white;
        font-size: large;
    }
    
    .profile{
        display: block;
        margin: auto;
        border: 2px solid black;
        border-radius: 200px;
    }
     
    input{   
        height: 34px;
        width: 100%;
    }

    button{
        height: 34px;
        margin: 0 auto;
        background-color:chartreuse;
        border: 2px solid black;
    }

    form {
    margin: auto 40%;
    padding: 50px;
    border: 2px solid black;
    border-radius: 50px;
    background-color:royalblue;
    }
    </style> 

<script>
    function JelszoCheck() {
        var jelszo = document.updateForm.jelszo.value;
        var jelszoMegint = document.updateForm.jelszoMegint.value;
        console.log(jelszo != jelszoMegint);
        if(jelszo != jelszoMegint) {
            document.getElementById('error').innerHTML = "A jelszavak nem egyenek";
            return false;
        }
        else {
            document.getElementById('error').innerHTML = "";
            return true;
        }
    }
</script>
