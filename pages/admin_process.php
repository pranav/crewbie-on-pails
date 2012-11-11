<?php

session_start();
if(!isset($_SESSION['loggedin']))
  header("Location:/");

# Edit an existing user
if($_POST['type'] == "edit" && $_POST['name'] != NULL && $_POST['points'] != NULL){
  editUser($_POST['name'], $_POST['points'], $_POST['achievements']);
  header("Location:/admin/success");

  # Add a new user
} elseif($_POST['type'] == "add" && $_POST['name'] != NULL && $_POST['points'] != NULL){
  addUser($_POST['name'], $_POST['points'], $_POST['achievements']);
  header("Location:/admin/success");

  # Send to 404 page
} else
  header("Location:/404");

?>
