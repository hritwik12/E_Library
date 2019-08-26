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
      <h3 id="heading">Change Password</h3>
		<div id="center">
	<?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM admin WHERE password='{$_POST["opass"]}' and username='{$_POST['name']}'" ;
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				$s="update admin set password='{$_POST["npass"]}' WHERE username='{$_POST['name']}'";
				$db->query($s);
				echo "<p class='success'>Password Changed</p>";
			}
			else
			{
				echo "<p class='error'>Invalid Password</p>";
			}

		}
	?>

		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<label>Username</label>
			<input type="text" name="name" required>
			<label>Old Password</label>
			<input type="password" name="opass" required>
			<label>New Password</label>
			<input type="password" name="npass" required>
			<button type="submit" name="submit">Update Now</button>
			</form>
		</div>
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
