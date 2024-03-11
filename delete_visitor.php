<?php
include('./lib/dbcon.php');
dbcon();
if (isset($_POST['delete_visitor'])){
	$id = isset($_POST['selector']) ?$_POST['selector'] : array();

	if(empty($id)){
		header("location: add_visitor.php?error=No member selected. Please select at least one visitor to delete.");
        exit;
	}
	$N = count($id);
	for($i=0; $i < $N; $i++){
		$result = mysqli_query($conn,"DELETE FROm visitor where id='$id[$i]'");
	}
	header("location: add_visitor.php");
	}	
?>
