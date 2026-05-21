<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-EMPIR</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'header.php';?>
    <div class="container">
        <h1 class="title">D-EMPIR</h1>
        <div class="image-container">
            <img src="imgs/products2.png" alt="NOONAR robot illustration">
        </div>
        <h2 class="subtitle">D-EMPIR   is an Ultra - Light Throwable Robot Platform</h2>
        <p class="description">Provides standoff detection and tactical surveillance capabilities</p>
        
        <div class="container1">
            <div class="features">
                <div class="feature-item active" onclick="activateFeature(0)">
                    <div class="feature-number">01</div>
                    <div class="feature-content">
                        <div class="feature-title">Quiet operation</div>
                        <div class="feature-description">Stealth reconnaissance</div>
                    </div>
                </div>
                <div class="feature-item" onclick="activateFeature(1)">
                    <div class="feature-number">02</div>
                    <div class="feature-content">
                        <div class="feature-title">360° video & zoom</div>
                        <div class="feature-description">Day & night</div>
                    </div>
                </div>
                <div class="feature-item" onclick="activateFeature(2)">
                    <div class="feature-number">03</div>
                    <div class="feature-content">
                        <div class="feature-title">Ultra-light throwable robot</div>
                        <div class="feature-description">3G lbs platform</div>
                    </div>
                </div>
                <div class="feature-item" onclick="activateFeature(3)">
                    <div class="feature-number">04</div>
                    <div class="feature-content">
                        <div class="feature-title">Add-ons integration</div>
                        <div class="feature-description">Ethernet, power, video</div>
                    </div>
                </div>
            </div>
            <script src="script.js"></script>
        </div>
        <div class="container2">
            <h1 class="mission-title">What is your mission?</h1>
            <div class="group">
                <div class="group">
                    <a href="#" class="image-box">
                        <img src="imgs/dempir1.jpg" alt="Homeland Security">
                        <div class="overlay-gradient"></div>
                        <div class="overlay-text">Homeland Security</div>
                    </a>
                    <a href="#" class="image-box">
                        <img src="imgs/dempir2.jpg" alt="Intelligence Gathering">
                        <div class="overlay-gradient"></div>
                        <div class="overlay-text">Intelligence Gathering</div>
                    </a>
                    <a href="#" class="image-box">
                        <img src="imgs/dempir3.jpg" alt="Special Forces">
                        <div class="overlay-gradient"></div>
                        <div class="overlay-text">Special Forces</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container3">
            <h1 class="mission-title">Controller</h1>
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
            
                <!--<a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>-->
            
                </div>
                <br>
            
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div> 
        </div>
        <div class="container4">
            <h1 class="mission-title">Gallery</h1>
            <div class="gallery-container">
                <div class="main-image">
                    <img id="currentImage" src="imgs/dempir1.jpg" alt="Main Image">
                </div>
                <div class="thumbnail-container">
                    <img class="thumbnail" src="imgs/dempir1.jpg" alt="Thumbnail 1" onclick="changeImage('imgs/dempir1.jpg')">
                    <img class="thumbnail" src="imgs/dempir2.jpg" alt="Thumbnail 2" onclick="changeImage('imgs/dempir2.jpg')">
                    <img class="thumbnail" src="imgs/dempir3.jpg" alt="Thumbnail 3" onclick="changeImage('imgs/dempir3.jpg')">
                    <img class="thumbnail" src="imgs/dempir4.jpg" alt="Thumbnail 4" onclick="changeImage('imgs/dempir4.jpg')">
                    <img class="thumbnail" src="imgs/dempir3.jpg" alt="Thumbnail 5" onclick="changeImage('imgs/dempir3.jpg')">
                </div>
            
        </div>
    </div>
   
</body>
<script>
     function activateFeature(index) {
    const features = document.querySelectorAll('.feature-item');
    features.forEach((feature, i) => {
        if (i === index) {
            feature.classList.add('active');
        } else {
            feature.classList.remove('active');
        }
    });
}

    /*container3*/

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
        dots[i].className = dots[i].className.replace(" active1", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active1";
    }
    /*container4*/
        function changeImage(src) {
        document.getElementById('currentImage').src = src;
    }
</script>
</html>
<style>
    * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

body {
    font-family: Verdana, sans-serif;
    background-color: #f4f4f4;
    color: #555;
    margin: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.container {
    text-align: center;
    /*background-color: #ffffff;*/
    padding: 20px;
    border-radius: 10px;
   /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
    max-width: 1200px;
    width: 100%;
    margin-bottom: 20px;
}

.image-container {
    background-color: #9e0c0c9d;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    width: 100%;
}

.image-container img {
    max-width: 50%;
    max-height: 100%;
    object-fit: contain;
}

.subtitle {
    font-size: 24px;
    font-weight: bold;
    color: #000000;
    background-color: #8B0000;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}

.description {
    font-size: 18px;
    color: #a0a0a0;
    font-weight: bold;
}

/* container1 */
.features {
    display: flex;
    justify-content: center;
    gap: 20px;
    background-color: #ffffff;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.feature-item {
    text-align: center;
    flex: 1;
    padding: 10px;
    cursor: pointer;
}

.feature-item:not(:last-child) {
    border-right: 1px solid #dddddd;
}

.feature-number {
    font-size: 24px;
    font-weight: bold;
    color: #cccccc;
}

.feature-title {
    font-size: 18px;
    margin-top: 10px;
    color: #666666;
}

.feature-description {
    font-size: 14px;
    color: #999999;
    margin-top: 5px;
}

.active .feature-number {
    color: #5d0e0b;
}

.active .feature-title {
    color: #5d0e0b;
}

/* container2 */
.container2 {
    text-align: center;
    margin-bottom: 20px;
}

.mission-title {
            font-size: 32px;
            color: #333333;
            margin-bottom: 20px;
        }
.group {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 20px;
}
        

        .image-box {
            position: relative;
            flex: 1;
            margin: 10px;
            overflow: hidden;
        }

        .image-box img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease; /* สำหรับเอฟเฟกต์การซูม */
        }

        .image-box:hover img {
            transform: scale(1.05); /* ซูมภาพเมื่อชี้ */
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .overlay-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            background: linear-gradient(to bottom, rgba(139, 0, 0, 0.5), rgba(139, 0, 0, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-box:hover .overlay-gradient {
            opacity: 1;
        }
/* container3 */
.slideshow-container {
    position: relative;
    max-width: 100%;
    margin: auto;
    margin-bottom: 20px;
}

.mySlides {
    display: none;
}

.fade {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
}

.dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active1 {
    background-color: #717171;
}
/* container4 */
.container4 {
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

@media only screen and (max-width: 430px) {
    body {
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center; /* จัดเนื้อหาให้อยู่ตรงกลาง */
        justify-content: center;
        width: 100%;
    }
    /*container*/
    .container {
        max-width: 100%;
        width: 100%;
        padding: 10px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center; /* จัดเนื้อหาให้อยู่ตรงกลาง */
        justify-content: center; /* จัดเนื้อหาให้อยู่ตรงกลาง */
    }
    .subtitle {
        font-size: 16px;
        font-weight: bold;
        color: #000000;
        background-color: #8B0000;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .description {
        font-size: 13px;
        color: #a0a0a0;
        font-weight: bold;
    }
    /*container1*/
    .features {
        flex-direction: column;
        width: 100%;
        align-items: center; /* จัดเนื้อหาให้อยู่ตรงกลาง */
    }

    .feature-item {
        border-right: none;
        border-bottom: 1px solid #dddddd;
        width: 100%;
        padding: 10px 0;
    }

    .feature-item.active {
        background-color: #f4f4f4;
    }
    /*container2*/
    .container2 {
        max-width: 100%;
        width: 100%;
        padding: 10px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center; /* จัดเนื้อหาให้อยู่ตรงกลาง */
        justify-content: center; /* จัดเนื้อหาให้อยู่ตรงกลาง */
    }
    .overlay-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 13px;
        font-weight: bold;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
    .overlay-gradient {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        background: linear-gradient(to bottom, rgba(139, 0, 0, 0.5), rgba(139, 0, 0, 0.1));
        opacity: 0;
        transition: opacity 0.1s ease;
    }
    .mission-title {
        font-size: 20px;
        color: #333333;
        margin-bottom: 20px;
    }
    .image-box {
        position: relative;
        flex: 1;
        margin: 10px; /* เพิ่มระยะห่างรอบๆ แต่ละกล่อง */
        overflow: hidden;
        border-radius: 10px;
    }

    .image-box img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease; /* สำหรับเอฟเฟกต์การซูม */
    }

    .image-box:hover img {
        transform: scale(1.05); /* ซูมภาพเมื่อชี้ */
    }


    /*container3*/
    .slideshow-container {
        max-width: 100%;
        width: 100%;
        margin: auto;
        margin-bottom: 20px;
    }

    /*.slideshow-container img {
        width: 100%;
        height: auto;
    }*/

    .dot {
        margin: 5px 5px; /* จัดให้ปุ่มวงกลม (dots) อยู่ตรงกลาง */
    }

    /*container4*/
    .container4 {
    max-width: 100%;
    width: 100%;
    padding: 10px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center; /* จัดเนื้อหาให้อยู่ตรงกลาง */
    justify-content: center; /* จัดเนื้อหาให้อยู่ตรงกลาง */
    }

    .main-image img {
        width: 90%; /* ขยายให้พอดีกับหน้าจอ */
        height: auto;
    }

    /*.thumbnail-container {
        flex-wrap: wrap;
    }

    .thumbnail-container img {
        width: 70px;
        height: 50px;
    }*/

    .thumbnail-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-wrap: nowrap; /* ป้องกันการซ้อน */
        overflow-x: auto; /* เปิดการเลื่อนหากพื้นที่ไม่พอ */
        padding: 10px;
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

}
</style>
