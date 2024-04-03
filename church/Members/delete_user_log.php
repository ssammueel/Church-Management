<?php
include('./lib/dbcon.php'); 
dbcon(); 
if (isset($_POST['delete_user_log'])){
	$id = isset($_POST['selector']) ? $_POST['selector'] : array();

    if (empty($id)) {
        header("location: user_log.php?error=No offering selected. Please select at least one offering to delete.");
        exit;
    }

    $N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROm user_log where user_log_id='$id[$i]'");
}
header("location: user_log.php");
}
?>