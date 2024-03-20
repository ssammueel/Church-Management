<!--2-->
<div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></i><i class="icon-user"></i>Church collections</div>
								<div class="muted pull-right">
								Number of Givings: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_tithe.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item"  data-toggle="modal" href="#tithe_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
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
												<th>Amount</th>
												<th>mode of payment</th>
												<th>church</th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from admin INNER JOIN tithe ON admin.admin_id=tithe.na ")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['id'];
													?>
									
												<tr>
												<td width="30"> <!--uniform_on-->
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
	
												<td><?php echo $row['Amount']; ?></td>
												<td><?php echo $row['Trcode']; ?></td>
												<td><?php echo $row['na']; ?></td>
											
																										
												
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>

