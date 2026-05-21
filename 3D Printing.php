<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Printing</title>
    <!-- <link rel="stylesheet" href="Research.css"> ตรวจสอบเส้นทางให้ถูกต้อง -->
</head>
<body>
    <?php include 'header.php';?>  
<div class="container">
    <h1>3D Printing</h1>
    <!--container7-->
    <div class="container7">
        <h2 class="mission-title">Explore Our 3D Printers</h2>
        <div class="group">
            <div class="group">
                <a href="3d.php" class="image-box">
                    <img src="service/MARKTWO.png" alt="Homeland Security">
                    <div class="overlay-gradient"></div>
                    <div class="overlay-text">Mark Two™ Desktop Composite 3D Printer</div>
                </a>
                <a href="x7.php" class="image-box">
                    <img src="service/X7.png" alt="Intelligence Gathering">
                    <div class="overlay-gradient"></div>
                    <div class="overlay-text">X7™ Industrial Composite 3D Printer</div>
                </a>
                <!--<a href="#" class="image-box">
                    <img src="imgs/dempir3.jpg" alt="Special Forces">
                    <div class="overlay-gradient"></div>
                    <div class="overlay-text">Special Forces</div>
                </a>-->
            </div>
        </div>
    </div>
    
</div>

    
</body>
</html>
<style>
    /* Research.css */

body {
    font-family: Arial, sans-serif; /* เปลี่ยนเป็นสีพื้นหลังที่ต้องการ */
    margin: 0;
    padding: 0;
    text-align: center; /* ทำให้เนื้อหาอยู่กลาง */
}

h1 {
    color: #f7f7f7;
    margin-top: 20px;
    margin-bottom: 20px;
    background-color: #51504e;
    /*text-decoration-line: underline;
    text-decoration-color: #cf4141;*/
    font-size: 40px;
    font-family: Georgia, serif;
}
h2{
    font-size: 35px;
}
/* container7 */
.container7 {
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
</style>