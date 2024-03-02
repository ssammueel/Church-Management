<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <span class="brand" href="#">Church manager Admin Panel</span>
            </div>
            <!--.nav-collapse -->
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '$session_id'") or die(mysqli_error());
                    $row = mysqli_fetch_array($query);

                    if ($row) { // Check if $row is not null
                    ?>
                        <li class="dropdown">
                            <a role="button" class="dropdown-toggle" data-toggle="dropdown">
                                <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>">&nbsp;<?php echo $row['firstname'] . " " . $row['lastname'];  ?> <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="change_password_admin.php"><i class="icon-cog"></i>&nbsp;Change Password</a>
                                    <a tabindex="-1" href="#mymodal3" data-toggle="modal"><i class="icon-picture"></i>&nbsp;Change Picture</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
                                </li>
                            </ul>
                        </li>
                    <?php
                    } else {
                        // Handle the case where no results are found
                    ?>
                        <li class="dropdown">
                            <!-- Display a default image or handle it as needed -->
                            <a role="button" class="dropdown-toggle" data-toggle="dropdown">
                                <img id="avatar1" class="img-responsive" src="default_image.jpg">&nbsp;Unknown User <i class="caret"></i>
                            </a>
                            <!-- Rest of your code -->
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<?php include('admin_change_picture.php'); ?>
