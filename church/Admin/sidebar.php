<link rel="stylesheet" href="bootstrap/css/ad_side.css">

<body>
  <link rel="shortcut icon" href="images/logo.png" />
	 <div class="span3" id="sidebar">
	              <img id="admin_avatar" class="img-circle" src="<?php echo $row['adminthumbnails']; ?>">
	                 
                  <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                           <li class="active"> 
						   <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i><b>&nbsp;Dashboard</b></a> 
						   </li>
						 
						 <!------/.* manage memberss sidebar*------->						
						 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-group"></i><u>&nbsp;Manage Members</u>
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs" class="collapse">						
                            <li class="">
                            <a href="membersDetail.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> member Details</a>
                            </li>
						   				
						    <li>
                            <a href="add_members.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i> Add members
							</a>
                            </li>

								 <li>
                            <a href="birthdays.php"><i class="icon-chevron-right"></i><i class="icon-calendar"></i> Birthdays
							</a>
                            </li>				   							
						    </ul>
						</li>
						
						<!--- Teens and  Sunday school management------->
						 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs7"><i class="icon-chevron-right"></i><i class="icon-group"></i><u>&nbsp;manage Teens & S. School</u>
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs7" class="collapse">						
                            <li class="">
                            <a href="teensDetail.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> Teens Details</a>
                            </li>
						   		<li class="">
                            <a href="sschoolDetail.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> S. school Details</a>
                            </li>		
						    
							 <li>
                            <a href="add_teen.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i> Add Tenager
							</a>
                            </li>
							<li>
                            <a href="add_sundaysch.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i> Add Sunday School.
							</a>
                            </li>
								 			   							
						    </ul>
						</li>
						
						
                         <!--- Visitors management------->
						  <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs6"><i class="icon-chevron-right"></i><i class="icon-group"></i><u>&nbsp;manage Visitors</u>
						    <div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs6" class="collapse">						
                            <li class="">
                            <a href="Visitor.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> Visitor Details</a>
                            </li>
						   				
						    <li>
                            <a href="add_visitor.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i> Add Visitor
							</a>
                            </li>
												   							
						    </ul>
						</li>
                          <!------/.* finance sidebar*------->
					    <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-money"></i><u>&nbsp;Givings/Tithes</u>
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs1" class="collapse">						
                            <!-- <li class="">
                            <a href="Tithes.php"><i class="icon-chevron-right"></i><i class="icon-money"></i> Tithes Paid</a>
                            </li> -->
							<li class="">
                            <a href="addTithes.php"><i class="icon-chevron-right"></i><i class="icon-money"></i> Tithes Paid</a>
                            </li>
						    <!-- <li class="">
                            <a href="offering.php"><i class="icon-chevron-right"></i><i class="icon-money"></i> Offering</a>
                            </li> -->
							<li class="">
                            <a href="addoffering.php"><i class="icon-chevron-right"></i><i class="icon-money"></i> Offering</a>
                            </li>
							<!-- <li class="">
                            <a href="giving.php"><i class="icon-chevron-right"></i><i class="icon-money"></i> Other Giving</a>
                            </li> -->
							<li class="">
                            <a href="giving.php"><i class="icon-chevron-right"></i><i class="icon-money"></i> Other Giving</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* manage System user sidebar*------->	
						<li>						
						    <a href="admin_user.php" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-group"></i><i>&nbsp;System User</i>
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs2" class="collapse">						
                            
						    <li class="">
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;System User</a>
                            </li>
						    </ul>
						</li>
						
						<!------/.* System Log sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-warning-sign"></i><u>&nbsp;System log</u>
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs3" class="collapse">						
                            <li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-warning-sign"></i> Activity Log</a>
                            </li>
						    
						    </ul>
						</li>
						
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs5"><i class="icon-chevron-right"></i><i class="icon-book"></i><u>&nbsp;Events manager</u>
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs5" class="collapse">						
                            <li class="">
                            <a href="events.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i> Add event</a>
                            </li>
						    <li class="">
                            <a href="upcoming.php"><i class="icon-chevron-right"></i><i class="icon-trophy"></i> Upcoming </a>
                            </li>
						    </ul>
						</li>
					  <!------/.* notification sidebar*------->
					  
						
                        <li class="active">
                           <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Advance Search 
						   <div class="muted pull-right"><i class="caret"></i></div></a>
                           <ul id="bs4" class="collapse">
                           <li>
                           <a href="#mymodal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;members</a>
                           </li>
                                                    
                           </ul>
                        </li>
                  </ul>					
				<?php include('search_form.php'); ?>
				<?php include('search_form.php'); ?>										
    </div>
						
    </body>