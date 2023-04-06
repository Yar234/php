<?php
require_once 'model/User.php';
require_once 'model/UserProvider.php';
session_start();

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
  unset($_SESSION['username']);
}

$username = null;

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUsername();
}

$tasks = [
  'Сходить в магазин',
  'Пойти в парк'
];

include "view/tasks.php";
