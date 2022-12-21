<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
<body>
  <header>
    <div class="nav-bar">
      <a href="" class="logo">NomNom</a>
      <!-- <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042493106324512979/N_O_M_N_O_M__1_-removebg-preview.png" alt="" -->
      <!-- width="80" 
      height="80"> -->
      <div class="navigation">
        <div class="nav-items">
          <i class="uil uil-times nav-close-btn"></i>
          <!-- <a href="#"><i class="uil uil-home"></i> Home</a> -->
          <a href="/notif"><i class="uil uil-compass"></i> <b>Notification</b></a>
          <!-- <a href="#"><i class="uil uil-info-circle"></i> Your Cat's Data</a> -->
          <!-- <a href="#"><i class="uil uil-document-layout-left"></i> Blog</a> -->
          <a href="/contactus"><i class="uil uil-envelope"></i> <b>Contact Us</b></a>
        </div>
      </div>
      <i class="uil uil-apps nav-menu-btn"></i>
    </div>
  </header>

  <section class="home">
    <!-- <div class="media-icons">
      <a href="#"><i class="uil uil-facebook-f"></i></a>
      <a href="#"><i class="uil uil-whatsapp"></i></a>
      <a href="#"><i class="uil uil-fast-mail"></i></a>
    </div> -->

    <div class="swiper bg-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042497306852859904/NomNomCat.png" alt="">
          <div class="text-content">
            <h2 class="title">NomNom!</h2>
            <p>We will help you to taking care of your cat</p>
            
            <!-- <button class="read-btn">Click Here<i class="uil uil-arrow-right"></i></button> -->
          </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042495335941029908/NomNomCat_1.png" alt="">
          <div class="text-content">
            <h1 class="title">Your Cat's Data <span>Daily Routine</span></h1>
            <!-- <p>Your daily cat history</p> -->
            <div class="d-flex justify-content-center container shadow-lg text-center" style="background-color:white;">
            <canvas id="myChart"class="my-3" style="width:100%;max-width:400px"></canvas>
            </div>  
            <div class="d-flex justify-content-center">
            <button class="read-btn" onclick="charty()" style="margin-right:10px;"><i class="uil uil-arrow-left"></i>Before</button>
            <button class="read-btn" onclick="charty()">Next<i class="uil uil-arrow-right"></i></button>
            </div>
          </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042510099488440432/NomNomCat_3.png" alt="">
          <div class="text-content">
            <h2 class="title">Profile Settings</h2>
            
              <button class="read-btn"><a href="/" style="text-decoration:none;">Logout</a></button>
           
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-slider-thumbs">
      <div class="swiper-wrapper thumbs-container">
        <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042509019274805298/Untitled_design_4.png" class="swiper-slide" alt="">
        <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042512628590841976/Untitled_design_5.png" class="swiper-slide" alt="">
        <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042505969114026044/Untitled_design_3.png" class="swiper-slide" alt="">
        
      </div>
    </div>
  </section>

  <!-- import { initializeApp } from "https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"; -->
  <!-- import { getAnalytics } from "https://www.gstatic.com/firebasejs/8.1.1/firebase-database.js"; -->

  <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-database.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>

  // Import the functions you need from the SDKs you need
  
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyA-QQsYjB36HdjTgoaLk0H8D2r32OeC0wE",
    authDomain: "nomnom-cat.firebaseapp.com",
    databaseURL: "https://nomnom-cat-default-rtdb.firebaseio.com",
    projectId: "nomnom-cat",
    storageBucket: "nomnom-cat.appspot.com",
    messagingSenderId: "121041603347",
    appId: "1:121041603347:web:9af7a9b5b09c4bcb44a8e6",
    measurementId: "G-CVWEN32VY3"
  };

  let cat = 0;
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  firebase.database()
  .ref("abc")
  .on("value", (snapshot) => {
    cat = snapshot.val();
  })

  const unixTimestamp = Date.now();
  const dateObject = new Date(unixTimestamp);
  const timestamp = dateObject.toLocaleString("en-US", {hour: "numeric", minute: "numeric"});

  const myCanvas = document.getElementById('myChart');
  const myChart = new Chart(myCanvas,{
    type: 'line',
    data:{
      labels:[timestamp, timestamp, timestamp, timestamp, timestamp, timestamp],
      datasets: [{
        label: 'Cat history',
        data: [Math.random() * 100, Math.random() * 100, Math.random() * 100, Math.random() * 100, Math.random() * 100, Math.random() * 100],
        backgroundColor: [
          'rgb(110,80,225)'
        ],
        borderColor: [
          'rgb(110,80,225)'
        ],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        }
      }
    }
  });

 (function loop() {
    const unixTimestamp = Date.now();
    const dateObject = new Date(unixTimestamp);
    const timestamp = dateObject.toLocaleString("en-US", {hour: "numeric", minute: "numeric"});

    var catData = Math.random() * 100;


    myChart.data.datasets[0].data.push(catData);
    myChart.data.datasets[0].data.splice(0,1);
    myChart.data.labels.push(timestamp);
    myChart.data.labels.splice(0,1);
    myChart.update();
    window.setTimeout(loop, 5000);
 })();

</script>


<!-- https://console.firebase.google.com/u/2/project/nomnom-cat/overview?pli=1 link firebase -->
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
      