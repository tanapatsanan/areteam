<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    
</head>
<body>
<?php include 'header.php';?>
    <div class="hd">
      <h1>PRODUCTS</h1>
    </div>

    <div class="elementor-element elementor-element-f3d2de9 e-flex e-con e-child" data-id="f3d2de9" 
    data-element_type="contain" ></div>
   
   <div class="products">
    <div class="">
      <div class= "img">
      <img src="imgs/products1.png" width="400" height="250"><br></div>
        <div class="test"><h3>NOONAR</h3>
          <pre>
            <h4>
            หนูนา เป็นหุ่นยนต์สอดแนมที่เบา
            เป็นพิเศษและขว้างได้สำหรับพื้นที่
            ขนาดเล็ก ที่จำกัด และเป็นอันตราย
            </h4>
            <a href="noonar.php" class="explore-button">Explore</a>
          </pre>
          
        </div>
    </div>

    <div class="">
    <div class= "img">
      <img src="imgs/products2.png" width="320" height="300"><br></div>
        <div class="test"><h3>D- EMPIR</h3>
          <pre>
            <h4>
            หุ่นยนต์ภาคพื้นดินที่ทำงาน  
            ระบบเคลื่อนที่ทุกสภาพอากาศ
            สามารถทำงานได้ในทุกพื้นที่
            </h4>
            <a href="dempir.php" class="explore-button">Explore</a>
          </pre>
          
        </div>
    </div>

    <div class="">
    <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="imgs/001.png" width="350" height="350">
      <div class="text">REMOTE  D.4</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="imgs/002.png" width="320" height="350">
      <div class="text">REMOTE  G</div>
    </div>

   

    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="imgs/003.png" width="350" height="350" >
      <div class="text">REMOTE  FULL</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
        <div class="test"><h3>REMOTE</h3>
          <pre>
            <h4>
            เป็นตัวควบคุมสำหรับทุกสภาพอากาศ
            ซึ่งมีอินเทอร์เฟซผู้ใช้ที่ควบคุมได้ง่าย 
            ช่วยให้ผู้ปฏิบัติงานเพียงคนเดียว
            สามารถควบคุมระบบไร้คนขับหลาย
            ระบบภายใต้สภาพแสงใดก็ได้
            </h4>
            <a href="remote.php" class="explore-button">Explore</a>
          </pre>
        </div>
    </div>
  </div>
</body>
</html>
<script>
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>
  <?php include 'footer.php';?>

<style>
  .hd {
    text-align: center;
    background-image: url('imgs/bg.about.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: cover; /* Adjusted for full background coverage */
    background-position: center; /* Center the background image */
    color: white; /* Optional: If the text needs to be visible over the background */
    padding: 150px 0; /* Optional: Adjust the padding for spacing */
    color: #000000;
  }
  /*.products{
    text-align: center;
  }*/
  /*ปุ่ม*/
  .explore-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: black;
            
            border: 2px solid black;
            border-radius: 20px;
            text-align: center;
            text-decoration: none;

            margin-left: 18%; /* เว้นระยะจากด้านหน้า (ซ้าย) */
            box-sizing: border-box;
        }
        
        .explore-button:hover {
            background-color: #fbb040;
        }
  .img{
    text-align: center;
  }
  .products h3 {
    text-align: left;
    font-size: 50px;
    text-indent: 50px;
    margin-left: 18%; /* เว้นระยะจากด้านหน้า (ซ้าย) */
    padding: 0 6px;
    box-sizing: border-box;
  }
  .products h4 {
    text-align: left;
    font-size: 15px;
  }

  pre h4{
    margin-left: 18%; /* เว้นระยะจากด้านหน้า (ซ้าย) */
    padding: 0 6px;
    box-sizing: border-box;
  }
  .br{
    text-indent: 50px;
  }
  .li a {
      font-size: 14px;
      color: black;
      font-weight: 600;
      margin-left: 25px;
      text-transform: uppercase;
      text-align: left;
      text-indent: 50px;
    }
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        /*font-family: 'Poppins';*/
       
      }
        
      
      /*ของโปรดักช่วงสินค้า*/
      
      
      * {box-sizing: border-box}
      /*body {font-family: Verdana, sans-serif; margin:0}*/
      .mySlides {display: none}
      img {vertical-align: middle;}
    
      
      /* Center the images */
      .mySlides img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
      
      /* Slideshow container */
      .slideshow-container {
        max-width: 500px;
        position: relative;
        margin: auto;
      }
      
      /* Next & previous buttons */
      .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: black;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
      
      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover, .next:hover {
        background-color: rgba(255, 255, 255, 0.8);
      }
      
      /* Caption text */
      .text {
        color: #fbb040;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: -25px;
        width: 100%;
        text-align: center;
      }
      
      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      
      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }
      /*
      .active, .dot:hover {
        background-color: #717171;
      }
      
      /* Fading animation */
      .fade {
        animation-name: fade;
        animation-duration: 1.5s;
      }
      
      @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
      }
      
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
      }
</style>