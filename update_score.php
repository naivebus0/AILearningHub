<?php
include 'db.php';
session_start();

if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['score'])) {
    $user_id = $_SESSION['userid'];
    $score = $_POST['score'];
    $quiz_date = date('Y-m-d');

    $sql = "INSERT INTO scores (user_id, score, quiz_date) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$user_id, $score, $quiz_date])) {
        $message = "Score saved successfully!";
    } else {
        $message = "Failed to save score.";
    }
}

echo $message;
?>
