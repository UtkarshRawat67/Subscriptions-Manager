<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.html");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $service_name = $_POST['service_name'];
  $amount = $_POST['subscription_amount'];
  $billing_date = $_POST['billing_date'];
  $user_id = $_SESSION['user_id'];

  $stmt = $conn->prepare("INSERT INTO subscriptions (user_id, service_name, subscription_amount, billing_date) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("isds", $user_id, $service_name, $amount, $billing_date);

  if ($stmt->execute()) {
    header("Location: ../dashboard.php");
    exit();
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Subscription</title>
  <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body>
  <div class="container">
    <h2>Add Subscription</h2>
    <form method="POST">
      <input type="text" name="service_name" placeholder="Service Name (e.g., Netflix)" required>
      <input type="number" name="subscription_amount" placeholder="Amount" step="0.01" required>
      <input type="date" name="billing_date" required>
      <button type="submit" class="btn">Add</button>
    </form>
    <a href="../dashboard.php" class="btn">Back to Dashboard</a>
  </div>
</body>
</html>