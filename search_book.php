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
      <h3 id="heading">Search Book</h3>
		<div id="center">
			  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
				<label>Enter Book Name or Keyword</label>
				<input type="text" name="name" required>
				<button type="submit" name="submit">Search Now</button>
			  </form>
		</div>
		<?php 
		if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM books WHERE name like '%{$_POST["name"]}%' or id like '%{$_POST["name"]}%' ";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				echo "<table>";
						echo "<tr>";
							echo "<th>SNO</th>";
							echo "<th>TITLE</th>";
							echo "<th>KEYWORDS</th>";
							echo "<th>VIEW</th>";
							echo "<th>COMMENT</th>";
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
						echo "<td><a href='comment_book.php?}'>Comment</a></td>";
						echo "</tr>";
					}
				echo "</table>";
			}
			else
			{
				echo "<p class='error'>No Book Record Found</p>";
			}
		}
	?>
	
		
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
