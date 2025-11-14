<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Photo Album</title>
  <style>
    

    body {
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background: #0b0b1d;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
      overflow-x: hidden;
      position: relative;
    }

    
    .stars {
      position: fixed;
      width: 200%;
      height: 200%;
      top: -50%;
      left: -50%;
      pointer-events: none;
      z-index: -2;
    }
    .star {
      position: absolute;
      background: white;
      border-radius: 50%;
      opacity: 0.8;
      animation: twinkle linear infinite;
    }
    @keyframes twinkle {
      0%, 100% { opacity: 0.2; transform: scale(1); }
      50% { opacity: 1; transform: scale(1.3); }
    }

    
    .nebula {
      position: fixed;
      width: 200%;
      height: 200%;
      top: -50%;
      left: -50%;
      background: radial-gradient(circle at 30% 50%, rgba(255,255,255,0.15), transparent 60%),
                  radial-gradient(circle at 70% 20%, rgba(255,0,150,0.2), transparent 60%),
                  radial-gradient(circle at 80% 80%, rgba(0,150,255,0.2), transparent 70%);
      opacity: 0.4;
      z-index: -3;
      animation: nebulaMove 50s linear infinite alternate;
    }
    @keyframes nebulaMove {
      0% { transform: translate(0,0) scale(1); }
      50% { transform: translate(-60px, 30px) scale(1.05); }
      100% { transform: translate(60px, -30px) scale(1.1); }
    }

    
    h1 {
      font-size: 2.8rem;
      margin-top: 40px;
      color: #ffcc70;
      text-shadow: 0 0 10px rgba(255, 204, 112, 0.6), 0 0 20px rgba(255, 200, 120, 0.4);
      display: inline-block;
      overflow: hidden;
    }
    h1 span {
      display: inline-block;
      animation: wave 1.2s infinite;
    }
    @keyframes wave {
      0%, 60%, 100% { transform: translateY(0); }
      30% { transform: translateY(-15px); }
    }

    
    .slideshow-container {
      width: 80%;
      max-width: 900px;
      height: 400px;
      position: relative;
      margin: 30px auto;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(0,0,0,0.7);
      animation: floatSlide 12s ease-in-out infinite alternate;
    }
    @keyframes floatSlide {
      0% { transform: translateY(0px) scale(1); }
      50% { transform: translateY(-15px) scale(1.02); }
      100% { transform: translateY(0px) scale(1); }
    }
    .slide {
      width: 100%;
      height: 100%;
      position: absolute;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }
    .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 15px;
      transition: transform 1.2s ease;
    }
    .slide.active img {
      transform: scale(1.05);
    }
    .active { opacity: 1; }

    
    .caption {
      position: absolute;
      bottom: 20px;
      left: 0;
      right: 0;
      text-align: center;
      font-size: 1.2rem;
      color: #fff;
      text-shadow: 0 2px 12px rgba(0,0,0,0.8);
      background: rgba(0,0,0,0.3);
      padding: 10px 0;
      animation: captionFade 1s ease forwards;
    }
    @keyframes captionFade {
      0% { opacity: 0; transform: translateY(10px); }
      100% { opacity: 1; transform: translateY(0); }
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
      transition: transform 0.4s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      animation: buttonGlow 2s ease-in-out infinite alternate;
    }
    .album-button:hover {
      transform: scale(1.1) translateY(-2px);
      background: linear-gradient(145deg, #4a4a68, #33334d);
      box-shadow: 0 8px 16px rgba(0,0,0,0.5);
    }
    @keyframes buttonGlow {
      0% { box-shadow: 0 4px 12px rgba(255,255,255,0.2); }
      50% { box-shadow: 0 6px 18px rgba(255,255,255,0.4); }
      100% { box-shadow: 0 4px 12px rgba(255,255,255,0.2); }
    }

    
    .description {
      width: 80%;
      max-width: 800px;
      text-align: center;
      margin: 30px auto 50px;
      font-size: 1.1rem;
      color: #ddd;
      line-height: 1.7;
      transition: transform 0.4s ease, text-shadow 0.4s ease;
      animation: descFade 3s ease-in-out forwards;
    }
    .description:hover {
      transform: scale(1.05);
      text-shadow: 0 0 20px rgba(255,255,255,0.6);
    }
    @keyframes descFade {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    
    footer {
      margin-top: auto;
      padding: 20px;
      font-size: 0.9rem;
      color: #aaa;
      text-align: center;
      animation: footerGlow 4s ease-in-out infinite alternate;
    }
    @keyframes footerGlow {
      0% { color: #aaa; text-shadow: none; }
      50% { color: #fff; text-shadow: 0 0 10px #fff; }
      100% { color: #aaa; text-shadow: none; }
    }

  </style>
</head>
<body>

  <div class="nebula"></div>
  <div class="stars"></div>
  
  
  <h1>My Photo Album</h1>

  <div class="slideshow-container">
    <div class="slide active">
      <img src="https://images.pexels.com/photos/27245743/pexels-photo-27245743.jpeg" alt="Nature Path">
      <div class="caption">Peaceful forest paths — a glimpse into nature’s calm.</div>
    </div>

    <div class="slide">
      <img src="https://images.pexels.com/photos/2745259/pexels-photo-2745259.jpeg" alt="Mountain Lake">
      <div class="caption">Reflection of mountains on clear blue lakes.</div>
    </div>

    <div class="slide">
      <img src="https://images.pexels.com/photos/1032650/pexels-photo-1032650.jpeg" alt="Sunset Beach">
      <div class="caption">Golden sunsets that tell stories of peace.</div>
    </div>

    <div class="slide">
      <img src="https://images.pexels.com/photos/34683061/pexels-photo-34683061.jpeg" alt="River Stream">
      <div class="caption">Flowing rivers — symbols of life and renewal.</div>
    </div>

    <div class="slide">
      <img src="https://images.pexels.com/photos/631477/pexels-photo-631477.jpeg" alt="Night Sky">
      <div class="caption">The night sky — endless and full of wonder.</div>
    </div>
  </div>

  <div class="description">
    Welcome to <strong>My Photo Album</strong> — a visual journey through life’s most serene and breathtaking moments.
    Each page of this album explores different themes: <em>nature, people, cities, emotions, and dreams.</em><br><br>
    Let these photos remind us that beauty exists in every corner of the world — if only we take time to see it.
  </div>

 <div class="button-container">
  <button class="album-button" onclick="location.href='{{ route('page1') }}'">Page 1</button>
  <button class="album-button" onclick="location.href='{{ route('page2') }}'">Page 2</button>
  <button class="album-button" onclick="location.href='{{ route('page3') }}'">Page 3</button>
  <button class="album-button" onclick="location.href='{{ route('page4') }}'">Page 4</button>
  <button class="album-button" onclick="location.href='{{ route('page5') }}'">Page 5</button>
  <button class="album-button" onclick="location.href='{{ route('SP') }}'">SP</button>
</div>

  <footer>© 2025 My Photo Album | Designed by EJ</footer>

  <script>
   
    const title = document.querySelector('h1');
    title.innerHTML = title.textContent.split('').map(
      (char, i) => `<span style="animation-delay:${i*0.1}s">${char}</span>`
    ).join('');

    
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    setInterval(() => {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % totalSlides;
      slides[currentSlide].classList.add('active');
    }, 4000);

    
    const starsContainer = document.querySelector('.stars');
    const starCount = 120;
    for(let i=0;i<starCount;i++){
      const star = document.createElement('div');
      star.classList.add('star');
      star.style.width = star.style.height = `${Math.random()*2+1}px`;
      star.style.top = `${Math.random()*100}%`;
      star.style.left = `${Math.random()*100}%`;
      star.style.animationDuration = `${Math.random()*3+2}s`;
      starsContainer.appendChild(star);
    }
  </script>
</body>
</html>
