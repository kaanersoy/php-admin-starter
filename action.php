<?php
include('./utils/functions.php');
include('./utils/database.php');
include('./utils/config.php');

$action = $_GET["action"];

if ($action == "auth") {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $response = login_auth($db_connection, $email, $password, $website_domain);
  echo $response;
  if ($response == "401") {
    return false;
  }
  session_start();
  $_SESSION["admin_token"] = $secret;
}

if ($action == "logout") {
  session_destroy();
  header("Location: {$website_domain}");
}
