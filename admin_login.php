<?php
	session_start();
	$db = new mysqli('localhost','root','','hritwik');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>E-Book Library </title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/s1.css" />
</head>
<body>
<div id="container" style="background-image: url(image/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div id="header" style="background-image: url(image/upper.jpg); background-repeat: no-repeat; background-size: cover;"><h1><a href="index.php">E-Book Library</a></h1></div>
  <div id="wrapper">
    <div id="content">
       <h3 id="heading">Admin Login Here. </h3>
	    <?php
	if(isset($_POST['submit']))
		{
		    $u=$_POST["aname"];
			$y=$_POST["apass"];
			$sql='SELECT * FROM `admin`';
			$query=mysqli_query($db,$sql);
			while($s=mysqli_fetch_row($query))
			{
				
				if($s[1]==$y && $s[0]==$u)
			{
				
				echo "<script>window.open('admin_home.php','_self')</script>";
			}
			else
			{
				echo"<p class='error'>Invalid User name or Password</p>";
			}
			}
			
		}
?>
		<div id="center">
		  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		
			<label>Name</label>
			<input type="text" name="aname" required>
				<label>Password</label>
			<input type="password" name="apass" required>
				
			<button type="submit" name="submit">Login Now</button>
		  </form>
		</div>
    </div>
  </div>

  <div >
   <?php include "side_nav.php"; ?>
  </div>
</div>
</body>
</html>