<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://thrashcan.net/includes/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" href="http://thrashcan.net/includes/bootstrap.min.css">
  <script src="http://thrashcan.net/includes/bootstrap.min.js"></script>
  <link rel="stylesheet"
    href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="main.css?v=042517c">
</head>
<body>
  <div class="container">
    <div class="row" id="intro">
      <div class="col-lg-4 col-xs-12 text-center">
        <img src="pics/bus.gif" />
      </div>
      <div class="col-lg-6 col-xs-12 text-center">
        <h2>Welcome to The Cheesesteak Academy!</h2>
      </div>
    </div>

    <div class="row text-center" id="aboutChris">
      <div class="col-lg-12 col-xs-12">
        <h3>About the Owner:</h3>
        <p>Born in Philadelphia, Christopher has cheesesteaks running through his veins.
        <br>Transplanted to Nashville almost 20 years ago, he was unable to find his first love - an authentic "Wit Wiz" (with cheese whiz) steak sandwich.
        <br>Sure, lots of places claim to have the best Philly Cheesesteaks, but it's all lies.
        <br>Any trip up north Christopher would make sure he flew into Philadelphia International Airport - just to go to Pat's King of Steaks, where it all started.
        <br>Then it happened... Christopher figured out the recipe. Sure, he could be greedy and keep it all to himself but he's not that kind of guy.
        <br>Instead, he decided to educate your tastebuds.
        </p>
      </div>
    </div>

    <!--fetch the current location of the truck from loc.txt -->
    <?php
      $locFile = fopen('loc.txt', 'r');
      $location = fread($locFile, filesize('loc.txt'));
    ?>
    <div class="row" id="truckFinder">
      <div class="col-lg-6 col-xs-12">
        <h4>Don't miss the bus!</h4>
        <iframe
          width="100%"
          height="350px"
          frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAb_y9cQ9NdEHYasf3R2UnTLS4kMRe_W9M&q=<?php echo $location; ?>" allowfullscreen>
        </iframe>
      </div>
      <div class="col-lg-6 col-xs-12">
        <img src="/cheesesteak/pics/cheesesteak.jpg">
      </div>
    </div>
  </div>
  </div>
</body>
