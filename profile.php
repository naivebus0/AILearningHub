<?php
include 'db.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.typekit.net/zwt5zgl.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <title>Future of AI</title>
  <?php include 'header.php'; ?>
</head>
<body>
<div class="profile-container">
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>This is your profile page.</p>
    <a href="index.php" class="link-button">Back to Home</a><br>

    <a href="logout.php" class="link-button">Logout</a>
</div>
</body>
</html>
