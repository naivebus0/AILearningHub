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