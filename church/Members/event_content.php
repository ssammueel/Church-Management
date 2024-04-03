<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St.Lukes Boys School management System">
    <meta name="author" content="Kithinji Godfrey">
    
	<link rel="stylesheet" href="wb1.css">  

</head>
<style>
.navbar-inner {
    margin-right: 20px; /* Adjust the value to your preferred spacing */
}
#p{
    margin-left: 40px;
    font-size: 30px;
    font-family: Bahnschrift Light;
    color: blueviolet;
}
#b{
   
    font-size: 24px;
    font-family: Bahnschrift Light;
    color: ;
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
                $row = mysqli_fetch_array($query);?>
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <img id="avatar1" class="img-responsive" src="images/logo.png">
                            <strong> Welcome! <?php echo $user_row['fname']." ".$user_row['lname'];  ?></strong>
                        </div>
                    </div>
     

                    <div class="block">
                    <?php include('top.php')?><br>
                        <div class="block-content collapse in">
                        
							<div class="span12">
                                
                            <body class="home-template">
                                
                                <div class="home__sections">
                                <img src="images/cfff.jpg" class="span7" >
                                <div class="home__latest mt4" style="background-color: wheat;"><p id="p">                                    
                                        Our Mission<br></p>
                                        <p id="b">
                                        <b>MISSION<br></b>
                                        our Mission is to build godly families through discipleship, raise and grow leaders in the community with passon for christ<br><br>
                                        <b>VISION</b><br>
                                    the vision of CFF church is to raise a church that :<br>
                                1. worships God in truth<br>
                                2. understand the bible and apply it in the daily life<br>
                                3. teach the bible in truth<br>
                                4. care for its members <br>
                                5. support the government of the day<br>
                                </p>
                            </div>
                                        <!-- <img src="images/shudule.jpg" > -->
                                        
                                    
                                        
                                    
                                </div>
                            </body>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('script.php'); ?>
</body>
