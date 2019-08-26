<?php
	$db = new mysqli('localhost','root','','hritwik');

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
      <h3 id="heading">Register Here</h3>
	    <?php
	if(isset($_POST["submit"]))
		{ 
                   $sql1="SELECT * FROM student WHERE Name='{$_POST['name']}'";
                    $result = mysqli_query($db, $sql1);
                 if($row = mysqli_fetch_assoc($result))
                  {
                echo "Username already exist";
                 }
                else
		{ 
                   $sql="INSERT INTO student (Name,Password,mail,branch)
		 VALUES ('{$_POST['name']}','{$_POST['pass']}','{$_POST['mail']}','{$_POST['dep']}')";
					
			 if($db->query($sql))
			{
				echo "<p class='success'>User Registration Success.</p>";
			}
			else
			{
				echo "<p class='success'>Registration Failed.</p>";
			}
                        }
		}
?>
	<div id="center">
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	
		<label>Name</label>
		<input type="text" name="name" required></input>
			<label>Password</label>
		<input type="password" name="pass" required></input>
			<label>E - Mail</label>
		<input type="email" name="mail" required></input>
			<label>Department</label>
		<select name="dep" required>
			<option value="">Select</option>
			<option value="CSE">CSE</option>
			<option value="IT">IT</option>
			<option value="ME">ME</option>
                        <option value="EIE">EIE</option>
			<option value="CO">CO</option>
			<option value="CSI">CSI</option>
                        <option value="CE">CE</option>
			<option value="EEE">EEE</option>
			<option value="EN">EN</option>
		</select>
		<button type="submit" name="submit">Save Details</button>
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
