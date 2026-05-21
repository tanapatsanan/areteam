<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICE</title>
</head>

<body>
<?php include 'header.php';?>  

<h1>Design House</h1>

<div class="container">
  <img src="imgs/D.jpg"  class="image">
  <div class="overlay">
    <div class="text">Mechanical Design</div>
  </div>
</div>


<div class="container">
  <img src="imgs/CC.jpg"  class="image2">
  <div class="overlay2">
    <div class="text">Circuit Design</div>
  </div>
</div>

</body>
</html>
<style>
  h1 {
    color: #f7f7f7;
    margin-top: 20px;
    margin-bottom: 20px;
    background-color: #51504e;
    text-decoration-line: underline;
    text-decoration-color: #cf4141;
    font-size: 40px;
    font-family: Georgia, serif;
    text-align: center;
}

.container {
    position: relative;
    width: 90%;
    margin: auto;
    display: flex;
    justify-content: center;
  }
  
  .image {
    display: block;
    width: 50%;
    height: auto;
  }
  .image2 {
    display: block;
    width: 40%;
    height: auto;
  }

  .overlay {
    position: absolute;
    bottom: 0;
    left: 50%;
    right: 0;
    background-color: #9e0c0c;/*9e0c0c9d*/
    overflow: hidden;
    width: 0;
    height: 50%;
    transition: .5s ease;
  }
  
  .overlay2 {
    position: absolute;
    bottom: 0;
    left: 50%;
    right: 0;
    background-color: #9e0c0c;
    overflow: hidden;
    width: 0;
    height: 50%;
    transition: .5s ease;
  }

  .container:hover .overlay {
    width: 100%;
    left: 0;
  }
  
  .container:hover .overlay2 {
    width: 100%;
    left: 0;
  }
  
  .text {
    color: white;
    font-size: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    white-space: nowrap;
  }
</style>