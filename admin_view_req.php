<?php
	$db = new mysqli('localhost','root','','hritwik');
	session_start();
//	if(!isset($_SESSION["AID"]))
//	{
//		echo "<script>window.open('user_login.php','_self')</script>";
//	}
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
      <h3 id="heading">View Student Request</h3>
	<?php 
		$sql="SELECT * from request;";
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			echo "<table>";
					echo "<tr>";
						echo "<th>SNO</th>";
						echo "<th>STUDENT</th>";
						echo "<th>REQUEST</th>";
						echo "<th>LOGS</th>";
					echo "</tr>";
					$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["s_name"]}</td>";
					echo "<td>{$row["b_name"]}</td>";
					echo "<td>{$row["LOGS"]}</td>";
					echo "</tr>";
				}
			echo "</table>";
		}
		else
		{
			echo "<p class='error'>No Book Record Found</p>";
		}
	?>
	
    </div>
  </div>
  <div id="navigation">
   <?php include "admin_side_nav.php"; ?>
  </div>
  <div id="footer">
</div>
</div>
</body>
</html>
