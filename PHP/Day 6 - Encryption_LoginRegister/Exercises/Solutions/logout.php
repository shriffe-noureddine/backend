<?php

// Retrieve session
session_start();

// Unset all session's variables 
session_unset()

// Destroy session on the server
session_destroy();

// Redirect to login page
header("Location : ./login.php");