<?php
session_start();
require 'db_connect.php';


if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.html");
  exit();
}


$subscriptionId = $_GET['id'];
$userId = $_SESSION['user_id'];


$stmt = $conn->prepare("DELETE FROM subscriptions WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $subscriptionId, $userId);
$stmt->execute();


header("Location: dashboard.php");
exit();
?>