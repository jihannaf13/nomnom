<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

  <header>
    <div class="nav-bar">
      <a href="" class="logo">Notification</a>
      <!-- <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042493106324512979/N_O_M_N_O_M__1_-removebg-preview.png" alt="" -->
      <!-- width="80" 
      height="80"> -->
      <div class="navigation">
        <div class="nav-items">
          <i class="uil uil-times nav-close-btn"></i>
          <!-- <a href="#"><i class="uil uil-home"></i> Home</a> -->
          <a href="/home"><i class="uil uil-compass"></i> <b>Home</b></a>
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
          <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042710517296398338/NomNomCat_5.png" alt="">
          <div class="text-content">
            <h2 class="title">NomNom</h2>
            <p>Your cat is hungry :(</p>
        
            <button class="read-btn"  onclick="showAlert()">Feed The Cat!</button>
          </div>
        </div>
        
        <!-- <div class="swiper-slide">
          <img src="images/bg4.jpg" alt="">
          <div class="text-content">
            <h2 class="title">Spring <span>Season</span></h2>
            <p>Spring, also known as springtime, is one of the four temperate seasons, succeeding
            winter and preceding summer. There are various technical definitions of spring, but
            local usage of the term varies according to local climate, cultures and customs. When
            it is spring in the Northern Hemisphere, it is autumn in the Southern Hemisphere and
            vice versa.</p>
            <button class="read-btn">Read More <i class="uil uil-arrow-right"></i></button>
          </div> -->
        </div>
      </div>
    </div>
    
    <div class="bg-slider-thumbs">
      <div class="swiper-wrapper thumbs-container">
        <!-- <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042509019274805298/Untitled_design_4.png" class="swiper-slide" alt="">
        <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042512628590841976/Untitled_design_5.png" class="swiper-slide" alt="">
        <img src="https://cdn.discordapp.com/attachments/984015287923929122/1042505969114026044/Untitled_design_3.png" class="swiper-slide" alt="">
        <img src="images/bg4.jpg" class="swiper-slide" alt=""> -->
      </div>
    </div>
  </section>
  <script>
  function showAlert() {
    alert ("Yeay! Your cat's bowl is refilled!");
  }
  </script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
      