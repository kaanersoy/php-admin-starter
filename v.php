<?php
session_start();
include('./utils/functions.php');
include('./utils/config.php');
check_token_redirect($website_domain);

$view = $_GET["view"];

$pages = array(
  "add-page" => "add-page",
);

foreach ($pages as $page) {
  if (!file_exists("./views/{$page}.php")) {
    return;
  }
  return include_once("./views/{$page}.php");
}
return include('./views/404.php');
