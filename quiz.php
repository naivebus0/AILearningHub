<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
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
  <title>Welcome Back</title>
</head>
<body>
  <?php include 'header.php'; ?>
<div class="profile-container" id="quiz">
    <div class="quiz-question" id="question1">
        <h2>Question 1: Which AI tool is specialised in grammar checking?</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(1, 'a')">A: Chatgpt</button>
            <button class="quiz-button" onclick="selectOption(1, 'b')">B: QuillBot</button>
            <button class="quiz-button" onclick="selectOption(1, 'c')">C: Gemini</button>
            <button class="quiz-button" onclick="selectOption(1, 'd')">D: Grok</button>
            <button class="quiz-button" onclick="selectOption(1, 'e')">E: None of the above</button>
        </div>
    </div>
        <div class="quiz-question" id="question2" style="display:none;">
        <h2>Question 2: Which AI tool is able to read all types of content? [Text, Audio, Video, Images, Code, Etc]</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(2, 'a')">A: ChatGPT</button>
            <button class="quiz-button" onclick="selectOption(2, 'b')">B: Gemini</button>
            <button class="quiz-button" onclick="selectOption(2, 'c')">C: Quillbot</button>
            <button class="quiz-button" onclick="selectOption(2, 'd')">D: Grok</button>
            <button class="quiz-button" onclick="selectOption(2, 'e')">E: None of the above</button>
        </div>
    </div>
    <div class="quiz-question" id="question3" style="display:none;">
        <h2>Question 3: When it comes to AI tools, what is a concern currently arising in customer service roles?</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(3, 'a')">A: Job Displacement</button>
            <button class="quiz-button" onclick="selectOption(3, 'b')">B: Waiting Times</button>
            <button class="quiz-button" onclick="selectOption(3, 'c')">C: Effectiveness</button>
            <button class="quiz-button" onclick="selectOption(3, 'd')">E: Price</button>
            <button class="quiz-button" onclick="selectOption(3, 'e')">E: All of the above</button>
        </div>
    </div>
        <div class="quiz-question" id="question4" style="display:none;">
        <h2>Question 4: Which AI tool was developed by OpenAI?</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(4, 'a')">A: Grok</button>
            <button class="quiz-button" onclick="selectOption(4, 'b')">B: QuillBot</button>
            <button class="quiz-button" onclick="selectOption(4, 'c')">C: Gemini</button>
            <button class="quiz-button" onclick="selectOption(4, 'd')">D: ChatGPT</button>
            <button class="quiz-button" onclick="selectOption(4, 'e')">E: None of the above</button>
        </div>
    </div>
            <div class="quiz-question" id="question5" style="display:none;">
        <h2>Question 5: What was Alan Turing Known for?</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(5, 'a')">A: Turing Table</button>
            <button class="quiz-button" onclick="selectOption(5, 'b')">B: Turing Templates</button>
            <button class="quiz-button" onclick="selectOption(5, 'c')">C: Turing Test</button>
            <button class="quiz-button" onclick="selectOption(5, 'd')">D: Turing Toast</button>
            <button class="quiz-button" onclick="selectOption(5, 'e')">E: None of the above</button>
        </div>
    </div>
            <div class="quiz-question" id="question6" style="display:none;">
        <h2>Question 6: What was the Turing Test about?</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(6, 'a')">A: Testing AI capabilities</button>
            <button class="quiz-button" onclick="selectOption(6, 'b')">B: Comparing AI to Human Responses</button>
            <button class="quiz-button" onclick="selectOption(6, 'c')">C: Testing if machines can make humans believe they are humans too</button>
            <button class="quiz-button" onclick="selectOption(6, 'd')">D: Replicating human like responses</button>
            <button class="quiz-button" onclick="selectOption(6, 'e')">E: All of the above</button>
        </div>
    </div>
                <div class="quiz-question" id="question7" style="display:none;">
        <h2>Question 7: What happened to the robot after working for 20 hours?</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(7, 'a')">A: Carried on working</button>
            <button class="quiz-button" onclick="selectOption(7, 'b')">B: Malfunctioned</button>
            <button class="quiz-button" onclick="selectOption(7, 'c')">C: Collapsed</button>
        </div>
    </div>
                    <div class="quiz-question" id="question8" style="display:none;">
        <h2>Question 8: What are some disavantages to AI in Cybersecurity</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(8, 'a')">A: Ethical Concerns</button>
            <button class="quiz-button" onclick="selectOption(8, 'b')">B: Privacy Invasion</button>
            <button class="quiz-button" onclick="selectOption(8, 'c')">C: Misunderstanding</button>
            <button class="quiz-button" onclick="selectOption(8, 'd')">D: All of the above</button>
        </div>
    </div>
                       <div class="quiz-question" id="question9" style="display:none;">
        <h2>Question 9: What is one advantage to AI in Cybersecurity that we listed</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(9, 'a')">A: Threat Detection</button>
            <button class="quiz-button" onclick="selectOption(9, 'b')">B: Efficiency</button>
            <button class="quiz-button" onclick="selectOption(9, 'c')">C: Cost</button>
            <button class="quiz-button" onclick="selectOption(9, 'd')">D: None of the above</button>
        </div>
    </div>
                        <iv class="quiz-question" id="question10" style="display:none;">
        <h2>Question 10: What can go wrong when using QuillBot for grammar checking?</h2>
        <div class="quiz-options">
            <button class="quiz-button" onclick="selectOption(10, 'a')">A: Incorrect spelling</button>
            <button class="quiz-button" onclick="selectOption(10, 'b')">B: Broken English</button>
            <button class="quiz-button" onclick="selectOption(10, 'c')">C: Misunderstanding of Context</button>
            <button class="quiz-button" onclick="selectOption(10, 'd')">D: None of the above</button>
        </div>
    </div>
</div>
<div id="quiz-results" class="profile-container" style="display:none;">
    Quiz completed! Your score: <span id="score-display"></span> / <span id="total-questions"></span>
    <button onclick="window.location.href='leaderboard.php';" class="link-button" style="display:none;" id="view-leaderboard">View Leaderboard</button>
</div>

<script>
let currentQuestion = 1;
let score = 0;
const totalQuestions = 10; 

function selectOption(questionNumber, option) {

    let correctAnswers = {
        1: 'b',
        2: 'b', 
        3: 'a', 
        4: 'd', 
        5: 'c', 
        6: 'e', 
        7: 'c', 
        8: 'd', 
        9: 'a', 
        10: 'c', 
    };


    if (option === correctAnswers[questionNumber]) {
        score++;
    }
    const nextQuestion = questionNumber + 1;
    if (nextQuestion <= totalQuestions) {
        document.getElementById(`question${questionNumber}`).style.display = "none";
        document.getElementById(`question${nextQuestion}`).style.display = "block";
    } else {

        document.getElementById('quiz').style.display = "none";
        document.getElementById('quiz-results').style.display = "block";
        document.getElementById('score-display').textContent = score;
        document.getElementById('total-questions').textContent = totalQuestions;
        document.getElementById('view-leaderboard').style.display = "block"; 
        saveScore(score);
    }
}

function saveScore(score) {
    if (confirm("Do you want to add your score to the leaderboard?")) {
        fetch('update_score.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `score=${score}`
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
        })
        .catch(error => console.error('Error:', error));
    }
}
</script>

</body>
</html>
