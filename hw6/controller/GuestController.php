<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();

$guest = [];

$pageHeader = "Гостевая страница";

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
  unset($_SESSION['username']);
  session_destroy();
}

$username = null;
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUsername();
}

require_once "view/guest.php";
