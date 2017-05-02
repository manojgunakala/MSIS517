<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","authentication");


?>
<!DOCTYPE html>
<html>
<head>
  <title>devProject3</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>Welcome Back <?php echo $_SESSION['username']; ?> !</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<div>
    <h1>Welcome!!!  , <?php echo $_SESSION['username']; ?>.</h1></div>
</div>
<a href="logout.php">Log Out</a>
</body>
</html>
