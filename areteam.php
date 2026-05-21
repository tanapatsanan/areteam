<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARETEAM</title>
 <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
</head>

<body>
  <?php include 'header.php';?>

  <div class="video">
    <video autoplay muted loop id="myVideo">
      <source src="video/noonar.MP4" type="video/mp4">
    </video>

    <div class="content">
      <h1>ARE ROBOTICS</h1>
      <img src="imgs/play4.png" id="startButton" alt="Start Button">

    </div>
  </div>

  <div class="newVideo" id="newVideoContainer">
      <button id="exitButton">X</button>
      <video controls id="newVideo" width="1000px" height="600px">
        <source src="/video/Nunar_01.mp4" type="video/mp4">
      </video>
  </div>

  <script>
    document.getElementById("startButton").addEventListener("click", function() {
      document.querySelector(".video").style.display = "none";
      document.getElementById("newVideoContainer").style.display = "flex"; 
      document.getElementById("newVideo").play();
  });


    document.getElementById("exitButton").addEventListener("click", function() {
      document.getElementById("newVideo").pause();
      document.getElementById("newVideoContainer").style.display = "none";
      document.querySelector(".video").style.display = "flex";
    });
  </script>
</body>
</html>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        overflow: hidden;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        text-align: center;
    }

    .video {
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .content {
        text-align: center;
    }

    .content h1 {
        font-size: 95px;
        color: #fff;
        margin-bottom: 50px;
        font-family: 'PROMETHEUS';
    }

    .content button {
        font-size: 23px;
        color: #fff;
        background-color: transparent;
        text-decoration: none;
        border: 2px solid #fff;
        padding: 15px 25px;
        border-radius: 50px;
        transition: 0.3s;
        cursor: pointer;
    }

    .content button:hover {
        background-color: #fff;
        color: #000;
    }

    #myVideo {
        position: absolute;
        right: 0;
        bottom: 0;
        z-index: -1;
        min-width: 100%;
        min-height: 100%;
    }

    .newVideo {
        display: none;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.9);
        display: flex;
        flex-direction: column; 
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .newVideo video {
        max-width: 90%; /* ปรับขนาดวิดีโอให้พอดีกับหน้าจอ */
        max-height: 80%;
        border-radius: 10px;
    }

    #exitButton {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 24px;
        color: #fff;
        background-color: transparent;
        border: none;
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #exitButton:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
    }
    #startButton {
    width: 200px; /* ปรับขนาดปุ่ม */
    cursor: pointer;
    transition: transform 0.2s ease-in-out;
  }

  #startButton:hover {
      transform: scale(1.1); /* เอฟเฟกต์ขยายเมื่อโฮเวอร์ */
  }
  @font-face {
            font-family: 'PROMETHEUS.ttf';
            src: url('PROMETHEUS.ttf') format('PROMETHEUS');
        }

    @media (max-width: 430px) { 
        .content h1 {
            font-size: 50px; /* ขนาดตัวอักษรเล็กลง */
        }

        .content button {
            font-size: 18px; /* ขนาดปุ่มเล็กลง */
            padding: 10px 20px; /* ปรับขนาดปุ่ม */
        }

        .newVideo video {
            max-width: 100%; /* ปรับขนาดวิดีโอให้เต็มความกว้าง */
            max-height: 100%; /* ปรับขนาดให้เต็มความสูง */
        }
    }
</style>
