<script src="restriction.js"></script>
   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Enter  Giving</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="amount" id="focusedInput" type="text" placeholder = "Amount" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="trcode" id="focusedInput" type="text" placeholder = "Transaction Code" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="na" id="focusedInput" type="text" placeholder = "mobile Number" required pattern="\d{10}" oninput="Limit(this, 10)" onkeydown="return isNumberKey(event);" onkeypress="return isNumberKey(event)">
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
$na = $_POST['na'];





mysqli_query($conn,"insert into offering (Amount,Trcode,na) values('$firstname','$lastname','$na')")or die(mysqli_error());

?>
<script>
window.location = "offering.php";
$.jGrowl("The Giving Successfully added", { header: 'Giving added' });
</script>
<?php
}

?>