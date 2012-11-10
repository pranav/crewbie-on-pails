<?php

if($_POST['type'] == "edit" && $_POST['name'] != NULL && $_POST['points'] != NULL){
  editUser($_POST['name'], $_POST['points'], $_POST['achievements']);
  header("Location:/admin/success");
} else
  header("Location:/404");

?>
