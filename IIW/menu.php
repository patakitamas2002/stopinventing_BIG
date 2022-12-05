<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav id="red" class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="mnistquiz.php">MNIST by Human</a></li>
      <li><a href="lboard.php">Rekordok</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-center">
      <li><a class="navbar-brand" href="index.php">IIW</a></li>
    </ul>
      <?php
      if(isset($_SESSION["id"])){
        //session_start();
        /*require "mydbms.php";
        $con = connect('mnist_stopinventing', 'root','');
        $userId = $_SESSION['id'];
        $query = "SELECT username,pfp FROM users WHERE id = '$userId'";
        $userdata = mysqli_query($con, $query);
        $userdata = mysqli_fetch_array($userdata);*/
        $path = './imgs/'.$_SESSION['username'].'/'.$_SESSION['pfp'];
        /*if($userdata[1] == ""){
          $path = './default_pfp/'.$userdata[2].'.jpg';
        }*/
        echo '
        <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">';echo "<img src=$path class='profile_pic'>";
        echo '
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="logout.php">Kijelentkezés<i class="glyphicon glyphicon-log-out"></i></a></li>
          <li><a href="forms/profile.php">Profilom módosítása</a></li>
        </ul>
      </li>
      </ul>
        ';
      }
      else{
        echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="forms/loginform.php">Bejelentkezés <span class="glyphicon glyphicon-log-in"></span></a></li>
        ';
      }
      ?>
  </div>
</nav>
</body>
<style>
  #banner{
  width: 100%;
}
ul{
  color: white;
}
</style>
</html>
