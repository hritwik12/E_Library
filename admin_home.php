<?php
	$db = new mysqli('localhost','root','','hritwik');
	function countRecord($sql,$db)
	{
		$res=$db->query($sql);
		return $res->num_rows;
	}
	
	function viewRecords($sql,$db)
	{
	}
	session_start();

 
$sql = "SELECT * FROM `books`";
 
$connStatus = $db->query($sql);
 
$numberOfRows = mysqli_num_rows($connStatus);
 
	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>E-Book Library</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/s1.css" />
</head>
<body>
<div id="container" style="background-image: url(image/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div id="header" style="background-image: url(image/upper.jpg); background-repeat: no-repeat; background-size: cover;"><h1><a href="index.php">E-Book Library</a></h1></div>
<div id="wrapper">
    <div id="content">
      <p id="heading"> Welcome </p>
		<ul id="count">
			<li>Total Students : <?php echo countRecord("SELECT * from student",$db); ?></li>
			<li>Total Books    : <?php echo $numberOfRows ?></li>
			<li>Total Request  : <?php echo countRecord("SELECT * from request",$db); ?></li>
			<li>Total Comments : <?php echo countRecord("SELECT * from comment",$db); ?></li>
		</ul>
    </div>
  </div>
  <div id="navigation">
   <?php include "admin_side_nav.php"; ?>
  </div>
</div>
</body>
</html>
