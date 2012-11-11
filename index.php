<?php

# Contains any global configuration settings
include("config.php");

# Contains most of my functions
include("lib.php");

# Load the page
$url = getURL();
getPage($url[0]);
?>
