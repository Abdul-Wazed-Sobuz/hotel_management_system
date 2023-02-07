<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Style/Rooms.css">
  <title>Rooms Page</title>
  <style></style>
</head>

<body>

  <?php include 'Header.php'; ?>
  <br><br>

  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 12</div>
      <img src="./Images/r1.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 12</div>
      <img src="./Images/r2.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 12</div>
      <img src="./Images/r3.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 12</div>
      <img src="./Images/r4.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 12</div>
      <img src="./Images/r5.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 12</div>
      <img src="./Images/r6.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 12</div>
      <img src="./Images/r7.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 12</div>
      <img src="./Images/r8.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 12</div>
      <img src="./Images/hr1.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 12</div>
      <img src="./Images/hr2.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 12</div>
      <img src="./Images/hr3.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">12 / 12</div>
      <img src="./Images/hr5.jpg" style="width:1000px;height:350px;">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
  <br><br>

  <h2 style="text-align: center;">Rooms: </h2>
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="./Images/r1.jpg" style="width:90%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/r2.jpg" style="width:90%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/r3.jpg" style="width:90%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/r4.jpg" style="width:90%" onclick="currentSlide(4)">
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="./Images/r5.jpg" style="width:90%" onclick="currentSlide(5)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/r6.jpg" style="width:90%" onclick="currentSlide(6)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/r7.jpg" style="width:90%" onclick="currentSlide(7)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/r8.jpg" style="width:90%" onclick="currentSlide(8)">
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="./Images/hr1.jpg" style="width:90%" onclick="currentSlide(9)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/hr2.jpg" style="width:90%" onclick="currentSlide(10)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/hr3.jpg" style="width:90%" onclick="currentSlide(11)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/hr5.jpg" style="width:90%" onclick="currentSlide(12)">
    </div>
  </div>



  <script src="./Script/Rooms.js"></script>

  <br><br>

  <?php include 'Footer.php'; ?>

</body>

</html>