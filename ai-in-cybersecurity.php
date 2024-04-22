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
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <title>AI in Cybersecurity</title>
</head>
<body>
  <?php include 'header.php'; ?>

<div class="section full-page" style="flex-direction: row;">
  <div class="text-content">
    <h2>AI Applications in Cybersecurity</h2>
    <p>As cyber threats evolve, AI has become a key part in enhancing cybersecurity measures. AI technologies are now game changing when it comes to developing smarter, scalable, and securer systems.</p>
    <p>AI systems can learn and adapt at a pace far faster than humanly possible, with far less mistakes, significantly reducing the window of opportunity for cyber attackers.</p>
    <p>Furthermore, AI is capable of predicting new attacks and can automatically suggest or implement defensive measures, such as blocking malicious IPs, often before humans detect a threat.</p>
    <p>However, compared to other sectors, this does not affect job displacement, but encourages us to work closer with AI in order to create a secure environment.</p>
    <p>Here is a graphic, provided by WiPro, which explains the process of transforming a system into one driven by AI.</p>
  </div>
  <div class="image-content">
    <img src="images/AI-In-CS.png" alt="AI in Cybersecurity" />
    <p> Image from WiPro available at</p> <p>https://www.wipro.com/cybersecurity/eliminating-the-complexity-in-cybersecurity-with-artificial-intelligence/</p>
  </div>
</div>

<div class="section full-page" style="flex-direction: row-reverse;">
  <div class="text-content">
    <h2>Problems with AI in Cybersecurity</h2>
    <p>While AI's role in cybersecurity is transformative, it is no surprise that many people are still afraid of its involvement in such environemnts due to most people not having enough understanding of how it works.</p>
    <p>With the introduction of smart technologies in homes, residents can often be worried as that technologi has access to essentially everything in the residence that is connected to the same network.</p>
    <p>However, this is understandable, let's go over some more problems that AI can have in Cybersecurity to raise some awareness.</p>
        <ul>
      <li class="cons"><strong>Ethical Concerns/Privacy Invasion:</strong> As mentioned before, there are some ethical concerns, people are often worried about implenting AI services into systems that may contain user data. Even though some systems still have humans dealing with data, it is alot safer than creating systems that use AI which can be targeted, exploited to maybe leak data. It is something to definitely think about.</li><br>
      <li class="cons"><strong>Contextual Understanding</strong> Similiar to AI tools mentioned in the Current State of AI, AI can misunderstand context of some systems, this could be due to poor instructions or setups, leading to either overreactions or underreactions.</li>
     
    </ul><br>
  </div>
  <div class="image-content">
    <img src="images/Cons-AI.jpeg" alt="AI in Daily Life" />
    <p> Image from LinkedIn available at</p> <p>https://www.linkedin.com/pulse/impact-ai-cybersecurity-pros-cons-crawsec-qbiyf</p>
  </div>
</div>

<div class="section full-page" style="flex-direction: row;">
  <div class="text-content">
    <h2>Benefits to AI in Cybersecurity</h2>
    <p>Let's discuss some of the benefits of AI in Cybersecurity as it is truly impressive where we are heading.</p>
        <ul>
      <li class="pros"><strong>Threat Detection:</strong> AI systems can analyze vast amounts of data at speeds impossible for humans. By using machine learning algorithms, these systems can learn from historical cybersecurity incidents and detect anomalies that may indicate potential threats.</li><br>
      <li class="pros"><strong>Automation</strong> AI allows us to consider automation in Cybersecurity scenarios, automation can include carrying out repetitive tasks such as log analysis and more, allowing human professionals to focus on other tasks that requires human insights.</li>
      <p>As mentioned, it is critically important that we work together to improve our systems and the technologies that we wish to use.</p>
      <p>Even though AI in cybersecurity is relatively new, it is astonishing to see the potential impact it has the the potenial it has for the future.</p>
      <p>Truly exciting.</p>
     
    </ul><br>
  </div>
  <div class="image-content">
    <img src="images/AI-Benefits-In-CS.jpg" alt="AI in Daily Life" />
    <p> Image from HashStudios available at </p> <p>https://hashstudioz.com/blog/benefits-of-using-artificial-intelligence-in-cyber-security/ </p>
  </div>
</div>
  <footer>
    <div class="footer-content">
      <p>Aatif Nazir | Contact me: 200112792@aston.ac.uk</p>
    </div>
  </footer>

</html>

<style>
  body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    font-family: 'Orbitron', sans-serif;
    background-color: #333; 
  }

  .section {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 20px;
      padding: 20px;
      background: rgba(0, 0, 0, 0.5);
      color: white;
      border-radius: 8px;
  }

.text-content, .image-content {
    flex: 1; 
    padding: 20px; 
}

.text-content {
    text-align: left;
}

.image-content img {
    width: 100%; 
    height: auto; 
    border-radius: 8px; 
}

.full-page {
  scroll-snap-align: start;
}
</style>