<?php
session_start();
$session_name = "collected";
$urlParamName = "collect";
$idsCollected = "";

//Is a new client, set collected to beginning
if (!isset($_SESSION[$session_name])) {
    $_SESSION[$session_name] = "000";
} else { //Else, start processing 
    //echo "Old value is: " . $_SESSION[$session_name]."<br>";
    //register the code collected by set that ID's index to 1
    if (isset($_GET[$urlParamName])) {
        $_SESSION[$session_name][$_GET[$urlParamName] - 1] = '1';
        //echo "Value NOW is: " . $_SESSION[$session_name];
        $idsCollected = $_SESSION[$session_name];
    }
}
echo $_SESSION[$session_name];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width" />

        <!-- Included CSS files -->
        <link rel="stylesheet" href="stylesheets/main.css">
        <!-- Included javascript files -->
        <script src="javascripts/Carousel.js"></script>    

        <title>Treasure Hunter 2018</title>
    </head>

    <body>
        <div>
            <button type="button">LOG IN</button> 
            <button type="button">SIGN UP</button> <!-- make it scroll down to our sign up dialog-->
        </div>
        <div class="row">
            <!--p align="left"><h5>Treasure Hunter hosted by:</h5></p-->
            <!--img src="images/lymtLogo.png" align="left"/-->
            <div style="text-align:center"><p id="top"><h2>Welcome!</h2></p></div>
            <?php
            if ($idsCollected == "111") {
                echo "<h2 class='prizeText'>You have collected all codes!<br>Show this screen to collect your prize here:</h2>";
            }
            ?>
        </div>

        <!-- Main Body
            ================================================== -->
        <!-- Carousel's numbers -->
        <div style="text-align:center">
            <div>
                <button class="slideBtn" onclick="currentSlide(1)">1</button> 
                <button class="slideBtn" onclick="currentSlide(2)">2</button> 
                <button class="slideBtn" onclick="currentSlide(3)">3</button> 
            </div>

            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="carouselSlideCollected fade">
                    <div>
                        <h3>lorem ipsum</h3>
                        <img src="resources/images/1.jpeg" style="width:100%">
                        <audio controls>
                            <source src="resources/audio/penguin.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <h4>(Size of audio file: 1.85MB)</h4>
                    </div>
                </div>
                <div class="carouselSlideUncollected fade">
                    <h2 id="slide1-text1">Find QR #1 to unlock this content.</h2>
                </div>
            </div>

            <div class="carouselSlideCollected fade">
                <h3>lorem ipsum</h3>
                <img src="resources/images/2.jpeg" style="width:100%">
            </div>
            <div class="carouselSlideUncollected fade">
                <h2 id="slide1-text1">Find QR #2 to unlock this content.</h2>
            </div>

            <div class="carouselSlideCollected fade">
                <h3>lorem ipsum</h3>
                <img src="resources/images/3.jpg" style="width:100%">
            </div>
            <div class="carouselSlideUncollected fade">
                <h2 id="slide1-text1">Find QR #3 to unlock this content.</h2>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
    </div>



    <!-- Sign Up
    ================================================== -->
    <section hidden="true" class="section-signup bg-faded">
        <div class="container">
            <h3 class="text-xs-center m-b-3">Sign up to receive free updates as soon as they hit!</h3>
            <form>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="form-group has-icon-left form-control-name">
                            <label class="sr-only" for="inputName">Your name</label>
                            <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="form-group has-icon-left form-control-email">
                            <label class="sr-only" for="inputEmail">Email address</label>
                            <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="form-group has-icon-left form-control-password">
                            <label class="sr-only" for="inputPassword">Enter a password</label>
                            <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Enter a password" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign up for free!</button>
                        </div>
                    </div>
                </div>
                <label class="c-input c-checkbox">
                    <input type="checkbox" checked>
                    <span class="c-indicator"></span> I agree to Land.io’s <a href="#">terms of service</a>
                </label>
            </form>
        </div>
    </section>

    <!--================ Footer  ================-->
    <footer>
        <hr/>
        <small align="center">&copy; Treasure Hunter 2018.<br>Designed by Larissa M and Vanessa M.</small>
        <a href="#top" align="right">Back to top</a>
    </footer>

    <script type="text/javascript">
        window.onload = initSlides("<?php echo $_SESSION[$session_name]; ?>");
    </script>


    <?php
    /* if($idsCollected == "111") {
      echo "All codes are collected! Show this screen to collect your prize here:<br>";
      }
      if(isset($_GET["collect"])) { //register the code collected then
      echo "<h1>Hello. You scanned #" . $_GET["collect"] . "</h1><br>";
      } elseif(isset($_GET["action"])) {
      echo "<h1>Hello. You want to do this action: " . $_GET["action"] . "</h1><br>";
      } */
    ?>
</body>