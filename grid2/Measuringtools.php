<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measuring tools</title>
</head>
<body>
<?php include 'header.php';?> 
    <h1>Samples and production rooms</h1> 
    <!--<img src="img/1.jpg" width="600" height="400" >-->
    <img src="img/23.jpg" width="600" height="400" >
    <img src="img/24.jpg" width="600" height="400" >
    <img src="img/25.jpg" width="600" height="400" >
    <img src="img/26.jpg" width="600" height="400" >
    <img src="img/27.jpg" width="600" height="400" >
    <img src="img/28.jpg" width="600" height="400" >

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
    text-decoration-line: underline;
    text-decoration-color: #cf4141;
    font-size: 40px;
    font-family: Georgia, serif;
}

p {
    text-transform: lowercase;
    font-family: Georgia, serif;
    font-size: 30px;
}

img {
    /*border: 2px solid #ddd;
    background-color: #51504e;*/
    border-radius: 8px;
    margin: 20px 0;
    max-width: 100%;
    height: auto;
}

@media screen and (max-width: 390px) {
    h1 {
        font-size: 28px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    img {
        width: 100%; /* ทำให้รูปภาพขยายเต็มจอ */
        height: auto;
        margin: 10px 0;
    }
}

@media screen and (max-width: 430px) {
    body {
        padding: 10px;
    }

    h1 {
        font-size: 32px;
    }

    img {
        max-width: 100%;
        height: auto;
        margin: 15px 0;
    }
}


</style>
