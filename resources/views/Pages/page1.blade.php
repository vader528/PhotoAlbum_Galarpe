<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Photo Album - Nature</title>
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
    }

    .back-button {
      background: linear-gradient(145deg, #3b3b52, #262638);
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 25px;
      font-size: 1rem;
      margin-top: 40px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
      transition: 0.3s;
    }

    .back-button:hover {
      background: linear-gradient(145deg, #4a4a68, #33334d);
      transform: scale(1.05);
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
    <source src="https://www.pexels.com/download/video/13456698//" type="video/webm">
  </video>
  <h1><span class="emoji">🌿</span>Nature Gallery</h1>
  <h3>Discover the beauty of nature through stunning landscapes, vibrant wildlife, and serene scenes that inspire wonder and peace.<h3>
  
  <div class="gallery">
    <a href="https://media.istockphoto.com/id/152538687/photo/morning-light.jpg?s=612x612&w=0&k=20&c=W-sIciYQnwZXpTxuwp7Lj-2VIwLCRepiys6HYfbvzQ0=" class="photo-card">
      <img src="https://media.istockphoto.com/id/152538687/photo/morning-light.jpg?s=612x612&w=0&k=20&c=W-sIciYQnwZXpTxuwp7Lj-2VIwLCRepiys6HYfbvzQ0=" alt="Forest Path">
     <div class="description">
  A quiet path through the forest,<br>
  kissed by morning light.
</div>

    <a href="https://images.stockcake.com/public/5/0/e/50ea6627-4843-486b-8b9b-7e1c3c4f9b96_large/sunrise-mountain-view-stockcake.jpg" class="photo-card">
      <img src="https://images.stockcake.com/public/5/0/e/50ea6627-4843-486b-8b9b-7e1c3c4f9b96_large/sunrise-mountain-view-stockcake.jpg" alt="Mountain Peak">
      <div class="description">The sun rises over <br>
      a majestic mountain peak.</div>
    </a>

    <a href="https://plus.unsplash.com/premium_photo-1673697239936-c2599b0b0498?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGFrZSUyMHJlZmxlY3Rpb258ZW58MHx8MHx8fDA%3D&fm=jpg&q=60&w=3000" class="photo-card">
      <img src="https://plus.unsplash.com/premium_photo-1673697239936-c2599b0b0498?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGFrZSUyMHJlZmxlY3Rpb258ZW58MHx8MHx8fDA%3D&fm=jpg&q=60&w=3000" alt="Lake Reflection">
      <div class="description">Still waters reflecting the beauty of the sky.</div>
    </a>

    <a href="https://iso.500px.com/wp-content/uploads/2015/03/Fairy-falls1500px.jpg" class="photo-card">
      <img src="https://iso.500px.com/wp-content/uploads/2015/03/Fairy-falls1500px.jpg" alt="Waterfall">
      <div class="description">A powerful waterfall surrounded<br>by mossy rocks.</div>
    </a>

    <a href="https://media.istockphoto.com/id/1319495889/photo/last-days-of-spring.jpg?s=612x612&w=0&k=20&c=tipoScX9gov7M8PPcpImIhCxw_uVO7U9FWUH-Dby9Iw=" class="photo-card">
      <img src="https://media.istockphoto.com/id/1319495889/photo/last-days-of-spring.jpg?s=612x612&w=0&k=20&c=tipoScX9gov7M8PPcpImIhCxw_uVO7U9FWUH-Dby9Iw=" alt="Sunset Field">
      <div class="description">Golden fields glowing <br>under the evening sun.</div>
    </a>

    <a href="https://www.theshivanna.com/wp-content/uploads/2024/07/sunrise-header.png" class="photo-card">
      <img src="https://www.theshivanna.com/wp-content/uploads/2024/07/sunrise-header.png" alt="Beach Sunrise">
      <div class="description">Waves dance under a breathtaking sunrise.</div>
    </a>

    <a href="https://img.freepik.com/free-photo/trees-surrounded-by-fogs-forest_198169-90.jpg?semt=ais_hybrid&w=740&q=80" class="photo-card">
      <img src="https://img.freepik.com/free-photo/trees-surrounded-by-fogs-forest_198169-90.jpg?semt=ais_hybrid&w=740&q=80" alt="Foggy Forest">
      <div class="description">Mystery lingers<br>among<br>the fog-covered trees.</div>
    </a>

    <a href="https://cdn.minnesotamonthly.com/wp-content/uploads/sites/85/2024/07/Unknown-4.jpeg" class="photo-card">
      <img src="https://cdn.minnesotamonthly.com/wp-content/uploads/sites/85/2024/07/Unknown-4.jpeg" alt="Flower Field">
      <div class="description">A colorful field<br>of<br>sunflowers in full bloom.</div>
    </a>

    <a href="https://img.freepik.com/premium-photo/full-frame-shot-pebbles-shore_1048944-2601804.jpg?semt=ais_hybrid&w=740&q=80" class="photo-card">
      <img src="https://img.freepik.com/premium-photo/full-frame-shot-pebbles-shore_1048944-2601804.jpg?semt=ais_hybrid&w=740&q=80" alt="River Stones">
      <div class="description">Clear river water glides<br>gently ove<br>smooth stones.</div>
    </a>

    <a href="https://th-thumbnailer.cdn-si-edu.com/JmhJxk_k1C6HLTgkitNcQduJHoU=/fit-in/1600x0/https://tf-cmsv2-smithsonianmag-media.s3.amazonaws.com/filer/1c/ed/1ced3bd2-94dc-4bc4-94ad-91880079553d/e08erc.jpg" class="photo-card">
      <img src="https://th-thumbnailer.cdn-si-edu.com/JmhJxk_k1C6HLTgkitNcQduJHoU=/fit-in/1600x0/https://tf-cmsv2-smithsonianmag-media.s3.amazonaws.com/filer/1c/ed/1ced3bd2-94dc-4bc4-94ad-91880079553d/e08erc.jpg" alt="Desert Dunes">
      <div class="description">Golden dunes shifting<br>beneath the desert sun.</div>
    </a>

    <a href="https://img.freepik.com/free-photo/moravian-tuscany-beautiful-spring-landscape-south-moravia-near-kyjov-town-czech-republic-e_1161-748.jpg?semt=ais_hybrid&w=740&q=80" class="photo-card">
      <img src="https://img.freepik.com/free-photo/moravian-tuscany-beautiful-spring-landscape-south-moravia-near-kyjov-town-czech-republic-e_1161-748.jpg?semt=ais_hybrid&w=740&q=80" alt="Green Meadow">
      <div class="description">A peaceful meadow kissed<br>by the morning dew.</div>
    </a>

    <a href="https://images.pexels.com/photos/975771/pexels-photo-975771.jpeg?cs=srgb&dl=pexels-davidriano-975771.jpg&fm=jpg" class="photo-card">
      <img src="https://images.pexels.com/photos/975771/pexels-photo-975771.jpeg?cs=srgb&dl=pexels-davidriano-975771.jpg&fm=jpg" alt="Rainforest">
      <div class="description">Lush greenery thrives in<br>
      the heart of the rainforest.</div>
    </a>

    <a href="https://images.stockcake.com/public/6/3/b/63bb7d00-0548-4020-85d6-cbcaf25f9937_large/icy-mountain-vista-stockcake.jpg" class="photo-card">
      <img src="https://images.stockcake.com/public/6/3/b/63bb7d00-0548-4020-85d6-cbcaf25f9937_large/icy-mountain-vista-stockcake.jpg" alt="Ice Mountain">
      <div class="description">Frozen peaks gleam under<br>
      the winter sky.</div>
    </a>

    <a href="https://static.vecteezy.com/system/resources/previews/053/828/603/large_2x/a-stream-of-water-flows-through-a-forest-with-sunlight-shining-on-the-water-free-photo.jpg" class="photo-card">
      <img src="https://static.vecteezy.com/system/resources/previews/053/828/603/large_2x/a-stream-of-water-flows-through-a-forest-with-sunlight-shining-on-the-water-free-photo.jpg" alt="Forest Stream">
      <div class="description">A crystal-clear stream<br>winds through<br>green woods.</div>
    </a>

    <a href="https://arashiyamabambooforest.com/wp-content/uploads/2024/09/Arashiyama-Bamboo-Grove.jpg" class="photo-card">
      <img src="https://arashiyamabambooforest.com/wp-content/uploads/2024/09/Arashiyama-Bamboo-Grove.jpg" alt="Bamboo Grove">
      <div class="description">A tranquil bamboo forest whispering with the wind.</div>
    </a>

    <a href="https://images.unsplash.com/photo-1509625409161-38f93149c7b7?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2xvdWR5JTIwbW91bnRhaW58ZW58MHx8MHx8fDA%3D&fm=jpg&q=60&w=3000" class="photo-card">
      <img src="https://images.unsplash.com/photo-1509625409161-38f93149c7b7?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2xvdWR5JTIwbW91bnRhaW58ZW58MHx8MHx8fDA%3D&fm=jpg&q=60&w=3000" alt="Cloudy Mountains">
      <div class="description">Mountains veiled in soft drifting clouds.</div>
    </a>

    <a href="https://www.burohappold.com/wp-content/uploads/2020/05/rural-housing_getty.jpg" class="photo-card">
      <img src="https://www.burohappold.com/wp-content/uploads/2020/05/rural-housing_getty.jpg" alt="Countryside">
      <div class="description">Rolling hills and<br>
      quiet cottages<br>
      under open skies.</div>
    </a>

    <a href="https://blog.sakura.co/wp-content/uploads/2023/01/sakuraco_sakura-of-japan-thumbnail.png" class="photo-card">
      <img src="https://blog.sakura.co/wp-content/uploads/2023/01/sakuraco_sakura-of-japan-thumbnail.png" alt="Sakura Trees">
      <div class="description">Cherry blossoms painting<br>
      the world in<br>pink and white.</div>
    </a>

    <a href="https://t4.ftcdn.net/jpg/07/26/57/39/360_F_726573968_5HSEvlWy9p3NWoCmcqaB4rnji5ybapzv.jpg" class="photo-card">
      <img src="https://t4.ftcdn.net/jpg/07/26/57/39/360_F_726573968_5HSEvlWy9p3NWoCmcqaB4rnji5ybapzv.jpg" alt="Rocky Shore">
      <div class="description">Waves crash over the<br>
      ancient stones<br>of the shore.</div>
    </a>

    <a href="https://cdn.pixabay.com/photo/2018/03/02/19/21/nature-3194001_1280.jpg" class="photo-card">
      <img src="https://cdn.pixabay.com/photo/2018/03/02/19/21/nature-3194001_1280.jpg" alt="Night Forest">
      <div class="description">Moonlight glimmers<br>
      through<br>
      the silent forest night.</div>
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
 
  <footer>© 2025 My Photo Album | Nature Collection by EJ</footer>

  <script>
  const title = document.querySelector('h1');
  const text = title.textContent.replace('🌿', '').trim(); 
  title.innerHTML = `<span class="emoji">🌿</span> ` + text.split('').map(
    (char, i) => `<span style="animation-delay:${i * 0.1}s">${char}</span>`
  ).join('');
</script>

</body>
</html>
