<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_teen'])){
	$id = isset($_POST['selector']) ? $_POST['selector'] : array();
	
	if (empty($id)) {
        
        header("location: teensDetail.php?error=No member selected. Please select at least one member to delete.");
        exit;
    }


	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysqli_query($conn,"DELETE FROm teens where id='$id[$i]'");
	}
	header("location: teensDetail.php");
	}
?>