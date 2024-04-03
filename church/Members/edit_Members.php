<?php include('header.php'); ?>
<?php include('session.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar2.php'); ?>
				<div class="span3" id="adduser">
				<?php include('edit_members_form.php'); ?>		   			
				</div>
				<?php	
	             $count_members=mysqli_query($conn,"select * from members");
	             $count = mysqli_num_rows($count_members);
                 ?>	
                <div class="span6" id="">
         	            <div class="row-fluid">
                        <!-- block -->
						
                        
											 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-user"></i>  members(s) List</div>
								<div class="muted pull-right">
								Number of members <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_members.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
									<script type="text/javascript">
									 $(document).ready(function(){
									 $('#delete').tooltip('show');
									 $('#delete').tooltip('hide');
									 });
									</script>
									
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
													$members_query = mysqli_query($conn,"select * from members where id = '$session_id'")or die(mysqli_error());
													while($row = mysqli_fetch_array($members_query)){
													$id = $row['id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['fname']." ".$row['sname'];?></td>
	
												<td><?php echo $row['mobile']; ?></td>
                                                <td><?php echo $row['Residence']; ?></td>
											
													<td width="120">
												<a rel="tooltip"  title="" id="e<?php echo $id; ?>" href="edit_members.php <?php echo '?id='.$id; ?>"  ></a>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
						<a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="add_members.php"><i class="icon-arrow-left"></i> Back</a></p>		
                        <!-- /block -->
                    </div>


                </div>
            </div>

		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>