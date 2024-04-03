<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar2.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_offering.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->

						<div class="empty">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="icon-info-sign"></i>  <strong>Note!:</strong> Select the checbox if you want to delete?
                    </div>
               </div>		
			    			
				<?php	
	             $count_user=mysqli_query($conn,"select * from offering");
	             $count = mysqli_num_rows($count_user);
                 ?>	 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></i><i class="icon-user"></i> Giving List</div>
								<div class="muted pull-right">
								Number of Givings: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_offering.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item"  data-toggle="modal" href="#offering_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
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
												<th></th>
												<th>name</th>
												<th>Amount</th>
												<th>Mode Of Payment</th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from members INNER JOIN offering ON members.id=offering.na where na='$session_id'")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['offeringid'];
													?>	
									
												<tr><td></td>
													<td width="70">
													<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
													</td>
													<td><?php echo $row['fname']; ?> <?php echo $row['sname']; ?></td>
													<td><?php echo $row['Amount']; ?></td>
													<td><?php echo $row['Trcode']; ?></td>
													<td></td>
												
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