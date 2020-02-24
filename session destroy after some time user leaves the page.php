<?php
session_start();

// destroy every 2 minutes
// or 120 seconds

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 120)) {
    // last request was more than 2 minutes ago
    session_destroy();   // destroy session data in storage
}
else
{
	echo $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
	//redirect to login page
}
// end of code
?>

<?php

 ?>