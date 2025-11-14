<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Photo Album - People & Events</title>
  <style>
    #bg-video {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      object-fit: cover;
      z-index: -1;
      opacity: 0.6;
    }

    body {
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background: linear-gradient(135deg, #1e1e2f, #2a2a3d);
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      padding: 40px 20px;
    }

    h1 {
      font-size: 2.5rem;
      color: #ffcc70;
      text-shadow: 0 0 10px rgba(255, 204, 112, 0.6);
      margin-bottom: 30px;
    }

    h1 span {
      display: inline-block;
      animation: wave 1.2s infinite;
    }

    @keyframes wave {
      0%, 60%, 100% { transform: translateY(0); }
      30% { transform: translateY(-15px); }
    }

    h3 {
      color: #fff;
      font-weight: 400;
      text-align: center;
      transition: text-shadow 0.5s ease, color 0.5s ease;
    }

    h3:hover {
      color: #ffcc70;
      text-shadow: 0 0 10px #ffcc70, 0 0 20px #ffcc70;
      animation: glowLetters 1.5s ease-in-out infinite alternate;
    }

    @keyframes glowLetters {
      from { text-shadow: 0 0 10px #ffcc70; }
      to { text-shadow: 0 0 25px #ffe8a3; }
    }

    .button-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-top: 30px;
    }

    .album-button {
      background: linear-gradient(145deg, #3b3b52, #262638);
      border: none;
      border-radius: 12px;
      color: #fff;
      padding: 15px 40px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }

    .album-button:hover {
      transform: scale(1.07);
      background: linear-gradient(145deg, #4a4a68, #33334d);
      box-shadow: 0 6px 12px rgba(0,0,0,0.4);
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
      width: 100%;
      max-width: 1200px;
    }

    .photo-card {
      position: relative;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
      cursor: pointer;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .photo-card:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.6);
    }

    .photo-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: 0.4s ease;
    }

    .photo-card:hover img {
      filter: blur(2px) brightness(80%);
      transform: scale(1.1);
    }

    .description {
      position: absolute;
      bottom: 0; left: 0;
      width: 100%;
      padding: 10px;
      background: rgba(0, 0, 0, 0.6);
      color: #ffcc70;
      text-align: center;
      font-size: 1rem;
      opacity: 0;
      transform: translateY(100%);
      transition: 0.4s ease;
    }

    .photo-card:hover .description {
      opacity: 1;
      transform: translateY(0);
      animation: glowLetters 1.5s ease-in-out infinite alternate;
    }

    footer {
      margin-top: 40px;
      color: #aaa;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

<video autoplay muted loop id="bg-video">
  <source src="https://www.pexels.com/download/video/853889/" type="video/mp4">
</video>

<h1>👥 People & Events</h1>
<h3>Capturing human stories, emotions, and gatherings that bring people together.</h3>

<div class="gallery">
  
  <a href="https://images.pexels.com/photos/1181396/pexels-photo-1181396.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/1181396/pexels-photo-1181396.jpeg" alt="Corporate Meeting">
    <div class="description">Corporate Meeting<br>professionals sharing<br>ideas and teamwork.</div>
  </a>

  <a href="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg" alt="Wedding Ceremony">
    <div class="description">Wedding Ceremony love,<br>joy, and<br>lifelong commitment.</div>
  </a>

  <a href="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg" alt="Music Concert">
    <div class="description">Music Concert lights, sound,<br>and pure energy<br>of the crowd.</div>
  </a>

  <a href="https://images.pexels.com/photos/6476186/pexels-photo-6476186.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/6476186/pexels-photo-6476186.jpeg" alt="Business Presentation">
    <div class="description">Business Presentation<br>innovation shared<br>on the big screen.</div>
  </a>

  <a href="https://images.pexels.com/photos/11210162/pexels-photo-11210162.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/11210162/pexels-photo-11210162.jpeg" alt="Cultural Festival">
    <div class="description">Cultural Festival<br>colors, dances,<br>and community pride.</div>
  </a>

  <a href="https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg" alt="Graduation Day">
    <div class="description">Graduation Day a<br>milestone celebrating<br>hard work and dreams.</div>
  </a>

  <a href="https://images.pexels.com/photos/163449/american-football-football-match-sport-team-163449.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/163449/american-football-football-match-sport-team-163449.jpeg" alt="Sports Event">
    <div class="description">Sports Event passion,<br>teamwork, and competitive spirit.</div>
  </a>

  <a href="https://images.pexels.com/photos/34675935/pexels-photo-34675935.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/34675935/pexels-photo-34675935.jpeg" alt="Street Parade">
    <div class="description">Street Parade cultural<br>celebration full of color and joy.</div>
  </a>

  <a href="https://images.pexels.com/photos/11000907/pexels-photo-11000907.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/11000907/pexels-photo-11000907.jpeg" alt="Art Workshop">
    <div class="description">Art Workshop creative<br>people expressing ideas through art.</div>
  </a>

  <a href="https://images.pexels.com/photos/6646916/pexels-photo-6646916.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/6646916/pexels-photo-6646916.jpeg" alt="Charity Event">
    <div class="description">Charity Event helping hands<br>and smiles making a difference.</div>
  </a>

  <a href="https://images.pexels.com/photos/7656743/pexels-photo-7656743.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/7656743/pexels-photo-7656743.jpeg" alt="Community Cleanup">
    <div class="description">Community Cleanup<br>volunteers working for a greener world.</div>
  </a>

  <a href="https://www.lumina.com.ph/assets/news-and-blogs-photos/Celebrate-Birthday-at-Home-with-Family-5-Simple-Ideas-and-Themes/OG-Celebrate-Birthday-at-Home-with-Family-5-Simple-Ideas-and-Themes.webp" class="photo-card">
    <img src="https://www.lumina.com.ph/assets/news-and-blogs-photos/Celebrate-Birthday-at-Home-with-Family-5-Simple-Ideas-and-Themes/OG-Celebrate-Birthday-at-Home-with-Family-5-Simple-Ideas-and-Themes.webp" alt="Birthday Party">
    <div class="description">Birthday Party laughter,<br>cake, and moments of happiness.</div>
  </a>

  <a href="https://images.pexels.com/photos/2246258/pexels-photo-2246258.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/2246258/pexels-photo-2246258.jpeg" alt="Protest Rally">
    <div class="description">Protest Rally people raising voices<br>for change and justice.</div>
  </a>

  <a href="https://www.adventurebook.com/connect/wp-content/uploads/sites/2/2023/02/Shutterstock_1294608118.jpg" class="photo-card">
    <img src="https://www.adventurebook.com/connect/wp-content/uploads/sites/2/2023/02/Shutterstock_1294608118.jpg" alt="Family Reunion">
    <div class="description">Family Reunion generations reconnecting<br>with love and memories.</div>
  </a>

  <a href="https://images.pexels.com/photos/8511873/pexels-photo-8511873.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/8511873/pexels-photo-8511873.jpeg" alt="Cooking Class">
    <div class="description">Cooking Class people<br>learning and sharing<br>flavors together.</div>
  </a>

  <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Osklen%2C_SPFW_N43.jpg/1200px-Osklen%2C_SPFW_N43.jpg" class="photo-card">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Osklen%2C_SPFW_N43.jpg/1200px-Osklen%2C_SPFW_N43.jpg" alt="Fashion Show">
    <div class="description">Fashion Show models, lights,<br>and the art of design.</div>
  </a>

  <a href="https://images.pexels.com/photos/207739/pexels-photo-207739.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/207739/pexels-photo-207739.jpeg" alt="School Play">
    <div class="description">School Play young talents<br>performing with excitement.</div>
  </a>

  <a href="https://images.pexels.com/photos/316798/pexels-photo-316798.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/316798/pexels-photo-316798.jpeg" alt="Beach Gathering">
    <div class="description">Beach Gathering friends<br>bonding under<br>the sunset sky.</div>
  </a>

  <a href="https://images.pexels.com/photos/14363874/pexels-photo-14363874.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/14363874/pexels-photo-14363874.jpeg" alt="Award Ceremony">
    <div class="description">Award Ceremony<br>recognizing success<br>and inspiring others.</div>
  </a>

  <a href="https://images.pexels.com/photos/6182590/pexels-photo-6182590.jpeg" class="photo-card">
    <img src="https://images.pexels.com/photos/6182590/pexels-photo-6182590.jpeg" alt="Street Food Festival">
    <div class="description">Street Food Festival<br>delicious<br>chaos and shared laughter.</div>
  </a>
</div>

 <div class="button-container">
  <button class="album-button" onclick="location.href='{{ route('home') }}'">🏠 Home</button>
  <button class="album-button" onclick="location.href='{{ route('page1') }}'">Page 1</button>
  <button class="album-button" onclick="location.href='{{ route('page2') }}'">Page 2</button>
  <button class="album-button" onclick="location.href='{{ route('page3') }}'">Page 3</button>
  <button class="album-button" onclick="location.href='{{ route('page4') }}'">Page 4</button>
  <button class="album-button" onclick="location.href='{{ route('page5') }}'">Page 5</button>
  <button class="album-button" onclick="location.href='{{ route('SP') }}'">SP</button>
</div>
</div>

<footer>© 2025 My Photo Album | People & Events Collection by EJ</footer>

<script>
const title = document.querySelector('h1');
const text = title.textContent.replace('👥', '').trim();
title.innerHTML = `<span class="emoji">👥</span> ` + text.split('').map(
  (char, i) => `<span style="animation-delay:${i * 0.1}s">${char}</span>`
).join('');
</script>

</body>
</html>
