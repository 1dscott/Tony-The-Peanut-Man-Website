<?php
//Check to see if username/password came in post.
//If so, check the username/password and login the user.
if(!empty($_POST['user']) && !empty($_POST['pass'])) {
  $username = strtolower(trim($_POST['user']));
  $password = trim($_POST['pass']);
  if($username == 'admin' && $password == '123qwe')
    $_SESSION['user'] = 'admin';
  else
    $_SESSION['user'] = null;
}


if(!empty($_GET['logoff'])) $_SESSION['user'] = null;
//If the user is not logged in, redirect to the login page.
if(empty($_SESSION['user'])) {
  require_once('redirect.inc');
  redirect('login.html');
}
?>