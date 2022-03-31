<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db( $connection,"php_crud");

if(isset($_POST['updatedata']))
{
    $id_data = $_POST['id'];
	$fname =$_POST['firstname'];
	$lname =$_POST['lastname'];
	$emaildata =$_POST['email'];
	
	$query = " UPDATE sample_table set first_name= '$fname' , last_name = '$lname' , email = '$emaildata' WHERE id = '$id_data' ";
	$query_run = mysqli_query($connection,$query);
	
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