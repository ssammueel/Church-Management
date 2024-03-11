<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php	
	             $count_student=mysqli_query($conn,"select * from giving");
	             $count = mysqli_num_rows($count_student);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> giving list</div>
                          <div class="muted pull-right">
								Number of payments: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>

													
<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
		   <a href="print_giving.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
      </div>
    </div> 
	

	
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
		        <tr>	<th></th>		        
                	<th>member Name </th>
					<th>mobile No. </th>
					<th>Transaction Code</th>
					<th>Amount</th>
					<th>Giving For</th>
			       
					<th>Date & Time  </th>
						
                   		
                    				
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
		$student_query = mysqli_query($conn,"SELECT *FROm members  LEFT OUTER JOIN giving ON members.id = giving.na WHERE giving.givingid !='' ")or die(mysqli_error());
		while($row = mysqli_fetch_array($student_query)){
		$username = $row['givingid'];
		$id= $row['givingid'];
		?>
									
		
		<tr>
		<td width="70">
            <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
            </td>
			<td><?php echo $row['fname']." ".$row['sname']; ?></td>
		    <td><?php echo $row['mobile']; ?></td>
			<td><?php echo $row['Trcode']; ?></td>
			
			<td><?php echo $row['Amount']; ?></td>
		
			<td><?php echo $row['ya']; ?></td>
			<td><?php echo $row['paytime']; ?></td>
            </tr>
											
	<?php } ?>   

</tbody>
</table>
</form>	
		
			  		
</div>
</div>
</div>
</div>
</div>
	
</div>	
<?php include('footer.php'); ?>

<?php include('script.php'); ?>
		</div>
 </body>
</html>