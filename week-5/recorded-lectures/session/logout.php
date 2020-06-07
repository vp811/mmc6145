<?php
//This page is the logout page. It destroys the session information

//Need the session
session_start();

//Reset the session array
$_SESSION = [];

//Destroy the session data on the server
session_destroy();

?>

<h2>Welcome to my website!</h2>
<p>You are now logged out.</p>
<p>Thank you for using my site. We you that you liked it</p>
