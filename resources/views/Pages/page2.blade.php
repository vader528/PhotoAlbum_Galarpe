<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Photo Album - Architecture</title>
  <style>
    
    #bg-video {
      position: fixed; 
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
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

@keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
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

    .emoji {
      display: inline-block;
      margin-right: 6px;
     }

    h3 {
      color: #fff;
      font-weight: 400;
      text-align: center;
      transition: text-shadow 0.5s ease, color 0.5s ease;
    }

    h3:hover {
      color: #ffcc70;
      text-shadow: 0 0 10px #ffcc70, 0 0 20px #ffcc70, 0 0 40px #ffcc70;
      animation: glowLetters 1.5s ease-in-out infinite alternate;
    }

    @keyframes glowLetters {
      from {
        text-shadow: 0 0 10px #ffcc70, 0 0 20px #ffcc70, 0 0 30px #ffcc70;
      }
      to {
        text-shadow: 0 0 20px #ffe8a3, 0 0 40px #ffe8a3, 0 0 60px #ffe8a3;
      }
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
      bottom: 0;
      left: 0;
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
    <source src="https://www.pexels.com/download/video/2073129/" type="video/webm">
  </video>
  <h1><span class="emoji">🏛️</span>Architecture Gallery</h1>
<h3>Discover breathtaking buildings and architectural wonders that inspire awe and creativity</h3>
  <div class="gallery">
  <a href="https://media.cnn.com/api/v1/images/stellar/prod/160824115657-shanghai-tower-3.jpg?q=w_2000,c_fill" class="photo-card">
    <img src="https://media.cnn.com/api/v1/images/stellar/prod/160824115657-shanghai-tower-3.jpg?q=w_2000,c_fill" alt="Modern Skyscraper">
    <div class="description">A sleek modern skyscraper touching the clouds.</div>
  </a>

  <a href="https://cdn.mos.cms.futurecdn.net/abmcvVbKAYJ6966QFXoZKQ.jpg" class="photo-card">
    <img src="https://cdn.mos.cms.futurecdn.net/abmcvVbKAYJ6966QFXoZKQ.jpg" alt="Ancient Temple">
    <div class="description">The timeless elegance of an ancient temple.</div>
  </a>

  <a href="https://cdn.londonandpartners.com/visit/london-organisations/tower-bridge/86830-640x360-tower-bridge-640.jpg" class="photo-card">
    <img src="https://cdn.londonandpartners.com/visit/london-organisations/tower-bridge/86830-640x360-tower-bridge-640.jpg" alt="Bridges">
    <div class="description">A network of bridges<br>
    weaving across the city.</div>
  </a>

  <a href="https://www.onthegotours.com/repository/Conwy-Castle-Wales-830041705508083.jpg" class="photo-card">
    <img src="https://www.onthegotours.com/repository/Conwy-Castle-Wales-830041705508083.jpg" alt="Castle">
    <div class="description">A medieval castle standing<br>
    tall over the hills.</div>
  </a>

  <a href="https://media.cnn.com/api/v1/images/stellar/prod/140520131352-city-of-tomorrow-futuristic-building-eyeball.jpg?q=w_3872,h_2592,x_0,y_0,c_fill/h_447" class="photo-card">
    <img src="https://media.cnn.com/api/v1/images/stellar/prod/140520131352-city-of-tomorrow-futuristic-building-eyeball.jpg?q=w_3872,h_2592,x_0,y_0,c_fill/h_447" alt="Futuristic Building">
    <div class="description">A futuristic building with geometric lines and glass facade.</div>
  </a>

  <a href="https://api.hub.jhu.edu/factory/sites/default/files/styles/landscape/public/city_streets.jpg" class="photo-card">
    <img src="https://api.hub.jhu.edu/factory/sites/default/files/styles/landscape/public/city_streets.jpg" alt="Urban Streets">
    <div class="description">Urban streets lined with modern architectural marvels.</div>
  </a>

  <a href="https://www.franceguide.info/wp-content/uploads/sites/18/paris-notre-dame-hd.jpg" class="photo-card">
    <img src="https://www.franceguide.info/wp-content/uploads/sites/18/paris-notre-dame-hd.jpg" alt="Old Church">
    <div class="description">Historic church with intricate<br>
    architecture and<br>
    stone details.</div>
  </a>

  <a href="https://as1.ftcdn.net/v2/jpg/01/91/74/46/1000_F_191744672_HYfG0261FemsGK5WZWX868BokvbHNmqV.jpg" class="photo-card">
    <img src="https://as1.ftcdn.net/v2/jpg/01/91/74/46/1000_F_191744672_HYfG0261FemsGK5WZWX868BokvbHNmqV.jpg" alt="City Skyline">
    <div class="description">A dazzling city<br>skyline at dusk.</div>
  </a>

  <a href="https://t4.ftcdn.net/jpg/01/14/29/77/360_F_114297755_AYP5rQcVsVPe5GfXs08DxKLaXBXl8l09.jpg" class="photo-card">
    <img src="https://t4.ftcdn.net/jpg/01/14/29/77/360_F_114297755_AYP5rQcVsVPe5GfXs08DxKLaXBXl8l09.jpg" alt="Modern Bridge">
    <div class="description">A modern<br>suspension bridge<br>spanning the river.</div>
  </a>

  <a href="https://images.unsplash.com/photo-1758907849432-de2f158522b8?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE5fHx8ZW58MHx8fHx8" class="photo-card">
    <img src="https://images.unsplash.com/photo-1758907849432-de2f158522b8?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE5fHx8ZW58MHx8fHx8" alt="Opera House">
    <div class="description">An iconic opera house with unique curves and sails.</div>
  </a>

  <a href="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?cs=srgb&dl=pexels-peng-liu-45946-169647.jpg&fm=jpg" class="photo-card">
    <img src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?cs=srgb&dl=pexels-peng-liu-45946-169647.jpg&fm=jpg" alt="Skyscraper Night">
    <div class="description">Skyscrapers glowing under night lights.</div>
  </a>

  <a href="https://smarthistory.org/wp-content/uploads/2019/05/BrooklynMuseum.jpg" class="photo-card">
    <img src="https://smarthistory.org/wp-content/uploads/2019/05/BrooklynMuseum.jpg" alt="Museum Exterior">
    <div class="description">A contemporary museum exterior blending stone and glass.</div>
  </a>

  <a href="https://images.skyscrapercenter.com/building/urbanatowers-complex_rendering_(c)acta__architectue.jpg" class="photo-card">
    <img src="https://images.skyscrapercenter.com/building/urbanatowers-complex_rendering_(c)acta__architectue.jpg" alt="Urban Tower">
    <div class="description">A modern urban tower<br>rising above<br>surrounding buildings.</div>
  </a>

  <a href="https://media.philstar.com/photos/2025/05/20/2_2025-05-20_00-43-27.jpg" class="photo-card">
    <img src="https://media.philstar.com/photos/2025/05/20/2_2025-05-20_00-43-27.jpg" alt="City Hall">
    <div class="description">A majestic city hall with classical architecture.</div>
  </a>

  <a href="https://cdn.prod.website-files.com/624e7e6d36c27d685c5365f6/626c3e8f6aeb7fb6e642c231_hero1.jpg" class="photo-card">
    <img src="https://cdn.prod.website-files.com/624e7e6d36c27d685c5365f6/626c3e8f6aeb7fb6e642c231_hero1.jpg" alt="Library Exterior">
    <div class="description">A modern library with large glass windows and terraces.</div>
  </a>

  <a href="https://kasturjewels.com/wp-content/uploads/2018/02/28117_6885.jpg" class="photo-card">
    <img src="https://kasturjewels.com/wp-content/uploads/2018/02/28117_6885.jpg" alt="Historic Palace">
    <div class="description">A historic palace showcasing baroque architecture.</div>
  </a>

  <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThS5LbwvreaeTFd4mKqYiPXprfBCwVbVgMXg&s" class="photo-card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThS5LbwvreaeTFd4mKqYiPXprfBCwVbVgMXg&s" alt="Residential Complex">
    <div class="description">A modern residential<br>complex with<br>symmetrical balconies.</div>
  </a>

  <a href="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/00/46/c2/caption.jpg?w=1200&h=-1&s=1" class="photo-card">
    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/00/46/c2/caption.jpg?w=1200&h=-1&s=1" alt="Train Station">
    <div class="description">A historic train station blending iron and glass architecture.</div>
  </a>

  <a href="https://www.guidelondon.org.uk/wp-content/uploads/2023/05/Canterbury-Cathedral.jpeg" class="photo-card">
    <img src="https://www.guidelondon.org.uk/wp-content/uploads/2023/05/Canterbury-Cathedral.jpeg" alt="Cathedral">
    <div class="description">A grand cathedral with towering spires and stained glass.</div>
  </a>

  <a href="https://media.architecturaldigest.com/photos/5679bf41b313ecbd18113b5e/16:9/w_2463,h_1385,c_limit/modern-museums-europe-02.jpg" class="photo-card">
    <img src="https://media.architecturaldigest.com/photos/5679bf41b313ecbd18113b5e/16:9/w_2463,h_1385,c_limit/modern-museums-europe-02.jpg" alt="Modern Museum">
    <div class="description">A modern museum with<br>sharp angles<br>and minimalist design.</div>
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

  <script>
  const title = document.querySelector('h1');
  const text = title.textContent.replace('🏛️', '').trim(); 
  title.innerHTML = `<span class="emoji">🏛️</span> ` + text.split('').map(
    (char, i) => `<span style="animation-delay:${i * 0.1}s">${char}</span>`
  ).join('');
</script>

  <footer>© 2025 My Photo Album | Architecture Collection by EJ</footer>
</body>
</html>
