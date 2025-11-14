<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Photo Album - Animals</title>
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
    <source src="https://media.istockphoto.com/id/1255754954/video/school-of-fish-sharks-swim-in-a-circle.mp4?s=mp4-640x640-is&k=20&c=YqOEIjdlfaofiSnAwTszq021DXQvTb2p-hNia4dZtxA=" type="video/webm">
  </video>
  <h1><span class="emoji">🦁</span>Animal Kingdom</h1>
  <h3>Explore the majestic world of animals — from wild predators and exotic birds to playful pets and underwater wonders.</h3>

  <div class="gallery">
    <a href="https://www.krugerpark.co.za/images/black-maned-lion-shem-compion-786x500.jpg#" class="photo-card">
      <img src="https://www.krugerpark.co.za/images/black-maned-lion-shem-compion-786x500.jpg" alt="Lion">
      <div class="description">The king of the savannah, proud and fierce.</div>
    </a>

    <a href="https://i.natgeofe.com/k/e7ba8001-23ac-457f-aedb-abd5f2fdda62/moms5_4x3.png" class="photo-card">
      <img src="https://i.natgeofe.com/k/e7ba8001-23ac-457f-aedb-abd5f2fdda62/moms5_4x3.png" alt="Elephant">
      <div class="description">Gentle giants wandering<br>the plains.</div>
    </a>

    <a href="https://cms.bbcearth.com/sites/default/files/inline-images/tiger-3_0.jpg" class="photo-card">
      <img src="https://cms.bbcearth.com/sites/default/files/inline-images/tiger-3_0.jpg" alt="Tiger">
      <div class="description">A tiger prowls silently<br>through the jungle.</div>
    </a>

    <a href="https://s.abcnews.com/images/Technology/GTY_howling_wolf_tk_130829_16x9_1600.jpg" class="photo-card">
      <img src="https://s.abcnews.com/images/Technology/GTY_howling_wolf_tk_130829_16x9_1600.jpg" alt="Wolf">
      <div class="description">Wolves howling under the moonlight.</div>
    </a>
    <a href="https://i.natgeofe.com/k/1eda8663-a419-43a2-9c1e-2ea1c9b6783a/giraffe-pair-eating.jpg?wp=1&w=1084.125&h=609" class="photo-card">
      <img src="https://i.natgeofe.com/k/1eda8663-a419-43a2-9c1e-2ea1c9b6783a/giraffe-pair-eating.jpg?wp=1&w=1084.125&h=609" alt="Giraffe">
      <div class="description">Tall giraffes reaching for the highest leaves.</div>
    </a>

    <a href="https://wwfafrica.awsassets.panda.org/img/emperor-penguin_original_ww1446916_169800.webp" class="photo-card">
      <img src="https://wwfafrica.awsassets.panda.org/img/emperor-penguin_original_ww1446916_169800.webp" alt="Penguin">
      <div class="description">Playful penguins<br>waddling on ice.</div>
    </a>

    <a href="https://i.natgeofe.com/k/6f2282df-1c6a-474a-9216-ed97b3dce858/Panda-Bamboo_Panda-Quiz_KIDS_1021.jpg?wp=1&w=1084.125&h=721.875" class="photo-card">
      <img src="https://i.natgeofe.com/k/6f2282df-1c6a-474a-9216-ed97b3dce858/Panda-Bamboo_Panda-Quiz_KIDS_1021.jpg?wp=1&w=1084.125&h=721.875" alt="Panda">
      <div class="description">A panda munching bamboo<br>in serenity.</div>
    </a>

    <a href="https://cdn.britannica.com/95/206395-050-02B81B30/Red-fox-Vulpes-vulpes.jpg" class="photo-card">
      <img src="https://cdn.britannica.com/95/206395-050-02B81B30/Red-fox-Vulpes-vulpes.jpg" alt="Fox">
      <div class="description">A sly fox exploring<br>the forest.</div>
    </a>

    <a href="https://t4.ftcdn.net/jpg/02/65/70/73/360_F_265707361_N79UdgpbERwsjHZxIWRixuodCKqYsBF5.jpg" class="photo-card">
      <img src="https://t4.ftcdn.net/jpg/02/65/70/73/360_F_265707361_N79UdgpbERwsjHZxIWRixuodCKqYsBF5.jpg" alt="Koala">
      <div class="description">A sleepy koala clinging<br>to its tree.</div>
    </a>

    <a href="https://cdn.britannica.com/16/75616-050-14C369D3/dolphins-mammals-fish-water.jpg" class="photo-card">
      <img src="https://cdn.britannica.com/16/75616-050-14C369D3/dolphins-mammals-fish-water.jpg" alt="Dolphin">
      <div class="description">Dolphins dancing<br>in the waves.</div>
    </a>

    <a href="https://upload.wikimedia.org/wikipedia/commons/d/db/Bald_eagle_about_to_fly_in_Alaska_%282016%29.jpg" class="photo-card">
      <img src="https://upload.wikimedia.org/wikipedia/commons/d/db/Bald_eagle_about_to_fly_in_Alaska_%282016%29.jpg" alt="Eagle">
      <div class="description">Eagles soaring high above mountains.</div>
    </a>

    <a href="https://images.pexels.com/photos/19511442/pexels-photo-19511442/free-photo-of-horses-running-on-a-desert.jpeg" class="photo-card">
      <img src="https://images.pexels.com/photos/19511442/pexels-photo-19511442/free-photo-of-horses-running-on-a-desert.jpeg" alt="Horses">
      <div class="description">Wild horses galloping freely.</div>
    </a>

    <a href="https://cdn.download.ams.birds.cornell.edu/api/v1/asset/386298771/1200" class="photo-card">
      <img src="https://cdn.download.ams.birds.cornell.edu/api/v1/asset/386298771/1200" alt="Owl">
      <div class="description">An owl perched silently at night.</div>
    </a>

    <a href="https://www.worldanimalprotection.us/cdn-cgi/image/fit=cover,width=1280/siteassets/article/gettyimages-523708404.jpg" class="photo-card">
      <img src="https://www.worldanimalprotection.us/cdn-cgi/image/fit=cover,width=1280/siteassets/article/gettyimages-523708404.jpg" alt="Zebra">
      <div class="description">Zebras grazing in patterned harmony.</div>
    </a>

    <a href="https://media.4-paws.org/6/f/6/5/6f6559a30122eaf4bbbd884a8e1325eec73db859/bear_sanctuary_prishtina_20210322_175644-1080x748.jpg" class="photo-card">
      <img src="https://media.4-paws.org/6/f/6/5/6f6559a30122eaf4bbbd884a8e1325eec73db859/bear_sanctuary_prishtina_20210322_175644-1080x748.jpg" alt="Bear">
      <div class="description">A bear in its natural habitat.</div>
    </a>

    <a href="https://i.natgeofe.com/n/f20b9142-f347-4a49-bb5d-dba349e489a9/57554.jpg" class="photo-card">
      <img src="https://i.natgeofe.com/n/f20b9142-f347-4a49-bb5d-dba349e489a9/57554.jpg" alt="Cheetah">
      <div class="description">A cheetah running at top speed.</div>
    </a>

    <a href="https://media-cldnry.s-nbcnews.com/image/upload/t_social_share_1024x768_scale,f_auto,q_auto:best/newscms/2019_18/2842271/190501-green-sea-turtle-mn-1440.jpg" class="photo-card">
      <img src="https://media-cldnry.s-nbcnews.com/image/upload/t_social_share_1024x768_scale,f_auto,q_auto:best/newscms/2019_18/2842271/190501-green-sea-turtle-mn-1440.jpg" alt="Turtle">
      <div class="description">A sea turtle gliding<br>gracefully underwater.</div>
    </a>

    <a href="https://www.popsci.com/wp-content/uploads/2024/09/plant_flowers_for_butterflies.jpg?quality=85" class="photo-card">
      <img src="https://www.popsci.com/wp-content/uploads/2024/09/plant_flowers_for_butterflies.jpg?quality=85" alt="Butterfly">
      <div class="description">A butterfly lands delicately<br>on a flower.</div>
    </a>

    <a href="https://cdn.mos.cms.futurecdn.net/ZRAWdgHeNNPw8PaSxg7kVj-1200-80.jpg" class="photo-card">
      <img src="https://cdn.mos.cms.futurecdn.net/ZRAWdgHeNNPw8PaSxg7kVj-1200-80.jpg" alt="Monkey">
      <div class="description">A curious monkey swinging between branches.</div>
    </a>

    <a href="https://www.thefactsite.com/wp-content/uploads/2018/07/facts-about-parrots.jpg" class="photo-card">
      <img src="https://www.thefactsite.com/wp-content/uploads/2018/07/facts-about-parrots.jpg" alt="Parrot">
      <div class="description">Colorful parrots showing<br>their vibrant plumage.</div>
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
  const text = title.textContent.replace('🦁', '').trim(); 
  title.innerHTML = `<span class="emoji">🦁</span> ` + text.split('').map(
    (char, i) => `<span style="animation-delay:${i * 0.1}s">${char}</span>`
  ).join('');
</script>

  <footer>© 2025 My Photo Album | Animal Collection by EJ</footer>
</body>
</html>
