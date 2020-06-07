<?php
//This is the welcome page for my website. The user is redirected here after they successfully log in.

//Need the session
session_start();

//Print a greeting
echo "<h2>Welcome to my simple website</h2>";
echo "<p>Hello, " . $_SESSION['email'] . "</p>";


//Print how long you've been logged in
date_default_timezone_set('America/New_York');
echo "<p>You have been logged in: " . date('g:i a', $_SESSION['loggedin']) . ".</p>";

//Create a logout link
echo "<p><a href='logout.php'>Logout</a></p>";

?>
