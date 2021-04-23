<?php
// Fetches data from mysql database and turning it to json.
function fetch_json_data($db_connection, $query)
{
  if ($result = mysqli_query($db_connection, $query)) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $jsondata[] = $row;
    }
    return json_encode($jsondata);
  }
}

// Only use it with count() sql query
function check_data($db_connection, $query)
{
  if ($result = mysqli_query($db_connection, $query)) {
    $row = $result->fetch_assoc();
    if ($row["count"] > 0) {
      return true;
    }
    return false;
  }
}

function login_auth($db_connection, $email, $password, $redirect_url)
{
  $isUserExists = check_data($db_connection, "SELECT count(*) as count FROM user WHERE email='{$email}' AND password='{$password}'");
  if (!$isUserExists) {
    return "401";
  }
  header("refresh: 2; url={$redirect_url}");
  return "You will be redirected after 2 secs";
}

function check_token_redirect($redirect_url)
{
  if (!$_SESSION["admin_token"]) {
    return header("Location:{$redirect_url}");
  }
}
