<?php

include('header.php');

$users = loadUsers();
foreach($users as $user){
?>
<div class="user">
  <h2><a href="/user/<?=$user->name?>"><?=$user->name?></a></h2>
  <div class="progressbarouter"><div class="progressbarinner" style="width:<?=$user->points?>%;"></div></div>
</div>
<?php
}

include('footer.php');

?>
