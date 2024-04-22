<?php
include 'db.php';

session_start();
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['userid'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: login_success.php"); 
    } else {
        $message = "Invalid username or password.";
    }
}
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
    <title>Login</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="form-container">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <a href="signup.php" class="link-button">Don't have an account? Sign Up!</a>
            <p class="form-message"><?php echo $message; ?></p>
        </form>
    </div>
</body>
</html>
