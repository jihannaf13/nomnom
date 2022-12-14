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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
            <canvas id="myChart" class="my-3" style="width:100%;max-width:400px"></canvas>
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

  <script>

    // chart 1
    var xValues = ['00.00','01.00','02.00','03.00','04.00','05.00','06.00','07.00','08.00','09.00','10.00','11.00','12.00','13.00','14.00','15.00','16.00','17.00','18.00','19.00','20.00','21.00','22.00','23.00'];
    var yValues = [0,0,8,9,9,9,10,8,6,5,8,8,9,5,2,6,7,3,9,8,3,7,5,7]; 
    //chart 2
    var xValues2 = ['00.00','01.00','02.00','03.00','04.00','05.00','06.00','07.00','08.00','09.00','10.00','11.00','12.00','13.00','14.00','15.00','16.00','17.00','18.00','19.00','20.00','21.00','22.00','23.00'];
    var yValues2 = [0,0,6,7,10,8,3,5,4,2,7,3,0,2,7,6,4,8,3,7,6,5,7,2];
    //chart 1
    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });

    new Chart("myChart2", {
      type: "line",
      data: {
        labels: xValues2,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues2
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });

    function charty() {
      // <div class="d-flex justify-content-center container shadow-lg text-center" style="background-color:white;">
      // <canvas id="myChart2" class="my-3" style="width:100%;max-width:400px"></canvas> 

    }

</script>
<!-- https://console.firebase.google.com/u/2/project/nomnom-cat/overview?pli=1 link firebase -->
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
      