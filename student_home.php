<?php
	$db = new mysqli('localhost','root','','hritwik');
	session_start();
//if(!isset($_SESSION["ID"]))
//{
//	echo "<script>window.open('user_login.php','_self')</script>";
//}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>E-Book Library</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/s1.css" />
</head>
<body>
<div id="container"  style="background-image: url(image/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div id="header" style="background-image: url(image/upper.jpg); background-repeat: no-repeat; background-size: cover;"><h1><a href="index.php">E-Book Library</a></h1></div>
  <div id="wrapper">
    <div id="content">
      <h3 id="heading">Welcome <?php echo $_SESSION["NAME"]; ?>.</h3>
	
    </div>
  </div>
  <div id="navigation">
   <?php include "user_side_nav.php"; ?>
  </div>

  <div id="footer">

  </div>
</div>
</body>
</html>
