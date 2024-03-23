<?php
require_once 'model/User.php';
session_start();

$pageHeader = "Добро пожаловать в TODO";

// if (isset($_GET['action']) && $_GET['action'] === 'logout') {
//   unset($_SESSION['username']);
//   session_destroy();
// }

$username = null;
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUsername();
}

include "view/home.php";
