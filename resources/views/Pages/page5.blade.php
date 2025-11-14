<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Photo Album - Sports & Supercars</title>
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
    <source src="https://www.pexels.com/download/video/14856452/" type="video/webm">
  </video>
  <h1>🏎️ Sports & Supercars</h1>
  <h3>Explore the thrill of high-speed sports and iconic supercars that embody engineering, power, and elegance on every road and track.</h3>

  <div class="gallery">
    <a href="https://images.pexels.com/photos/337909/pexels-photo-337909.jpeg" class="photo-card">
      <img src="https://images.pexels.com/photos/337909/pexels-photo-337909.jpeg" alt="Ferrari">
      <div class="description">Ferrari blazing on a scenic road.</div>
    </a>

    <a href="https://images.pexels.com/photos/12882894/pexels-photo-12882894.jpeg" class="photo-card">
      <img src="https://images.pexels.com/photos/12882894/pexels-photo-12882894.jpeg" alt="Lamborghini">
      <div class="description">Lamborghini Aventador in perfect sunlight.</div>
    </a>

    <a href="https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1080x624/dam/pnr/2024/Products/992-II/0840_nevada_coupe_u-crane_AKOS0607_edit_V03-sky.jpg/jcr:content/0840_nevada_coupe_u-crane_AKOS0607_edit_V03-sky.jpg" class="photo-card">
      <img src="https://newsroom.porsche.com/.imaging/mte/porsche-templating-theme/image_1080x624/dam/pnr/2024/Products/992-II/0840_nevada_coupe_u-crane_AKOS0607_edit_V03-sky.jpg/jcr:content/0840_nevada_coupe_u-crane_AKOS0607_edit_V03-sky.jpg" alt="Porsche">
      <div class="description">Porsche speeding through curves.</div>
    </a>

    <a href="https://images.pexels.com/photos/10550012/pexels-photo-10550012.jpeg" class="photo-card">
      <img src="https://images.pexels.com/photos/10550012/pexels-photo-10550012.jpeg" alt="McLaren">
      <div class="description">McLaren supercar in<br>dynamic motion.</div>
    </a>  

    <a href="https://thehamiltoncollection.com/cdn/shop/articles/ev-22_1.jpg?v=1753828247" class="photo-card">
      <img src="https://thehamiltoncollection.com/cdn/shop/articles/ev-22_1.jpg?v=1753828247" alt="Bugatti">
      <div class="description">Bugatti Chiron showing elegance and speed.</div>
    </a>

    <a href="https://hips.hearstapps.com/hmg-prod/images/2023-audi-r8-gt-front-three-quarters-motion-3-1664827965.jpg?crop=0.684xw:0.577xh;0.0321xw,0.281xh&resize=2048:*" class="photo-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2023-audi-r8-gt-front-three-quarters-motion-3-1664827965.jpg?crop=0.684xw:0.577xh;0.0321xw,0.281xh&resize=2048:*" alt="Audi R8">
      <div class="description">Audi R8 on a mountain road.</div>
    </a>

    <a href="https://di-uploads-pod23.dealerinspire.com/bmwofowingsmills/uploads/2024/07/P90548593_highRes_the-all-new-bmw-m4-c-1.jpg" class="photo-card">
      <img src="https://di-uploads-pod23.dealerinspire.com/bmwofowingsmills/uploads/2024/07/P90548593_highRes_the-all-new-bmw-m4-c-1.jpg" alt="BMW M4">
      <div class="description">BMW M4 leaving a blur of speed behind.</div>
    </a>

    <a href="https://images.timesdrive.in/photo/msid-151024305,thumbsize-39280/151024305.jpg" class="photo-card">
      <img src="https://images.timesdrive.in/photo/msid-151024305,thumbsize-39280/151024305.jpg" alt="Mercedes AMG">
      <div class="description">Mercedes AMG roaring<br>along the track.</div>
    </a>

    <a href="https://media.formula1.com/image/upload/c_lfill,w_3392/q_auto/v1740000000/fom-website/2025/Miscellaneous/2025-start-barcelona.webp" class="photo-card">
      <img src="https://media.formula1.com/image/upload/c_lfill,w_3392/q_auto/v1740000000/fom-website/2025/Miscellaneous/2025-start-barcelona.webp" alt="F1 Race">
      <div class="description">F1 car taking a tight<br>corner at speed.</div>
    </a>

    <a href="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/i_Mj8oTh0Erk/v0/-1x-1.webp" class="photo-card">
      <img src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/i_Mj8oTh0Erk/v0/-1x-1.webp" alt="Supercar Event">
      <div class="description">Supercar gathering at a luxurious event.</div>
    </a>

    <a href="https://dolubatarya.com/uploads/2021/10/tesla-roadster-specs-21-scaled.jpg" class="photo-card">
      <img src="https://dolubatarya.com/uploads/2021/10/tesla-roadster-specs-21-scaled.jpg" alt="Tesla">
      <div class="description">Tesla Roadster showcasing futuristic design.</div>
    </a>

    <a href="https://upload.wikimedia.org/wikipedia/commons/c/c5/BTCC_Brands06_PaddockHill.jpg" class="photo-card">
      <img src="https://upload.wikimedia.org/wikipedia/commons/c/c5/BTCC_Brands06_PaddockHill.jpg" alt="Race Track">
      <div class="description">Speed machines on the race track.</div>
    </a>

    <a href="https://media.triumphmotorcycles.co.uk/image/upload/f_auto/q_auto:eco/sitecoremedialibrary/media-library/images/central%20marketing%20team/for%20the%20ride/racing/2024%20racing%20update/landing%20page/ftr-racing-moto2-crad-1000x6509.png" class="photo-card">
      <img src="https://media.triumphmotorcycles.co.uk/image/upload/f_auto/q_auto:eco/sitecoremedialibrary/media-library/images/central%20marketing%20team/for%20the%20ride/racing/2024%20racing%20update/landing%20page/ftr-racing-moto2-crad-1000x6509.png" alt="Motorcycle">
      <div class="description">High-speed<br>motorcycle racing.</div>
    </a>

    <a href="https://blogs.sw.siemens.com/wp-content/uploads/sites/2/2023/03/oracle-red-bull-racing.jpg" class="photo-card">
      <img src="https://blogs.sw.siemens.com/wp-content/uploads/sites/2/2023/03/oracle-red-bull-racing.jpg" alt="Formula Car">
      <div class="description">Formula car powerin<br>through corners.</div>
    </a>

    <a href="https://i.ytimg.com/vi/Wch127OxEGo/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYAC0AWKAgwIABABGHIgRyg1MA8=&rs=AOn4CLDgW3NWUALOBZxKO2pFf25CfBmm8g" class="photo-card">
      <img src="https://i.ytimg.com/vi/Wch127OxEGo/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYAC0AWKAgwIABABGHIgRyg1MA8=&rs=AOn4CLDgW3NWUALOBZxKO2pFf25CfBmm8g" alt="Supercar Night">
      <div class="description">Supercar shining under<br>night lights.</div>
    </a>

    <a href="https://images.pexels.com/photos/33928419/pexels-photo-33928419.jpeg" class="photo-card">
      <img src="https://images.pexels.com/photos/33928419/pexels-photo-33928419.jpeg" alt="Classic Car">
      <div class="description">Classic sports car in pristine condition.</div>
    </a>

    <a href="https://i.ytimg.com/vi/EcpeGeefL4A/maxresdefault.jpg" class="photo-card">
      <img src="https://i.ytimg.com/vi/EcpeGeefL4A/maxresdefault.jpg" alt="Supercar Closeup">
      <div class="description">Close-up of an exotic<br>supercar design.</div>
    </a>

    <a href="https://static.vecteezy.com/system/resources/thumbnails/071/971/311/small/formula-race-cars-racing-track-photo.jpeg" class="photo-card">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/071/971/311/small/formula-race-cars-racing-track-photo.jpeg" alt="Racing Scene">
      <div class="description">Thrilling racing action captured mid-motion.</div>
    </a>

    <a href="https://www.visitphilly.com/wp-content/uploads/2025/01/philly-auto-show-custom-alley-hero-2200x1237px.jpg" class="photo-card">
      <img src="https://www.visitphilly.com/wp-content/uploads/2025/01/philly-auto-show-custom-alley-hero-2200x1237px.jpg" alt="Car Show">
      <div class="description">Luxury car show displaying top supercars.</div>
    </a>

    <a href="https://s1.cdn.autoevolution.com/images/news/gallery/japanese-tuner-liberty-walk-reveals-their-new-nissan-gtr-silhouette-body-kit_27.jpg" class="photo-card">
      <img src="https://s1.cdn.autoevolution.com/images/news/gallery/japanese-tuner-liberty-walk-reveals-their-new-nissan-gtr-silhouette-body-kit_27.jpg" alt="Japanese car">
      <div class="description">GTR R35 The Godzilla<br>in japan.</div>
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

  <footer>© 2025 My Photo Album | Sports & Supercars Collection by EJ</footer>

  <script>
  const title = document.querySelector('h1');
  const text = title.textContent.replace('🏎️', '').trim(); 
  title.innerHTML = `<span class="emoji">🏎️</span> ` + text.split('').map(
    (char, i) => `<span style="animation-delay:${i * 0.1}s">${char}</span>`
  ).join('');
</script>

</body>
</html>
