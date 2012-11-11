<?php

# Contains any global configuration settings
include("config.php");

global $mem;
$mem = new Memcache();
$mem->connect("localhost", 11211);
# Contains most of my functions
include("lib.php");

# Load the page
$url = getURL();
getPage($url[0]);
?>
