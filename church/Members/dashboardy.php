    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St.Lukes Boys School management System">
    <meta name="author" content="Kithinji Godfrey">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	

</head>
<style>
.navbar-inner {
    margin-right: 20px; /* Adjust the value to your preferred spacing */
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
                            
                        <?php include('top.php')?>

                            <div class="block-content collapse in">
							    <div class="span12">
						            <div class="block-content collapse in">
                                        <div id="page-wrapper">
                                            <?php $result = mysqli_query($conn,"select *,
                                                 SUm(Amount) AS value_sum from tithe where na='$session_id' "); 
                                                $row = mysqli_fetch_assoc($result); 
                                                $sum = $row['value_sum'];
                                            ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-money fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $sum; ?></div>
                                        <div>my Total Tithes</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="Tithes.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Give Tithe</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	    	$result1 = mysqli_query($conn,"select *, SUm(Amount) AS value_sum from offering where na='$session_id' "); 
$row = mysqli_fetch_assoc($result1); 
$sum1 = $row['value_sum'];
	   
		 ?>			
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-money fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $sum1;?></div>
                                        <div>my Total Offering</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="offering.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Offer Now</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				 </div>
 </div> 				 							
<div id="page-wrapper">
        <?php 
	    	$result2 = mysqli_query($conn,"select *, SUm(Amount) AS value_sum from giving where na='$session_id' "); 
$row = mysqli_fetch_assoc($result2); 
$sum2 = $row['value_sum'];
	   
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-money fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $sum2; ?></div>
                                        <div>my Total Free Will Giving</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="giving.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">Othet Giving</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>

		<?php 
	     $count_members=mysqli_query($conn,"SELECT * 
FROm  members
WHERE  DATE_ADD(STR_TO_DATE(Birthday, '%Y-%m-%d'), INTERVAL YEAR(CURDATE())-YEAR(STR_TO_DATE(Birthday, '%Y-%m-%d')) YEAR) 
            BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY)");
	             $count = mysqli_num_rows($count_members);
		 ?>			
                    
				 </div>
 </div> 	
	    
				
			                 </div>
                            </div>
                        </div>
                        <!-- /block --> 						
                    </div>
                    </div>
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>
