<?php
	include('config.php');

	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{
		$id = $_GET['id'];

		$result = mysqli_query($dbConn,"update leave_form set status = 'Confirm'  WHERE id=$id")
		or die(mysqli_error());

		header("Location:leave_details.php");
	}
	
?>