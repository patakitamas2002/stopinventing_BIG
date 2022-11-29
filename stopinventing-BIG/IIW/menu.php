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
      <li><a href="index.php?page=-5">Kép feltöltése</a></li>
      <li><a href="index.php?page=0 ">Rajzolás</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-center">
      <li><a class="navbar-brand" href="index.php?page=0">IIW</a></li>
    </ul>
      <?php
      if(isset($_SESSION["id"])){
        require "./mydbms.php";
        $con = connect('viccoldal', 'root','');
        $userId = $_SESSION['id'];
        $query = "SELECT username,pfp,role FROM users WHERE userId = '$userId'";
        $userdata = mysqli_query($con, $query);
        $userdata = mysqli_fetch_array($userdata);
        $path = './imgs/'.$userdata[0].'/'.$userdata[1];
        if($userdata[1] == ""){
          $path = './default_pfp/'.$userdata[2].'.jpg';
        }
        echo '
        <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">';echo "<img src=$path class='profile_pic'>";
        echo '
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="logout.php">Kijelentkezés<i class="glyphicon glyphicon-log-out"></i></a></li>
          <li><a href="index.php?page=-10">Profilom módosítása</a></li>
          <li><a href="index.php?page=15">Posztjaim megtekinése</a></li>
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
</style>
</html>
