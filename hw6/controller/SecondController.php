<?php

require_once 'model/User.php';
session_start();
$pageHeader = "Вторая";

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
  unset($_SESSION['username']);
}

$username = null;
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUsername();
}

include "view/second.php";
