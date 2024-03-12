<?php
include('./lib/dbcon.php'); 
dbcon(); 

if (isset($_POST['delete_member'])){
    $id = isset($_POST['selector']) ? $_POST['selector'] : array();

    if (empty($id)) {
        
        header("location: membersDetail.php?error=No member selected. Please select at least one member to delete.");
        exit;
    }

    $N = count($id);
    for ($i = 0; $i < $N; $i++) {
        $result = mysqli_query($conn, "DELETE FROM members WHERE id='$id[$i]'");
    }

    header("location: membersDetail.php");
}
?>
