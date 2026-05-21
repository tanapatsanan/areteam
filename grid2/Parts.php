<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICE</title>
    <!-- <link rel="stylesheet" href="Research.css"> ตรวจสอบเส้นทางให้ถูกต้อง -->
</head>
<body>
    <?php include 'header.php';?>  
 <!--container5-->
 <div class="container5">
    <h1 class="mission-title">Work piece</h1>
    <div class="gallery-container">
        <div class="main-image">
            <img id="currentImage" src="img/13.jpg" alt="Main Image">
        </div>
        <div class="thumbnail-container">
            <img class="thumbnail" src="img/13.jpg" alt="Thumbnail 1" onclick="changeImage('img/13.jpg')">
            <img class="thumbnail" src="img/8.1.jpg" alt="Thumbnail 2" onclick="changeImage('img/8.1.jpg')">
            <img class="thumbnail" src="img/9.1.jpg" alt="Thumbnail 3" onclick="changeImage('img/9.1.jpg')">
            <img class="thumbnail" src="img/10.1.jpg" alt="Thumbnail 4" onclick="changeImage('img/10.1.jpg')">
            <img class="thumbnail" src="img/11.1.jpg" alt="Thumbnail 4" onclick="changeImage('img/11.1.jpg')">
            <img class="thumbnail" src="img/14.1.jpg" alt="Thumbnail 4" onclick="changeImage('img/14.1.jpg')">
            <!--<img class="thumbnail" src="imgs/dempir3.jpg" alt="Thumbnail 5" onclick="changeImage('imgs/dempir3.jpg')">-->
        </div>
    </div>
</div> >
<script>
    /*container5*/
        function changeImage(src) {
        document.getElementById('currentImage').src = src;
    }
</script>
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
    width: 900px; /* กำหนดความกว้างรูปภาพหลัก */
    height: 700px; /* กำหนดความสูงรูปภาพหลัก */
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
</style>
