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
</style>
<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    
<body>
<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
            <?php include('sidebar.php'); ?>		
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
