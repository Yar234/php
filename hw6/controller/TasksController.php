<?php
require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
session_start();

$pageHeader = "Задачи";

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
  unset($_SESSION['username']);
}

$username = null;
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username']->getUsername();
} else {
  header("Location: /");
  die();
}

$taskProvider = new TaskProvider();

$tasks = [
  'Сходить в магазин',
  'Пойти в парк'
];

include "view/tasks.php";
