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
  <title>The Future of AI</title>
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="section full-page flipped">
    <div class="text-content">
      <h2>AI Automation</h2>
      <p>When it comes to technology, it is no surprise that automation is always on everyones minds, because why would we want to do the work, when we can make robots do it right?</p>
      <p>Integration with automation technologies is set to dramatically change how everything around us will work.</p>
      <p>Increasing productivity and efficiency but also raising significant questions about the future of employment.</p>
    </div>
    <div class="image-content">
      <img src="images/AI-Automation.png" alt="AI Automation" />
      <p> Image from Analystics Insight available at</p> <p>https://www.analyticsinsight.net/ai-disrupting-current-workplace-better-productivity/</p>
    </div>
  </div>
    <div class="section full-page">
    <div class="text-content">
      <h2>AI Automation in Workplaces</h2>
      <p>We know that many companies have already implemented robots in their work places, such as industrial workplaces, manufacturing and assembly lines, but why?</p>
      <p>AI Robots can increase the efficiency in production assembly lines as theres less chance for mistakes, no breaks needed, faster work rates, and more.</p>
      <p>It is also alot more cost efficient as you only need the one time purchase of those machines and often maintenance, rather than staff and their annual salaries.</p>
    </div>
    <div class="image-content">
      <img src="images/AI-Industrial.jpg" alt="AI Automation" />
      <p> Image from Emerj available at</p> <p>https://emerj.com/ai-sector-overviews/artificial-intelligence-industrial-automation-current-applications/</p>
    </div>
  </div>

  <div class="section full-page flipped">
    <div class="text-content">
      <h2>AI in Daily Life</h2>
      <p>From smart homes to personalised experiences, the way our lives are changing is something that no one could have ever predicted. We have already seen the introducted of smart appliances such as, fridges, TVs, washing machines, and more, and this is with good reason.</p>
      <p>The introduction of smart appliances has changed the lives of many around the world, allowing them to control almost everything in their residence with their phone, who would have ever thought we'd get here?</p>
      <p>However, it does not stop there. We are already starting to see smart devices that can carry out tasks that we don't enjoy doing at home, well some of us, that includes cleaning!<p>
      <p>There are already vaccum cleaners that use sensors to essentially bounce off of walls to hit every spot to clean your place, this can help save precious time to spend with family and whatnot.<p>
      <p>As expected, these devices can be quite expensive, but for some, they would be willing to sacrifice that money for devices to clean around the house for extra time.<p>
      <p>You know what they say, time is money. What do you think?<p>
    </div>
    <div class="image-content">
      <img src="images/AI-Vaccum.jpg" alt="AI in Daily Life" />
      <p> Image from Which available at</p> <p>https://www.which.co.uk/reviews/robot-vacuum-cleaners/article/how-we-test-robot-vacuum-cleaners-aa6pm2L1goRI</p>
    </div>
  </div>

<div class="section full-page">
    <div class="text-content">
      <h2>Example of AI in a workplace</h2>
      <p>Here is an interesting example of a robot in a warehouse environment, managing parcels for 20 hours straight with no break. Have a watch and guess what happens!</p>
    </div>
    <div class="image-content">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/86wPaa-wUaA" title="YouTube video" frameborder="0" allowfullscreen></iframe>
          <p>So what do you think? Are we close to the future, or are we still a while away from automating our lives for good? </p>
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
  flex: 2;
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
    border-radius: 8px; /
}
.milestone-image-content img {
    max-width: 100%;
}
</style>