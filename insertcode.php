<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db( $connection,"php_crud");

if(isset($_POST['insertdata']))
{
	$fname =$_POST['firstname'];
	$lname =$_POST['lastname'];
	$emaildata =$_POST['email'];
	
	$query = "INSERT INTO sample_table (first_name,last_name,email) VALUES ('$fname','$lname','$emaildata')";
	$query_run = mysqli_query($connection, $query);
	
	if($query_run)
	{
		echo'<script> alert("data saved");</script>';
		header('Location: index.php');
	}
	else
	{
		echo '<script>alert("Data Not Saved"); </script>';
	}
	
}

?>