<?php
include('./lib/dbcon.php');
dbcon();

if (isset($_POST['delete_events'])){
    $id = isset($_POST['selector']) ? $_POST['selector'] : array();

    
	if (empty($id)) {
        
        header("location: events.php?error=No event selected. Please select at least one event to delete.");
        exit;
    }
    $N = count($id);

    for ($i = 0; $i < $N; $i++) {
        $result = mysqli_query($conn, "DELETE FROM event WHERE id='$id[$i]'");
    }

    header("location: events.php");
}
?>
