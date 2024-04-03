<script src="restriction.js"></script>
<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Enter Your Giving</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="amount" id="focusedInput" type="text" placeholder = "Amount" require oninput="limitInput(this, 8)" onkeypress="return isNumberKey(event)">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="trcode" id="focusedInput" type="text" placeholder = "Mode Of Payment" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="for" id="focusedInput" type="text" placeholder = "Giving Towards" required>
                                          </div>
                                        </div>
										
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
								
<?php

if (isset($_POST['save'])){
$firstname = $_POST['amount'];
$lastname = $_POST['trcode'];
$username = $_POST['for'];




mysqli_query($conn,"insert into giving (Amount,Trcode,na,ya) values('$firstname','$lastname','$session_id','$username')")or die(mysqli_error());

?>
<script>
window.location = "giving.php";
$.jGrowl("The Giving Successfully added", { header: 'Giving added' });
</script>
<?php
}

?>
<a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="dashboardy.php"><i class="icon-arrow-left"></i> Back</a></p>		