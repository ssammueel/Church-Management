
<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_offering'])){
	$id = isset($_POST['selector']) ? $_POST['selector'] : array();
	
	if (empty($id)) {
        
        header("location: offering.php ? error=No offering selected. Please select at least one offering to delete.");
        exit;
    }


	$N = count($id);
	for($i=0; $i < $N; $i++)
	{
		$result = mysqli_query($conn,"DELETE FROm offering where offeringid='$id[$i]'");
	}
	header("location: offering.php");
	}
?>