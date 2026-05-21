<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <?php include 'header.php';?>

    <div class="content">
        <!-- รูปภาพตรงกลาง -->
        <img src="imgs/comingsoon2.png" alt="Coming Soon" class="center-image">
    </div>

    <div class="footer-container">
        <?php include 'footer.php';?>
    </div>
</body>
</html>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        color: #333;
        height: 100vh; /* ให้ body เต็มหน้าจอ */
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* ดัน footer ลงไปล่าง */
        align-items: center;
        background-color: rgb(160, 27, 27);
        background: linear-gradient(to right, black ,rgb(160, 27, 27));
    }

    .content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex: 1;
    }

    .center-image {
        max-width: 100%; /* ป้องกันไม่ให้รูปใหญ่เกินไป */
        max-height: 100%; /* ปรับขนาดรูปตามหน้าจอ */
        object-fit: cover; 
    }

    .footer-container {
        flex-shrink: 0;
    }
</style>
