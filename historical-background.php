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

  <div class="section full-page">
    <div class="text-content">
      <h1>The Turing Test</h1>
      <p>All the way back to the mid-20th century, the first ideas of communicating with computers with the intention to replicate human intelligence was considered.</p>
      <p>Let's go over what the Turing Test was, and what it really meant for the progession of Artifical Intelligence.</p>
      <p>Alan Turing, a British mathematician and computer scientist truely questioned "Can machines think?". With this question in the air, it led to the development of the Turing Test as a means of measuring a machine's ability to replicate behaviours seen from humans. This involved carring out the Turing Test.</p>
      <h3>What is the Turing Test?</h3>
      <p>The original Turing Test consisted of three terminals, each one was physically separated from the other two. One terminal, controlled by a computer, the other two are controlled by humans.</p>
      <p>One of the humans acts as the one whos is questioning, whilst the second human and the computer function as respondents. The human acting as the questioner proceeds to interrogate the respondents about a specific topic, using a specified format and context. After a set number of time during this test, the human acting as the questioner is then asked to reveal which respondant they believe is the human and which is the computer, based purely on their responses.</p>
      <h3>But why though?</h3>
      <p>Keep reading!<p>
    </div>
    <div class="image-content">
      <img src="images/AlanTuring.jpg" alt="Picture of Alan Turing" />
    </div>
  </div>

<div class="section full-page flipped">
  <div class="text-content">
      <h1>The Turing Test Continued...</h1>
      <p>If the interegator can't distinguish the human from the computer, the machine has passed the Turing Test. In order to pass the test, the machine generally has to simulate a good enough human-like response to the point where the interegator cannot seperate the human and machine.</p><br><br><br>
      <h3>But why, you ask?</h3>
      <p>This test was done to establish machine's ability to think. Before the Turing Test was a thing, there was no way for us to understand and determine whether a machine was capable of thinking like a human. </p>
      <p>Alan Turing, imfamous for his creating thinking, was more interesting in understanding what the possibilites were from a discovery like this, he was more interested in reaching the point where it could be questioned.</p>
      <p>"Where will this lead us and what can it achieve".</p>
      <p>Although it was initially a tool to just test, the Turing Test became a benchmark for progress in artificial intelligence over the decades, It helped developers and researchers understand the true capabilities of Artifical Intelligence.</p><br><br><br>
      <h3>Fancy learning more about Alan Turing?</h3>
      <p>"The Imitation Game" is a film released in 2014, is about Alan Turing deciphering the German enigma code, using a machine he builds in order to crack the code.<p>
  </div>
  <div class="image-content">
    <img src="images/TuringTest.jpg" alt="The Turing Test" />
    <p> Image from Infineon available at</p> <p>https://www.infineon.com/cms/en/discoveries/definition-artificial-intelligence/</p>
  </div>
</div>


  <div class="section full-page">
    <div class="text-content">
      <h2>AI Advancements Timeline</h2>
      <p>Here is a great little graphic to display the advancements seen in the world of AI, as we can see Alan Turing's ideas was a significant step into the right direction and proved to be the first step that was needed for the long journey that followed.</p>
    </div>
    <div class="milestone-image-content">
      <img src="images/HistoryofAITimeline.png" alt="AI Timeline" />
    </div>
  </div>

<div class="section full-page flipped">
    <div class="text-content">
      <h2>"The Imitation Game" - Movie Trailer</h2>
      <p>Explore the story of Alan Turing and his  work during WWII with this thrilling trailer for "The Imitation Game". We highly recommend this film even if it is not related to your studies because it is a fantastic watch and depicts an amazing story.</p>
    </div>
    <div class="image-content">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/nuPZUUED5uk" title="YouTube video" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>


  <footer>
    <div class="footer-content">
      <p>Aatif Nazir | Contact me: 200112792@aston.ac.uk</p>
    </div>
  </footer>

</body>
</html>

<style>
 html {
  scroll-snap-type: y mandatory;
}

body, html {
  height: 100%;
  margin: 0;
  padding: 0;
  background-color: #333;
  font-family: 'Orbitron', sans-serif;
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
  scroll-snap-align: start; 
}

.flipped .image-content {
  padding-right: 20px; 
  margin-left: -100px; 
  order: -1; 
}

.flipped .text-content {
  text-align: right;
}

.text-content {
  flex: 2;
  padding: 20px;
  text-align: justify;
}

.image-content {
  flex: 1.5;
  padding-left: 100px;
}

.image-content img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.milestone-image-content {
    display: flex;
    max-width: 800px;
    border-radius: 8px;
}

.milestone-image-content img {
    max-width: 100%;
}
</style>