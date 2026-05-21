<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materials</title>

</head>
<body>
<?php include 'header.php';?>
    <div class="container6">
        <h1>Materials</h1>
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
                    <!--<p>Onyx® is a micro carbon fiber filled nylon that yields accurate parts with a near flawless surface finish. It offers high strength, toughness, and chemical resistance.</p>-->
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
    <?php include 'footer.php';?>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        h1{
            padding: 20px;
        }
        .container6 {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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