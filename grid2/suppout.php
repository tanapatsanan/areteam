<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPPOUT</title>
</head>
<body>
    
<?php include 'header.php';?>
    <div class="hd">
        <h1>SUPPOUT</h1>
    </div>
    <div class="container">
        <h1>เราจะช่วยคุณได้อย่างไร</h1>
        <a href="#" class="cta-button">มีอะไรให้ช่วยไหม</a>
        
        <div class="divider">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="support">
            <div>
                <h3>.....</h3>
                <p><strong>Tel.</strong> +66 00-00-000</p>
                <p><strong>Mob.</strong> |</p>
                <p><strong>E-Mail</strong> are@mut.ac.th</p>
                <p><strong>Addr.</strong> ???</p>
            </div>
            <div>
                <h3>.....</h3>
                <p><strong>Tel.</strong> +66 00-00-000</p>
                <p><strong>Mob.</strong> +66 00-00-0000</p>
                <p><strong>E-Mail</strong> are@mut.ac.th</p>
                <p><strong>Addr.</strong> ???</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</body>
</html>

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
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            font-size: 2em;
            color: #333;
        }

        .cta-button {
            display: inline-block;
            background-color: #a6d885;
            color: #000;
            padding: 10px 20px;
            margin: 20px 0;
            border-radius: 5px;
            font-size: 1.2em;
            text-decoration: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .divider {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .divider span {
            height: 10px;
            width: 10px;
            background-color: #d3d3d3;
            border-radius: 50%;
            margin: 0 5px;
        }

        .support {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .support div {
            margin: 0 30px;
            text-align: left;
        }

        .support h3 {
            color: #f6a623;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .support p {
            margin: 5px 0;
            font-size: 0.9em;
        }

        .support p strong {
            display: inline-block;
            width: 50px;
        }

</style>
