<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'header.php';?>
   <!--container5-->
<div class="container5">
    <h1 class="mission-title">Work piece</h1>
    <div class="gallery-container">
        <div class="main-image">
            <img id="currentImage" src="service/12.jpg" alt="Main Image">
        </div>
        <div class="thumbnail-container">
            <img class="thumbnail" src="service/12.jpg" alt="Thumbnail 1" onclick="changeImage('service/12.jpg')">
            <img class="thumbnail" src="service/13.jpg" alt="Thumbnail 2" onclick="changeImage('service/13.jpg')">
            <img class="thumbnail" src="service/14.jpg" alt="Thumbnail 3" onclick="changeImage('service/14.jpg')">
            <img class="thumbnail" src="service/13.jpg" alt="Thumbnail 4" onclick="changeImage('service/13.jpg')">
            <!--<img class="thumbnail" src="imgs/dempir3.jpg" alt="Thumbnail 5" onclick="changeImage('imgs/dempir3.jpg')">-->
        </div>
    </div>
</div>
<!--container6-->
<h1 class="mission-title">Materials</h1>
<div class="container6">
    <div class="materials">
        <div class="material">
            <img src="service/onyx.png" alt="Onyx Plastic">
            <div class="material-content">
                <h2>Onyx® (Plastic)</h2>
                <!--<p>Onyx® is a micro carbon fiber filled nylon that yields accurate parts with a near flawless surface finish. It offers high strength, toughness, and chemical resistance.</p>-->
            </div>
        </div>
        <div class="material">
            <img src="service/pla.png" alt="Precise PLA">
            <div class="material-content">
                <h2>Precise PLA</h2>
                <!--<p>Precise PLA is an easy-to-print plastic for precision concept modeling and validation. It is available in a variety of colors and is affordable for prototyping.</p>-->
            </div>
        </div>
    </div>
</div>
<div class="container6">
    <div class="materials">
    <div class="material">
            <img src="service/carbon.png" alt="Onyx Plastic">
            <div class="material-content">
               <h2>Carbon </h2>
               <!-- <p>Onyx® is a micro carbon fiber filled nylon that yields accurate parts with a near flawless surface finish. It offers high strength, toughness, and chemical resistance.</p>-->
            </div>
        </div>
        
        <div class="material">
            <img src="service/abs.jpg" alt="Precise PLA">
            <div class="material-content">
                <h2>ABS</h2>
                <!--<p>Precise PLA is an easy-to-print plastic for precision concept modeling and validation. It is available in a variety of colors and is affordable for prototyping.</p>-->
            </div>
        </div>
    </div>
</div>
<script>
    /*container5*/
        function changeImage(src) {
        document.getElementById('currentImage').src = src;
    }
</script>
<?php include 'footer.php';?>
</body>
</html>
<style>
h1.mission-title {
      color: white;
      background-color: #9e0c0c;
      text-align: center;
      font-size: 36px;
      margin: 40px auto 20px;
      padding: 15px 0;
      border-radius: 8px;
      width: 90%;
      max-width: 1000px;
    }
    
/* container5 */
.container5 {
    text-align: center;
}

.gallery-container {
    max-width: 100%;
    margin: auto;
    margin-bottom: 20px;
}

.main-image {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.main-image img {
    width: 700px; /* กำหนดความกว้างรูปภาพหลัก */
    height: 400px; /* กำหนดความสูงรูปภาพหลัก */
    object-fit: cover; /* ภาพเข้ากับขนาดที่ต้องการ*/
    border-radius: 5px;
}

.thumbnail-container {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.thumbnail-container img {
    width: 100px; /* กำหนดความกว้างรูปภาพย่อย */
    height: 60px; /* กำหนดความสูงรูปภาพย่อย */
    object-fit: cover; /* ภาพเข้ากับขนาดที่ต้องการ */
    cursor: pointer;
    border-radius: 5px;
    transition: transform 0.3s ease;
}

.thumbnail-container img:hover {
    transform: scale(1.1);
}

/* container6 */
.container6 {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom:50px;
        }
        .materials {
            display: flex;
            gap: 20px;
        }
        .material {
            flex: 1;
            background: #000;
            color: white;
            border-radius: 10px;
            overflow: hidden;
        }
        .material img {
            width: 100%;
            display: block;
        }
        .material-content {
            padding: 15px;
            background: white;
            color: black;
        }
        .material h2 {
            margin: 0;
            font-size: 18px;
        }
        .material p {
            font-size: 14px;
            color: #555;
        }
</style>

