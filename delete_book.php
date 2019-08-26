<?php
	$db = new mysqli('localhost','root','','hritwik');
	$sql=" DELETE from books where id=".$_GET['id']; 
	if($db->query($sql))
	{
		echo "<script>window.open('Admin_view_book.php?mes=Book Details Deleted','_self')</script>";
	}
	else
	{
		echo "<script>window.open('Admin_view_book.php','_self')</script>";
	}
?>
