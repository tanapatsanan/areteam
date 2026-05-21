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
  font-family: "Kanit", sans-serif;
}

body {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  background:
    radial-gradient(circle at top right, rgba(255,59,48,.16), transparent 35%),
    linear-gradient(120deg, #0b0d12 0%, #111827 55%, #2a0608 100%);
  color: white;
}

.content {
  flex: 1;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 90px 24px;
  position: relative;
  overflow: hidden;
}

.content::before {
  content: "";
  position: absolute;
  width: 520px;
  height: 520px;
  background: rgba(255,59,48,.08);
  border-radius: 50%;
  filter: blur(80px);
  right: -180px;
  top: -160px;
}

.center-image {
  width: min(760px, 90%);
  height: auto;
  object-fit: contain;
  position: relative;
  z-index: 2;
  filter: drop-shadow(0 30px 60px rgba(0,0,0,.45));
}

.footer-container {
  width: 100%;
  flex-shrink: 0;
}
</style>