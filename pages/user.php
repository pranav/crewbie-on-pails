<?php

include('header.php');

$url = getURL();
$user = getUser(urldecode($url[1]));

?>
<div class="user">
  <h2><?=$user->name?></h2>
  <div class="progressbarouter"><div class="progressbarinner" style="width:<?=$user->points?>%"></div></div>
  <h3>Achievements</h3>
  <ul>
<?php foreach($user->achievements as $achievement){ ?>
  <li><?=$achievement?></li>
<?php }

echo "</ul></div>";
include('footer.php');

?>
