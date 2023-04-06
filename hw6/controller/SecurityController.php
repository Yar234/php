<?php

require_once 'model/UserProvider.php';
require_once 'model/User.php';

session_start();

// логика входа
$error = null;
if (isset($_POST['username'], $_POST['password'])) {
  ['username' => $username, 'password' => $password] = $_POST;

  $userProvider = new UserProvider();
  $user = $userProvider->getByUsernameAndPassword($username, $password);

  if ($user === null) {
    $error = 'Пользователь с указанными учетными данными не найден';
  } else {
    $_SESSION['username'] = $user;
    header("Location: index.php");
    die();
  }
}


// логика выхода
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
  unset($_SESSION['username']);
  // unset($_SESSION['tasks']);
  header("Location: index.php");
  //   die();
}

$username = null;
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUsername();
}

include "view/signin.php";
