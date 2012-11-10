<?php

# Get the request url
# getURL : Nothing -> PHPArray of the url
# If the url is http://crew.wvh.io/user/spuner,
# the function will return: array("user", "spuner");
function getURL() {
  $url = explode('/', $_SERVER['REQUEST_URI']);
  array_shift($url); # This is because the first one is always null
  if(strlen($url[0]) < 3)
    $url[0] = "home";

  return $url;
}

# Loads a page from the pages folder. This will go straight to ouput
# Returns nothing.
function getPage($page) {
  if(file_exists("pages/$page.php"))
    include("pages/$page.php");
  else
    include("pages/404.php");
}



?>
