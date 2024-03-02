<?php
// Check for error parameter in the URL
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    echo '<div class="alert alert-danger">' . $error . '</div> </div>';
}


?>