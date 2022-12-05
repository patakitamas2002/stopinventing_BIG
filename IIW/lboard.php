<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeaderBoard</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="style.css">
    <style>
        table, th{
            border: 3px solid black;
        }
    </style>
</head>
<body>
<div class="menu">
    <?php
if(!isset($_SESSION['id'])){
    session_start();
}
require 'menu.php';
?>
</div>
    <table>
        <tr>
        <th>Helyezés</th>
        <th>Név</th>
        <th>Pont</th></tr>

    <?php
    require 'mydbms.php';
    $con = connect('mnist_stopinventing', 'root','');
    $query = "SELECT * FROM rangsor ORDER BY score DESC";
    $result = mysqli_query($con, $query);
    $rank = 1;
    while($row=mysqli_fetch_assoc($result))
    { 
        echo"<tr>";
        echo "<td width=20 align=center>". $rank .".". "</td>";
        echo"<td width=100>" . $row['username'] . "</td>";
        echo"<td wdith=100 align=center>" . $row['score'] ." Pt" . "</td>";
        echo "</tr>";
     $rank++;
    }  
    ?>
        </table>
</body>