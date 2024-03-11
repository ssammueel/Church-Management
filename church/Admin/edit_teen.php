<?php
include('header.php');
include('session.php');
$get_teens_id = $_GET['id'];

if (isset($_GET['id'])) {
    $edit_teen_id = $_GET['id'];
    
} else {
    echo "No ID provided for editing.";
}

// Assuming you have the $conn variable defined somewhere before this point

// Define $count to avoid undefined variable warning
$count = 0;

if (isset($_GET['id'])) {
    $edit_teen_id = $_GET['id'];

    // Retrieve teen details from the database
    $edit_teen_query = mysqli_query($conn, "SELECT * FROM teens WHERE id = '$edit_teen_id'");
    $edit_teen_data = mysqli_fetch_array($edit_teen_query);

    // Print retrieved data for testing
    
} else {
    echo "No ID provided for editing.";
}
?>


    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_teen_form.php'); ?>		   			
				</div>
	

	
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
					
					 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-user"></i>  teen(s) List</div>
								<div class="muted pull-right">
								Number of teens <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_teens.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
									<script type="text/javascript">
									 $(document).ready(function(){
									 $('#delete').tooltip('show');
									 $('#delete').tooltip('hide');
									 });
									</script>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Name</th>
												<th>mobile</th>
                                                <th>Residence</th>
											
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$teens_query = mysqli_query($conn,"select * from teens")or die(mysqli_error());
													while($row = mysqli_fetch_array($teens_query)){
													$id = $row['id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['fname']." ".$row['sname'];?></td>
	
												<td><?php echo $row['mobile']; ?></td>
                                                <td><?php echo $row['Residence']; ?></td>
											
												<?php include('toolttip_edit_delete.php'); ?>															
												<td width="120">
												<a rel="tooltip"  title="Edit Event" id="e<?php echo $id; ?>" href="edit_teen.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Edit rr</i></a>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>

		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>