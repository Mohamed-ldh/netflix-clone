<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coming Soon - IL TEATRO</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="Assets/teatro_logo.png" id="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <script src="slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://unpkg.com/swiper/swiper-bundle.min.css'>
</head>
<body>
    <header>
        <div class="fade_bottom">
            <img src="Assets/bbb.jpg" alt="" id="background" >
            <div class="text">
                <div class="fade">
                <a href="#" onclick="home()"><img src="Assets/Logo-removebg-preview (2).png" alt="" id="logo"></a>
                <div class="tabs">
                <a href="#" onclick="home()">Home</a>
                <a role="#" onclick="shows()">TV Shows</a>
                <a href="#" onclick="movies()">Movies</a>
                <a href="#" >Coming Soon</a>
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
            <label id="title" style="position: fixed;">Coming Soon</label>

        </header>
            
            <img src="Assets/spider_logo.jpg" alt="" id="fnaf_logo" width="20" ><br>
            <label for="" id="disc">After reuniting with Gwen Stacy, Brooklyn's full-time, friendly neighborhood <br> Spider-Man is catapulted across the Multiverse, where he encounters a team of <br> Spider-People charged with protecting its very existence.</label>
        <div class="button">
            <a href="video2.php" class="btn btn-info btn-lg" onclick="video()">
               <span id="play" onclick="video()">▶   Play Trailer</span>
            </a>
            <a href="#" class="btn btn-info btn-lg" >
                <span id="info"> ⓘ More Info</span>   
            </a>
        </div>
