<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilok</title>
    <link rel="stylesheet" href="listp.css">
</head>
<body>
<table>  
    <thead>  
        <th>Keresés</tr>
    <tr>
    <form action="" method="$_GET">
        <input type="hidden" name="page" value="20">
        <th><input type="text" name="username" placeholder="Felhasználónév"></th>        
        <th>
            <select name="role">
            <option selected hidden disabled>Válasszon...</option>
            <option value="user">Felhasználó</option> 
            <option value="mod">Moderátor</option>
            <option value="admin">Adminisztrátor</option>
            </select><br>
        </th>
        <th><button type="submit" name="kereses">Keresés</button></th>
    </form>
    </tr>
</table>



<?php
if(!isset($_SESSION['id'])){
    require './mydbms.php';}
$role = '';
if(isset($_GET['role'])){
    $role = $_GET['role'];}
$username = '';
if(isset($_GET['username'])){
    $username = $_GET['username'];}



$con = connect('mnist_stopinventing', 'root', '');
$query="SELECT role,pfp, username, userId FROM users
    WHERE 
    role like '%$role%' AND
    username like '%$username%'";
$result = mysqli_query($con , $query);
$results = mysqli_fetch_all($result);
echo $username;
?>
<table>
    <thead>
        <tr>
            <th>Profilkép</th>
            <th>Felhasználónév</th>
            <th>Jogosultság</th>
            <?php if($_SESSION['role'] == 'mod' || $_SESSION['role'] == 'admin') {echo '<th>Bannolás</th>'; }  ?>
            <?php if($_SESSION['role'] == 'admin') {echo '<th>Promótálás/demótálás</th>'; } ?>
        </tr>
    </thead>
<?php
foreach($result as $row){ ?>
    <tr>  
                <?php if($row['pfp'] != '')
                        $path = "imgs/".$row["username"]."/". $row["pfp"];
                    else
                        $path = "default_pfp/".$row['role'].".jpg";
                    ?>
                <td><?php echo "<img src=$path height=100>"; ?></td>
				<td><?php echo $row["username"]; ?></td>  
                <td><?php echo $row["role"]; ?></td>
                <?php                 
                if($_SESSION['role'] == 'mod' || $_SESSION['role'] == 'admin'){
                    echo '<td>';
                    if($row["role"] != 'admin' && $_SESSION['role'] == 'admin'){
                        ?>
                    <form action="processors/banuser.php" method="POST">
                        <input type="hidden" name="userId" value="<?= $row["userId"]; ?>">
                        <button type="submit">Bannolás</button> </form>
                    <?php } ?>
                    <?php if($row["role"]  == 'user' && $_SESSION['role'] == 'mod'){ ?>
                        <form action="processors/banuser.php" method="POST">
                        <input type="hidden" name="userId" value="<?= $row["userId"]; ?>">
                        <button type="submit">Bannolás</button> </form>
                    <?php } ?>
                    </td>
                <?php } ?>
                <?php                 
                if($_SESSION['role'] == 'admin'){
                    echo '<td>';
                    if($row["role"] == 'user'){ ?>
                        <form action="processors/updaterole.php" method="POST">
                        <input type="hidden" name="userId" value="<?= $row["userId"]; ?>">
                        <input type="hidden" name="newRole" value="mod">
                        <button type="submit">Promótálás</button></form>
                    <?php } 
                    if($row["role"] == 'mod'){ ?>
                        <form action="processors/updaterole.php" method="POST">
                        <input type="hidden" name="userId" value="<?= $row["userId"]; ?>">
                        <input type="hidden" name="newRole" value="user">
                        <button type="submit">Demótálás</button></form>
                    <?php } ?>
                    </td>
                <?php } ?>

<?php
}
?>
</table>
