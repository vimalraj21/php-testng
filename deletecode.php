<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db( $connection,"php_crud");

if(isset($_POST['deletedata']))
{
    $id_data = $_POST['deleteid'];
	
	
	$query = "DELETE FROM sample_table WHERE id = '$id_data' ";
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