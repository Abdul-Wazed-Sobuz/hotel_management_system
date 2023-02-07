<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
    font-family: Arial;
    margin: 0;
  }

  * {
    box-sizing: border-box;
  }

  img {
    vertical-align: middle;
  }

  /* Position the image container (needed to position the left and right arrows) */
  .container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Hide the images by default */
  .mySlides {
    display: none;
  }

  /* Add a pointer when hovering over the thumbnail images */
  .cursor {
    cursor: pointer;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 30%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 15px;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* Container for image text */
  .caption-container {
    text-align: center;
    background-color: #222;
    padding: 2px 16px;
    color: white;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Six columns side by side */
  .column {
    float: left;
    width: 25%;
  }

  /* Add a transparency effect for thumnbail images */
  .demo {
    opacity: 0.6;
  }

  .active,
  .demo:hover {
    opacity: 1;
  }
</style>

<body>

  <?php include 'Header.php' ?>

  <br><br>

  <div class="container">
    <div class="mySlides">
      <div class="numbertext">1 / 12</div>
      <img src="./Images/gsss1.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 12</div>
      <img src="./Images/gsss2.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 12</div>
      <img src="./Images/gsss3.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 12</div>
      <img src="./Images/gsss4.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 12</div>
      <img src="./Images/gsss5.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 12</div>
      <img src="./Images/gsss6.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 12</div>
      <img src="./Images/gsss7.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 12</div>
      <img src="./Images/gsss8.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 12</div>
      <img src="./Images/gsss9.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 12</div>
      <img src="./Images/gsss10.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 12</div>
      <img src="./Images/gsss11.jpg" style="width:1000px;height:350px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">12/ 12</div>
      <img src="./Images/gsss12.jpg" style="width:1000px;height:350px;">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>

  <h2 style="text-align:center">Gallery</h2>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="./Images/gsss1.jpg" style="width:90%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/gsss2.jpg" style="width:90%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/gsss3.jpg" style="width:90%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/gsss4.jpg" style="width:90%" onclick="currentSlide(4)">
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="./Images/gsss5.jpg" style="width:90%" onclick="currentSlide(5)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/gsss6.jpg" style="width:90%" onclick="currentSlide(6)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/gsss7.jpg" style="width:90%" onclick="currentSlide(7)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/gsss8.jpg" style="width:90%" onclick="currentSlide(8)">
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="./Images/gsss9.jpg" style="width:90%" onclick="currentSlide(9)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/gsss10.jpg" style="width:90%" onclick="currentSlide(10)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/gsss11.jpg" style="width:90%" onclick="currentSlide(11)">
    </div>
    <div class="column">
      <img class="demo cursor" src="./Images/gsss12.jpg" style="width:90%" onclick="currentSlide(12)">
    </div>
  </div>


  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>

  <br><br>

  <?php include 'Footer.php' ?>

</body>

</html>