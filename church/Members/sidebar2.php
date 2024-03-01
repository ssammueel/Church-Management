<link rel="stylesheet" href="bootstrap/css/sidebar.css" class="css">
 <link href="bootstrap/css/admin_background.css" rel="stylesheet" media="screen"/>
 <style>
  body{
    background: url("images/v1.jpg");
	    
  }
 </style>
 <body>
  
<link rel="shortcut icon" href="images/logo.png" />
	 <div class="span3" id="sidebar"  style="background-color: 	;">
	              <img id="admin_avatar" class="img-circle" src="<?php echo $row['thumbnail']; ?>">
	                 
                  <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                           <li class="active"> 

						   <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> 
						   </li>
						 
						 <!------/.* manage memberss sidebar*------->		
						 <li>
                    <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i> Go Home
							      </a>
                </li>				
						 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;manage Acount
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs" class="collapse">						
                              
                <li>
                    <a href="add_members.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> My Details
							      </a>
                </li>

				

                
												   							
						    </ul>
						</li>
                         
                          <!------/.* finance sidebar*------->
					    <li>						
						    <a href="dashboardy.php" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Givings/Tithes
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    
						</li>
						
					  <!------/.* manage System user sidebar*------->	
						
						
						<!------/.* System Log sidebar*------->	
						
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs5"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Events & Birthdays
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs5" class="collapse">						
                            <li class="">
                            <a href="down.php"><i class="icon-chevron-right"></i><i class="icon-trophy"></i> Upcoming Events</a>
                            </li>
						    <li class="">
                            <a href="birthdy.php"><i class="icon-chevron-right"></i><i class="icon-calendar"></i> Upcoming Birthdays </a>
                            </li>
						    </ul>
						</li>
					  
						
                       
                  </ul>		<br>
                  			
				
				<?php include('search_form.php'); ?>										
    </div>
						
 </body>



