<?php
include 'db.php';
session_start();

$query = "SELECT username, score, DATE_FORMAT(quiz_date, '%D %M %Y') AS formatted_date FROM scores JOIN users ON scores.user_id = users.id ORDER BY score DESC, quiz_date ASC LIMIT 10";
$stmt = $pdo->query($query);
$scores = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
  <title>History of AI</title>
</head>
<body>
  <?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Leaderboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="profile-container">
    <h2>Quiz Leaderboard</h2>
    <table class="data-table">
        <thead>
            <tr>
                <th>User</th>
                <th>Score</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scores as $score): ?>
                <tr>
                    <td><?php echo htmlspecialchars($score['username']); ?></td>
                    <td><?php echo $score['score']; ?></td>
                    <td><?php echo $score['formatted_date']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="quiz.php" class="link-button">Try Quiz?</a><br>
</div>
</body>
</html>
