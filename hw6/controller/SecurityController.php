<?php

require_once 'model/UserProvider.php';

session_start();

$pdo = require 'db.php';
$error = null;

// логика выхода
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
  unset($_SESSION['username']);
  unset($_SESSION['tasks']);
  session_destroy();
  header("Location: index.php");
  die();
}

// логика входа
if (isset($_POST['username'], $_POST['password'])) {
  ['username' => $username, 'password' => $password] = $_POST;

  $userProvider = new UserProvider($pdo);
  $user = $userProvider->getByUsernameAndPassword($username, $password);

  if ($user === null) {
    $error = 'Пользователь с указанными учетными данными не найден';
  } else {
    $_SESSION['user'] = $user;
    $_SESSION['id'] = $user->getId();
    header("Location: index.php");
    die();
  }
}

// $username = null;
// if (isset($_SESSION['username'])) {
//   $username = $_SESSION['username']->getUsername();
// }

include "view/signin.php";
