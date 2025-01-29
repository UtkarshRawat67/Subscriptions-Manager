<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: ../login.html");
  exit();
}
require 'db_connect.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="../js/script.js"></script>
</head>
<body>
  <div class="container">
    <h2>Your Subscriptions</h2>
    <table>
      <tr>
        <th>Service</th>
        <th>Amount</th>
        <th>Next Billing Date</th>
        <th>Action</th>
      </tr>
      <?php
      
      $stmt = $conn->prepare("SELECT * FROM subscriptions WHERE user_id = ?");
      $stmt->bind_param("i", $_SESSION['user_id']);
      $stmt->execute();
      $result = $stmt->get_result();

      while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['service_name']}</td>
                <td>\${$row['subscription_amount']}</td>
                <td>{$row['billing_date']}</td>
                <td><button onclick='deleteSubscription({$row['id']})'>Delete</button></td>
              </tr>";
      }
      ?>
    </table>
    <a href="add-subscription.php" class="btn">Add Subscription</a>
  </div>
</body>
</html>