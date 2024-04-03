<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St.Lukes Boys School management System">
    <meta name="author" content="Kithinji Godfrey">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="wb1.css">  

</head>
<style>
.navbar-inner {
    margin-right: 20px; /* Adjust the value to your preferred spacing */
}
td{
    font-size: large;
    font-family: times 'Times New Roman', Times, serif;
}
</style>
<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    
<body>
<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
            <?php include('sidebar2.php'); ?>		
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <?php $query= mysqli_query($conn,"select * from members where id = '$session_id'")or die(mysqli_error());
                        $row = mysqli_fetch_array($query);			
                        ?>
                        
     
<!--========================================== block ==================================================================-->
                        <div class="block">
                            
                        <?php include('top.php')?><br>
                                    

                            <div class="block-content collapse in">
							    <div class="span12">
                                    
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span10" id="">
                     <div class="row-fluid">
                        <!-- block -->
						
										
				<?php	
	             $count_members=mysqli_query($conn,"select * from members where id = '$session_id'");
	             $count = mysqli_num_rows($count_members);
                 ?>	 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></i><i class="icon-members"></i> Church member List</div>
								<div class="muted pull-right">
								Number of Church members: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="row-fluid"> 
   
	    <div class="pull-right">
		   <a href="print_members.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
		
        </div>
    

                            <div class="block-content collapse in">
                                <div class="span10">
								
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
               
        <thead>
            <tr>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $members_query = mysqli_query($conn, "select * from members where id = '$session_id'") or die(mysqli_error());
            while ($row = mysqli_fetch_array($members_query)) {
                $id = $row['id'];
                ?>

                <!-- Name -->
                <tr>
                    <td width="30"></td>
                    <td><b>Name:</b><?php echo $row['fname']." ".$row['lname']." ".$row['sname']; ?></td>
                </tr>

                <!--gender-->
                <tr>
                    <td width="30"></td>
                    <td><b>Gender:</b> <?php echo $row['Gender']; ?></td>
                </tr>

                <!--birthday date-->
                <tr>
                    <td width="30"></td>
                    <td><b>Date of Birth:</b> <?php echo $row['Birthday']; ?></td>
                </tr>

                <!--residence-->
                <tr>
                    <td width="30"></td>
                    <td><b>Residence:</b> <?php echo $row['Residence']; ?></td>
                </tr>
                <!--ministry-->
        
                <tr>
                    <td width="30"></td>
                    <td><b>ministry:</b> <?php echo $row['ministry']; ?></td>
                </tr>
                
                <!-- Mobile -->
                <tr>
                    <td width="30"></td>
                    <td><b>Mobile:</b> <?php echo $row['mobile']; ?></td>
                </tr>
                
                <!-- Email -->
                <tr>
                    <td width="30"></td>
                    <td><b>Email:</b> <?php echo $row['email']; ?></td>
                </tr>
                
                
                <!-- Residence -->
                <tr>
                    <td width="30"></td>
                    <td><b>Residence:</b> <?php echo $row['Residence']; ?></td>
                </tr>
                
                <?php include('toolttip_edit_delete.php'); ?>
                <tr>
                    <td></td>
                    
													<td width="120">
												<a rel="tooltip"  title="Edit members" id="e<?php echo $id; ?>" href="edit_members.php <?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Edit Info</i></a>
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
	
                                    <body class="home-template">


  <div class="home__sections" style="background-color: #ECF0F1;">
    
  
    </div>
    </div> 


    
  


</body>
                            </div>
                        </div>
                    </div>
                        <!-- /block --> 						
                </div>
            </div>
                 
        </div>
    
    
         <?php include('footer.php'); ?>
       
	<?php include('script.php'); ?>
    </body>










    