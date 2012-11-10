<?php

include('header.php');

echo "<div class=\"admin\">";

# For each user, generate the following HTML
$users = loadUsers();
foreach($users as $user){
  $achievements = implode(",", $user->achievements);
?>
<div class="user">
  <h2><?=$user->name?></h2>
  <div class="progressbarouter"><div class="progressbarinner" style="width:<?=$user->points?>%"></div></div>
  <form action="/admin_process" method=POST>
  <p>Points <input type="text" name="points" value="<?=$user->points?>"></p>
  <p>Achievements<input type="text" name="achievements" style="width:300px" value="<?=$achievements?>"></p>
  <input type="hidden" name="type" value="edit">
  <input type="hidden" name="name" value="<?=$user->name?>">
  <p><input type="submit" value="Update"></p>
  </form>
</div>

<?php }

echo "</div>";
include('footer.php');

?>
