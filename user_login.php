<?php
	$db = new mysqli('localhost','root','','hritwik');
	session_start();
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
      <h3 id="heading">Student Login Here. </h3>
	    <?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM student WHERE Name='{$_POST["name"]}' AND Password='{$_POST["pass"]}'";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				$row=$res->fetch_assoc(); 
				$_SESSION["ID"]=$row["ID"];
				$_SESSION["NAME"]=$row["NAME"];
				echo "<script>window.open('student_home.php','_self')</script>";
			}
			else
			{
				echo"<p class='error'>Invalid User name or Password</p>";
			}
		}
if(isset($_POST["reset"]))
{
echo "<script>window.open('forgot_password.php','_self)</script>";
}
?>
		<div id="center">
			  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			
				<label>Name</label>
				<input type="text" name="name" >
					<label>Password</label>
				<input type="password" name="pass" >
                                <button type="submit" name="submit">Login Now</button>
                                <a href='forgot_password.php?}'>Forgot Password</a>			  
                                </form>
		</div>
    </div>
  </div>
  <div id="navigation">
   <?php include "side_nav.php"; ?>
  </div>

  <div id="footer">

  </div>
</div>
</body>
</html>
