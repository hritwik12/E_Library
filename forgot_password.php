<?php
$db=new mysqli('localhost','root','','hritwik');
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
      <h3 id="heading">Forgot Password</h3>
	    <?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM student WHERE Name='{$_POST['name']}'";
		$res=$db->query($sql);
			if($res->num_rows>0)
                         {
				$s="update student set Password='{$_POST["npass"]}' WHERE Name='{$_POST['name']}' AND mail='{$_POST['email']}'";
				$db->query($s);
				echo "<p class='success'>Password Changed</p>";
			}
			else
			{
				echo "<p class='error'>Invalid Name or Email</p>";
			}}
                     ?>
                      <div id="center">
			  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			
				<label>Name</label>
				<input type="text" name="name" required>
					<label>Email</label>
				<input type="email" name="email" required>
				<label>New Password</label>
				<input type="password" name="npass" required>
				<button type="submit" name="submit">Submit</button>
				</form>
		</div>
    </div>
  </div>
  <div id="navigation">
   <?php include "side_nav.php"; ?>

  </div>
</div>
</body>
</html>
