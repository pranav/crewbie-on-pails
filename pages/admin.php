<?php

include('header.php');

echo "<div class=\"admin\">";

# For each user, generate the following HTML
$users = loadUsers();
foreach($users as $user){
  $achievements = implode(", ", $user->achievements);
?>
<div class="user">
  <h2><?php echo ldaplookup($user->name); ?><small><?=$achievements?></small></h2>
  <div class="progressbarouter"><div class="progressbarinner" style="width:<?=$user->points?>%"></div></div>
  <form action="/admin_process" method=POST>
  <p>Points <input type="text" name="points" value="<?=$user->points?>"></p>
  <p>Achievements<input type="text" name="achievements" style="width:300px" value="<?=$achievements?>"></p>
  <input type="hidden" name="type" value="edit">
  <input type="hidden" name="name" value="<?=$user->name?>">
  <p><input type="submit" value="Update"></p>
  </form>
</div>

<?php } ?>

<div class="user">
  <h2>Add new user</h2>
  <form action="/admin_process" method=POST>
  <p>LDAP Username <input type="text" name="name"></p>
  <p>Points <input type="text" name="points"></p>
  <p>Achievements<input type="text" name="achievements" style="width:300px" ></p>
  <input type="hidden" name="type" value="add">
  <p><input type="submit" value="Update"></p>
 
<?php
echo "</div>";
include('footer.php');

?>
