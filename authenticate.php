<?php
session_start();
require_once "business.php";

$host = $_POST['server'] ?? '';
$database = $_POST['database'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

try {
    $business = new Business($host, $database, $username, $password);

    $_SESSION['server'] = $host;
    $_SESSION['database'] = $database;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    header("Location: dashboard.php");
    exit;

} catch (Exception $e) {
    $_SESSION['error'] = "Connection failed." . $e->getMessage();
    header("Location: login.php");
    exit;
}