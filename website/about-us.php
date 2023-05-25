<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
  <title>Scroll test</title>
</head>

<body>
  <div class="section" id="sec1">
    <img class="polynesia-image-background" src="media/polynesia2-image-background.png">
    <div class="text-container" id="text-container">
      <h1 class="about-us-text">About Us</h1>
    </div>
    <img class="polynesia-image-overlay" src="media/polynesia2-image-overlay.png">
  </div>
  <div class="section" id="sec2">
    <main class="section2-main">
      <div class="about-us-text2-container">
        <h1 class="about-us-text2">At World Wide Booking, we believe that travel has
          the power to enrich lives and broaden
          horizons.
          Our mission is to provide seamless travel experiences that inspire and connect people
          from all corners of the globe.
          With our user-friendly platform, extensive destination coverage, and personalized service,
          we strive to make your travel dreams a reality.
          Join us as we embark on a journey to explore the world together.</h1>
      </div>
      <div class="our-story-container">
        <h1 class="our-story-koptext">Our Story.</h1>
        <h1 class="our-story-text2">World Wide Booking was born out of a passion for travel and a desire to create a one-stop solution for globetrotters.
          Our founders, Dylan Backus & Selcuk Dogan, spent years traversing the globe, 
         encountering countless breathtaking destinations and immersing themselves in diverse cultures. 
         Inspired by their adventures, they envisioned a platform that would simplify the travel planning process and
          empower others to discover the world.</h1>
      </div>
    </main>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="javascript/main.js"></script>
  <script>
    window.addEventListener('scroll', function () {
      var textContainer = document.getElementById('text-container');
      var section2 = document.getElementById('sec2');
      var section2Offset = section2.offsetTop;
      var scrollPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

      if (scrollPosition > section2Offset) {
        textContainer.style.position = 'absolute';
        textContainer.style.top = (section2Offset + section2.offsetHeight) + 'px';
      } else {
        textContainer.style.position = 'fixed';
        textContainer.style.top = '';
      }
    });
  </script>

</body>

</html>
