<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steel welding</title>

</head>
<body>
    <?php include 'header.php'; ?> 

    <h1>Samples and production rooms</h1> 

    <div class="image-container">
        <img src="img/42.jpeg" alt="Sample 42">
        <img src="img/37.jpeg" alt="Sample 37">
        <img src="img/38.jpeg" alt="Sample 38">
        <img src="img/39.jpeg" alt="Sample 39">
        <img src="img/40.jpeg" alt="Sample 40">
        <img src="img/41.jpeg" alt="Sample 41">
    </div>

</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #f7f7f7;
        }

        h1 {
            color: #f7f7f7;
            margin-top: 20px;
            margin-bottom: 20px;
            background-color: #51504e;
            text-decoration: underline #cf4141;
            font-size: 40px;
            font-family: Georgia, serif;
            padding: 10px;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            padding: 20px;
        }

        .image-container img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 8px;
        }

        /* ทำให้ responsive สำหรับ iPhone 13 */
        @media (max-width: 430px) {
            h1 {
                font-size: 30px;
                padding: 15px;
            }

            .image-container {
                flex-direction: column;
                align-items: center;
            }

            .image-container img {
                max-width: 90%;
            }
        }
    </style>
