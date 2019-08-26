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
<div id="container" style="background-image: url(image/bg2.jpg); background-repeat: no-repeat; background-size: cover;">
<div id="header" style="background-image: url(image/upper.jpg); background-repeat: no-repeat; background-size: cover;"><h1><a href="index.php">E-Book Library</a></h1></div>
  <div id="wrapper">
    <div id="content">
      <h3 id="heading">Upload Book Details.</h3>
		<div id="center">
		<?php
	if(isset($_POST["submit"]))
		{
			$bname=$_POST['bname'];
			$keys=$_POST['keys'];
			$target_dir = "upload/";
			$target_file = $target_dir . basename($_FILES['efile']['name']);
			if (move_uploaded_file($_FILES["efile"]["tmp_name"], $target_file))
			{
				$sql="INSERT INTO books (name,id,file)
					 VALUES ('{$bname}','{$keys}','{$target_file}')";
					 $db->query($sql);
					 echo "<p class='success'>Adding Book Success.</p>";
			}
					
			else
			{
				echo "<p class='error'>Sorry, there was an error uploading your file.</p>";
			}
	
		}
?>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
		<label>Book Title</label>
		<input type="text" name="bname" required>
		<label>Keywords</label>
		<textarea name="keys" required></textarea>
		<label>Upload File</label>
		<input type="file" name="efile" required>
		
		<button type="submit" name="submit">Save Details</button>
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
