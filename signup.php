<?php
include 'db.php';

session_start();
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    $userCheckSql = "SELECT * FROM users WHERE username = ?";
    $userCheckStmt = $pdo->prepare($userCheckSql);
    $userCheckStmt->execute([$username]);

    if ($userCheckStmt->rowCount() > 0) {
        $message = "This username is already taken.";
    } else {
        if ($password == $confirm_password) {
            $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

            try {
                $stmt = $pdo->prepare($sql);
                if ($stmt->execute([$username, $passwordHashed])) {
    $userId = $pdo->lastInsertId();
    $_SESSION['userid'] = $userId;
    $_SESSION['username'] = $username;  

    header("Location: profile.php");
    exit();
}

            } catch (PDOException $e) {
                $message = "An error occurred during registration.";
            }
        } else {
            $message = "Passwords do not match.";
        }
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
  <?php include 'header.php'; ?>
  <title>Sign Up</title>
</head>
<body>
<div class="form-container">
    <h2>Sign Up</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" required placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" required placeholder="Password">
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" required placeholder="Confirm Password">
        </div>
        <button type="submit">Sign Up</button>
        <p class="form-message"><?php echo $message; ?></p>
        <a href="login.php" class="link-button">Already have an account? Log In</a>
    </form>
</div>
</body>
</html>
