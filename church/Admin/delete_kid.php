<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_kid'])){
	$id = isset($_POST['selector']) ? $_POST['selector'] : array();

    
	if (empty($id)) {
        
        header("location: sschoolDetail.php ? error=No kid selected. Please select at least one kid to delete.");
        exit;
    }
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysqli_query($conn,"DELETE FROm sundays where id='$id[$i]'");
	}
	header("location: sschoolDetail.php");
	}
?>