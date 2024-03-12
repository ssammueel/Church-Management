<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_user_log'])){
	$id = isset($_POST['selector']) ? $_POST['selector'] : array();

    
	if (empty($id)) {
        
        header("location: activity_log.php?error=No log_selected selected. Please select at least one log to delete.");
        exit;
    }
	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysqli_query($conn,"DELETE FROm user_log where user_log_id='$id[$i]'");
	}
	header("location: activity_log.php");
	}
?>