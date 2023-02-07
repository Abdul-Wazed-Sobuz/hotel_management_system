<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Style/HomeStyle.css">
  <link rel="stylesheet" href="./Style/FooterStyle.css">
  <title>Home Page</title>
</head>

<body>
  <?php include 'Header.php'; ?>

  <br><br>

  <div class="slideshow-container">

    <div class="mySlides fade">

      <img src="./Images/Banner1.jpeg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides fade">

      <img src="./Images/Banner2.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides fade">

      <img src="./Images/Banner3.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides fade">

      <img src="./Images/Banner4.jpeg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides fade">

      <img src="./Images/Banner5.jpg" style="width:1000px;height:350px;">
    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script src="./Script/HomeScript.js"></script>
  <br><br>


  <center>
    <h1>WELCOME TO HOTEL PARADISE</h1>
    <?php
    $myfile = fopen("read.txt", "r") or die("Unable to open file!");
    while (!feof($myfile)) {
      echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    ?>
  </center>
  <br><br>

  <center>

    <div class="container">

      <h1>OUR ROOMS AND SUITES</h1>
      <b>
        <?php
        $myfile = fopen("room.txt", "r") or die("Unable to open file!");
        while (!feof($myfile)) {
          echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        ?>
      </b>
      <div class="image">
        <div class="box">
          <img src="./Images/hr1.jpg" width="240px" height="290px">
        </div>
        <div class="box">
          <img src="./Images/r5.jpg" width="240px" height="290px">
        </div>
        <div class="box">
          <img src="./Images/hr2.jpg" width="240px" height="280px">
        </div>
        <div class="box">
          <img src="./Images/hr3.jpg" width="240px" height="280px">
        </div>
        <div class="box">
          <img src="./Images/hr5.jpg" width="240px" height="280px">
        </div>



      </div>
    </div>
  </center>

  <br><br><br>

  <div class="service-container">
    <h1>OUR SERVICES</h1>

    <center>
      <h4>We are well equipped to cater for your banquet requirements in our state of the art venues with</h4>
      <h4>experienced and dedicated staff. All your dining options will be prepared by our expatriate chefs.</h4>
    </center>
    <br>

    <div class="grid-container">
      <div><img src="./Images/hs.jpg" width="100%">
      </div>

      <div class="table">
        <table width="100%" border="3px solid black" height="25%">
          <td>
            <center>
              <h2>Meetings</h2>
              <b>Be it a business meeting, conference or a get together, you are at the right place. You can select from our different sized venue or make a combination as per your requirement.</b>
            </center>
          </td>
        </table>
        <br>
        <br>
        <table width="100%" border="3px solid black" height="25%">
          <td>
            <center>
              <h2>Restaurants</h2>
              <b>In Hotel Paradise you will never feel any lack of choice of delectable cuisines. We have renowned lounge & restaurants for your selection. You can enjoy a truly unique culinary experience at Hotel Paradise.</b>
            </center>
          </td>
        </table>
        <br><br>

        <table width="100%" border="3px solid black" height="25%">
          <td>
            <center>
              <h2>Events</h2>
              <b>We have all the ingredients you need to accomplish by your events. Our Event Manager and Chefs will guide you to make your event a success.</b>
            </center>
          </td>
        </table>


      </div>

    </div>

  </div>

  <br><br>

  <?php include 'Footer.php'; ?>
</body>

</html>