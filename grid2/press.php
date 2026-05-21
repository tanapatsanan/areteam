<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRESS</title>
</head>
<body>
    
<?php include 'header.php';?>
<div class="hd">
  <h1>From the Press</h1>
</div>

<div class="grid-container">
  <div>
    <img src="imgs/ftp1.jpg" width="250" height="300">
  </div>
  <div>
    <img src="imgs/ftp1.jpg" width="250" height="300">
  </div>
  <div>
    <img src="imgs/ftp1.jpg" width="250" height="300">
  </div>
  <div>
    <img src="imgs/ftp1.jpg" width="250" height="300">
  </div>
  <div>
    <img src="imgs/ftp1.jpg" width="250" height="300">
  </div>
  <div>
    <img src="imgs/ftp1.jpg" width="250" height="300">
  </div>
  <div>
    <img src="imgs/ftp1.jpg" width="250" height="300">
  </div>
  <div>
    <img src="imgs/ftp1.jpg" width="250" height="300">
  </div>
  
</div>
<?php include 'footer.php';?>
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
/*body{
	 background-color:#fbb040
    
}*/
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  gap: 10px;
  padding: 5px;
}

.grid-container > div {
  background-color: rgba(251, 161, 64,0.8);
  border: 1px solid black;
  text-align: center;
  font-size: 35px;
}
</style>
