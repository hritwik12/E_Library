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
	//if(!isset($_SESSION["AID"]))
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
<div id="container" style="background-image: url(image/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div id="header" style="background-image: url(image/upper.jpg); background-repeat: no-repeat; background-size: cover;"><h1><a href="index.php">E-Book Library</a></h1></div>
  <div id="wrapper">
    <div id="content">
      <h3 id="heading">View Book Details.</h3>
	<?php 
	if(isset($_GET["mes"]))
	{
		echo "<p class='success'>".$_GET["mes"]."</p>";
	}
		$sql="SELECT * FROM books";
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			echo "<table>";
					echo "<tr>";
						echo "<th>SNO</th>";
						echo "<th>TITLE</th>";
						echo "<th>KEYWORDS</th>";
						echo "<th>VIEW</th>";
						echo "<th>DELETE</th>";
					echo "</tr>";
					$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["name"]}</td>";
					echo "<td>{$row["id"]}</td>";
					echo "<td><a href='{$row["file"]}' target='_blank'>View</a></td>";
					echo "<td><a href='delete_book.php?id={$row["id"]}'>Delete</a></td>";
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
