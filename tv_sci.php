<?php
session_start();
?>
<!DOCTYPE html>
<html dir="auto">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sci-Fi TV Shows - IL TEATRO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="Assets/teatro_logo.png" id="icon">
    <link rel='stylesheet' href='https://unpkg.com/swiper/swiper-bundle.min.css'>
    <script src="slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        window.console = window.console || function(t) {};
    </script>
</head>
<body>
    <header>
        <div class="fade_bottom">
            <img src="Assets/rick1.jpg" alt="" id="background" >
            <div class="text">
                <div class="fade">
                <a href="#" onclick="home()"><img src="Assets/Logo-removebg-preview (2).png" alt="" id="logo"></a>
                <div class="tabs">
                <a href="#" aria-readonly="true">Home</a>
                <a href="#" onclick="shows()">TV Shows</a>
                <a href="#" onclick="movies()">Movies</a>
                <a href="#" onclick="soon()">Coming Soon</a>
                </div>
                <div class="user-info" style="position: absolute; right:125px; top:17%; color:white">
                    <?php
            if (isset($_SESSION['name'])) {
              $name = $_SESSION['name'];
              echo "Welcome, $name";
          } else {
              echo "Welcome, Guest";
          }
                    ?>
                    </div> 
                    <div class="logout-btn">
                        <a href="logout.php" id="logout" style="position: absolute; top:25%; right:0px;">Logout</a>
                    </div> 
                </div>
                <div class="search">
                    <input class="input" type="text" placeholder="Titles, people, genres">
                    <img class="img" src="Assets/1e59a5dd-8a3c-40a0-9502-f7e55e191a6c-re_bg.png" alt="">
                  </div>
                  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                  <script id="rendered-js">
                    
                    $('.img').click(function () {
                    $('.input').toggleClass('toggle');
                    });
                
                    $(document).click(function (e) {
                    if (!$(e.target).parent(".search").length) {
                        $(".search").find(".input").removeClass("toggle");
                    }
                    });
                  </script>
                </div>
            </div>
            <label for="" id="title_op" onclick="shows()" style="position: fixed;">TV Shows ></label>
            <label for="" class="op" style="position: fixed; left:180px"><h1>Sci-Fi TV Shows</h1></label>
        </header>
            
            <img src="Assets/rick.jpg" alt="" id="pb_logo"><br>
            <label for="" id="disc">A notorious gang in 1919 Birminham, England, is led by the<br>fierce Tommy Shelby, a crime boss set on moving up in the world<br>no matter the cost.</label>
        <div class="button">
            <a href="#" class="btn btn-info btn-lg">
               <span id="play">▶   Play</span>
            </a>
            <a href="#" class="btn btn-info btn-lg" >
                <span id="info"> ⓘ More Info</span>   
            </a>
        </div>
        <label for="" id="popu"><h2>Popular on Il Teatro</h2></label>
        <div class="container">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="Assets/dark.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="Assets/flash.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="Assets/titain.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="Assets\thor.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="Assets\resident.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="Assets\witcher.jpg" alt="">
              </div>
              
              <div class="swiper-slide">
                <img src="Assets\knife.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="Assets\sand.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="Assets\mist.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="Assets\lighting.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="Assets/spcae.jpg" alt="">
              </div>
              <div class="swiper-slide">
                  <img src="Assets\island.jpg" alt="">
                </div>
            </div>
            
            <!-- Add Arrows -->
            <div class="swiper-button-next" style="margin-top: 22%;"></div>
            <div class="swiper-button-prev" style="margin-top: 22%;"></div>
          </div>
          </div>

              <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
          
            <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js'></script>
          
        <script src="script.js"></script>
</body>
</html>