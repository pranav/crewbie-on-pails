<?php

include('header.php');

$users = loadUsers();
foreach($users as $user){
  $achievements = implode(', ', $user->achievements);
?>
<div class="user">
  <h2><a href="/user/<?=$user->name?>"><?php echo ldaplookup($user->name); ?></a><small><?=$achievements?></small></h2>
  <div class="progressbarouter"><div class="progressbarinner" style="width:<?=$user->points?>%;"></div></div>
</div>
<?php
}

include('footer.php');

?>
