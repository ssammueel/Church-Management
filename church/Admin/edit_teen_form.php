<script src="restriction.js"></script>
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Edit Teen</i></div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <!-- Form starts here -->
                <form method="post">
                    <!-- First Name -->
                    <div class="control-group">
                        <p>
                            <div class="controls">
                                <p>
                                    <input class="input focused" name="fname" id="focusedInput" type="text" placeholder="First Name" required oninput="restrictToLetters(this)" value="<?php echo isset($edit_teen_data['fname']) ? $edit_teen_data['fname'] : ''; ?>">
                                </p>
                            </div>
                        </p>
                    </div>

                    <!-- Surname -->
                    <div class="control-group">
                        <p>
                            <div class="controls">
                                <p>
                                    <input class="input focused" name="sname" id="focusedInput" type="text" placeholder="Surname" required oninput="restrictToLetters(this)" value="<?php echo isset($edit_teen_data['sname']) ? $edit_teen_data['sname'] : ''; ?>">
                                </p>
                            </div>
                        </p>
                    </div>

                    <!-- Last Name -->
                    <div class="control-group">
                        <p>
                            <div class="controls">
                                <p>
                                    <input class="input focused" name="lname" id="focusedInput" type="text" placeholder="Last name" oninput="restrictToLetters(this)" value="<?php echo isset($edit_teen_data['lname']) ? $edit_teen_data['lname'] : ''; ?>">
                                </p>
                            </div>
                        </p>
                    </div>

                    <!-- Gender -->
                    <div class="control-group">
                        <p>
                            <div class="controls">
                                <p>
                                    <select class="input focused" name="gender" id="focusedInput" required="required" type="text" required>
                                        <option value="Select Gender">Select Gender</option>
                                        <option value="male" <?php echo ($edit_teen_data['Gender'] == 'male') ? 'selected' : ''; ?>>Male</option>
                                        <option value="female" <?php echo ($edit_teen_data['Gender'] == 'female') ? 'selected' : ''; ?>>Female</option>
                                    </select>
                                </p>
                            </div>
                        </p>
                    </div>

                    <!-- Birthday -->
                    <div class="control-group">
                        <p>
                            <div class="controls">
                                <p>
                                    <input class="input focused" name="birthday" id="focusedInput" type="date" placeholder="Birthday" value="<?php echo isset($edit_teen_data['birthday']) ? $edit_teen_data['birthday'] : ''; ?>">
                                </p>
                            </div>
                        </p>
                    </div>

                    <!-- Residence -->
                    <div class="control-group">
                        <p>
                            <div class="controls">
                                <p>
                                    <input class="input focused" name="residence" id="focusedInput" type="text" placeholder="Residence" value="<?php echo isset($edit_teen_data['residence']) ? $edit_teen_data['residence'] : ''; ?>">
                                </p>
                            </div>
                        </p>
                    </div>

                    <!-- Place of Birth -->
                    <div class="control-group">
                        <p>
                            <div class="controls">
                                <p>
                                    <input class="input focused" name="pob" id="focusedInput" type="text" placeholder="Place of Birth" value="<?php echo isset($edit_teen_data['pob']) ? $edit_teen_data['pob'] : ''; ?>">
                                </p>
                            </div>
                        </p>
                    </div>

                    <!-- Ministry -->
                    <div class="control-group">
                        <p>
                            <div class="controls">
                                <p>
                                    <input class="input focused" name="ministry" id="focusedInput" type="text" placeholder="Parent Name" value="<?php echo isset($edit_teen_data['ministry']) ? $edit_teen_data['ministry'] : ''; ?>">
                                </p>
                            </div>
                        </p>
                    </div>

                    <!-- Mobile Number -->
                    <div class="control-group">
                        <p>
                            <div class="controls">
                                <p>
                                    <input class="input focused" name="mobile" id="focusedInput" type="text" placeholder="Mobile Number" required pattern="\d{10}" oninput="limitInput(this, 10); isNumberKey(event);" onkeydown="return isNumberKey(event);" onkeypress="return isNumberKey(event)" value="<?php echo isset($edit_teen_data['mobile']) ? $edit_teen_data['mobile'] : ''; ?>">
                                </p>
                            </div>
                        </p>
                    </div>

                    <!-- Save Button -->
                    <div class="control-group">
                        <div class="controls">
                        <button name="update" class="btn btn-info" id="update" data-placement="right" title="Click to Update"><i class="icon-plus-sign icon-large"> Update</i></button>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#save').tooltip('show');
                                    $('#save').tooltip('hide');
                                });
                            </script>
                        </div>
                    </div>
                </form>
                <!-- Form ends here -->
            </div>
        </div>
    </div>
    <!-- /block -->
</div>
     
<?php		
if (isset($_POST['update'])){
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$lname = $_POST['lname'];
$Gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$residence= $_POST['residence'];
$pob = $_POST['pob'];
$ministry = $_POST['ministry'];
$mobile= $_POST['mobile'];



mysqli_query($conn,"UPDATE teens SET fname = '$fname',sname ='$sname',lname='$lname',Gender='$Gender',Birthday='$birthday', Residence='$residence',pob='$pob',ministry='$ministry',mobile='$mobile' where id='$get_teens_id'") 
or die(mysqli_error());

mysqli_query($conn,"insert into activity_log (date,username,action)
 values(NOW(),'$admin_username','Edited teen $sname')")or die(mysqli_error());
?>
<script>
  window.location = "add_teen.php";
 $.jGrowl(" teens Successfully Update", { header: 'teens Update' });  
</script>
<?php
}
?>
