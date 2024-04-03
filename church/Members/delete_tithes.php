<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_tithes'])){
	$id = isset($_POST['selector']) ? $_POST['selector'] : array();
	
	if (empty($id)){
        
        header("location: tithes.php?error=No tithe selected. Please select at least one tithe to delete.");
        exit;
    }
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysqli_query($conn,"DELETE FROm tithe where titheid='$id[$i]'");
	}
	header("location: tithes.php");
	}
?>