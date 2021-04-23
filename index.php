<?php
session_start();
include('./utils/config.php');

if (!isset($_SESSION["admin_token"]) && $_SESSION["admin_token"] != $secret) {
  include_once('./login.php');
  return;
}
header("refresh: 0; url={$website_domain}v.php?view=geldik");
