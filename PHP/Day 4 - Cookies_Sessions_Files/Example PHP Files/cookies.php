<?php
// Create a cookie
// This cookie will expire after 2 minutes
setcookie("username", "simon", time() + 10);
setcookie("date", "2019-07-02", time() + 10);

echo $_COOKIE["username"];
var_dump($_COOKIE);
