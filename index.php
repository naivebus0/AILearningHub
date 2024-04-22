<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.typekit.net/zwt5zgl.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>AI Learning Hub</title>
  </head>
  <body>
    <div class="wrapper">
      <nav class="section-nav">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="current_state.php">Current State</a></li>
    <li><a href="historical-background.php">Historical Background</a></li>
    <li class="dropdown">
                <a href="#">Games</a>
                <div class="dropdown-content">
                    <a href="quiz.php">Take the AI Quiz</a>
                    <a href="leaderboard.php">AI Quiz Leaderboard</a>
                </div>
            </li>
    <li><a href="future-of-ai.php">Future of AI</a></li>
    <li><a href="ai-in-cybersecurity.php">AI in Cybersecurity</a></li>
        <?php if(isset($_SESSION['username'])): ?>
            <li><a href="profile.php">Hello, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
        <?php else: ?>
            <li class="dropdown">
                <a href="#">Accounts</a>
                <div class="dropdown-content">
                    <a href="signup.php">Sign Up</a>
                    <a href="login.php">Log In</a>
                </div>
            </li>
        <?php endif; ?>
    </ul>
</nav>

      <section id="about" class="full-page">
        <div class="section-info">
          <h1>What is this?</h1>
          <p>
            Welcome to my website! My name is Aatif Nazir, a cybersecurity
            student with a passion for exploring the specifics of artificial
            intelligence, otherwise known as AI, technology, and everything in between.
          </p>

          <p class="about-description">
            This website serves as a guide to the world of AI, catering to both
            newcomers and seasoned enthusiasts, offering detailed explanations
            and insights to deepen your understanding.
          </p>
        </div>
      </section>

      <section id="current-state" class="full-page">
        <div class="section-info">
          <h2>Current State of Artificial Intelligence</h2>
          <p>What is AI and what can I do with it?</p>
          <p>More information here:</p>
          <a href="current_state.php" class="learn-more-btn">Learn More</a>
        </div>
      </section>

      <section id="historical-background" class="full-page">
        <div class="section-info">
          <h1>Historical Background of AI</h1>
          <p>Where did AI come from?</p>
          <p>More information here:</p>
          <a href="historical-background.php" class="learn-more-btn"
            >Learn More</a
          >
        </div>
      </section>

      <section id="future-of-ai" class="full-page">
        <div class="section-info">
          <h1>Future of Artificial Intelligence</h1>
          <p>Where is AI going? What can I do to utilise and prepare?</p>
          <p>More information:</p>
          <a href="future-of-ai.php" class="learn-more-btn">Learn More</a>
        </div>
      </section>

      <section id="ai-in-cybersecurity" class="full-page">
        <div class="section-info">
          <h1>AI Applications in Cybersecurity</h1>
          <p>Discover how AI is utilized in the field of cybersecurity.<p>
          <p>More information here:</p>
          <a href="ai-in-cybersecurity.php" class="learn-more-btn"
            >Learn More</a
          >
        </div>
      </section>

      <section id="experiences" class="full-page">
        <div class="section-info">
          <h1>Have a few minutes?</h1>
          <p>I would love to hear your experiences & thoughts on AI!</p>
          <p>Please take a moment to participate in this survey!</p>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSd2gzniGLbg2M3Orc48pn07Fe-edL4yy2OfJ87eZEoVnbdxxQ/viewform?usp=sf_link" target="_blank" id="surveyLink" class="learn-more-btn">Take the Survey</a><br>
          <p>Note: Clicking this link will open the Google Survey in another tab.</p>
    </div>
      </section>

      <section id="quiz" class="full-page">
        <div class="section-info">
          <h1>Want to test your knowledge?</h1>
          <p>
            Take on a quiz to test your knowledge on AI.
          </p>
          <a href="signup.php" class="learn-more-btn">Create Account</a>
          <a href="login.php" class="learn-more-btn">Already have an account?</a>
          <a href="quiz.php" class="learn-more-btn">Test Me!</a>
        </div>
      </section>

      <section id="create-account" class="full-page">
        <div class="section-info">
          <h1>Join Our Community</h1>
          <p>
            Interested in delving deeper into the world of AI? Create an account
            with us to unlock more features and stay updated with the latest AI
            news and other topics coming soon.
          </p>
          <a href="signup.php" class="learn-more-btn">Create Account</a>
        </div>
      </section>

      <footer>
        <div class="footer-content">
          <p>Aatif Nazir | Contact me: 200112792@aston.ac.uk</p>
        </div>
      </footer>
    </div>
    <script src="scripts.js"></script>

  </body>
</html>


