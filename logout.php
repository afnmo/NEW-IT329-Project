<?php
session_start(); // start the session
session_destroy(); // destroy all session data
header('Location: homepage.html'); // redirect to the home page
exit(); // terminate the script execution
?>

