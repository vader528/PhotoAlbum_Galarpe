<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Special Page fy</title>
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
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-end;
      min-height: 100vh;
    }

    
    .floating-text {
      position: absolute;
      font-size: 1.8rem;
      color: #ffcc70;
      opacity: 0;
      animation: popFade 3s ease-in-out infinite;
      text-shadow: 0 0 10px rgba(255, 204, 112, 0.6);
      pointer-events: none;
    }

    @keyframes popFade {
      0% { opacity: 0; transform: scale(0.6) translateY(0); }
      20% { opacity: 1; transform: scale(1.2) translateY(-10px); }
      40% { opacity: 1; transform: scale(1) translateY(-20px); }
      60% { opacity: 0.8; transform: scale(0.9) translateY(-30px); }
      100% { opacity: 0; transform: scale(0.7) translateY(-40px); }
    }

    
    .button-container {
      position: relative;
      z-index: 10;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      margin-bottom: 40px;
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

    footer {
      position: relative;
      z-index: 10;
      color: #aaa;
      font-size: 0.9rem;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  
  <video autoplay muted loop id="bg-video">
    <source src="https://www.pexels.com/download/video/4156092/" type="video/webm">
  </video>

  
  <div class="button-container">
    <button class="album-button" onclick="location.href='{{ route('home') }}'">🏠 Home</button>
    <button class="album-button" onclick="location.href='{{ route('page1') }}'">Page 1</button>
    <button class="album-button" onclick="location.href='{{ route('page2') }}'">Page 2</button>
    <button class="album-button" onclick="location.href='{{ route('page3') }}'">Page 3</button>
    <button class="album-button" onclick="location.href='{{ route('page4') }}'">Page 4</button>
    <button class="album-button" onclick="location.href='{{ route('page5') }}'">Page 5</button>
    <button class="album-button" onclick="location.href='{{ route('SP') }}'">SP</button>
  </div>

  
  <footer>© 2025 My Photo Album | Flat 1 by EJ</footer>

  <script>
    const words = [
      "flat 1 lang sir",
      "please nani sir",
      "maluoy ka sir",
      "papasara ko sa semi-final sir",
      "papasara ko sa final sir"
    ];

    
    function createWord() {
      const word = document.createElement('div');
      word.classList.add('floating-text');
      word.textContent = words[Math.floor(Math.random() * words.length)];

      
      const x = Math.random() * window.innerWidth;
      const y = Math.random() * window.innerHeight;
      word.style.left = `${x}px`;
      word.style.top = `${y}px`;

      
      word.style.animationDuration = `${2 + Math.random() * 3}s`;
      word.style.animationDelay = `${Math.random()}s`;

      document.body.appendChild(word);

      
      setTimeout(() => {
        word.remove();
      }, 4000);
    }

    
    setInterval(createWord, 300);
  </script>

</body>
</html>
