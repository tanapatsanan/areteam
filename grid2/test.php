<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>3D Printing | ARE ROBOTICS</title>

  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<?php include 'header.php'; ?>

<!-- HERO -->
<section class="hero">

  <div class="hero-content">

    <span class="tag">ADVANCED MANUFACTURING</span>

    <h1>
     SERVICES
    </h1>

    <p>
     ARE ROBOTICS คือผู้ให้บริการด้านเทคโนโลยี วิศวกรรม และงานผลิตอุตสาหกรรมแบบครบวงจร ครอบคลุมงานออกแบบ <br>
     พัฒนาระบบ ผลิตชิ้นส่วนต้นแบบ งาน 3D Printing งาน CNC Machining และโซลูชันด้านระบบอัตโนมัติ <br>
     โดยมุ่งเน้นคุณภาพ ความแม่นยำ และมาตรฐานการผลิตระดับมืออาชีพ<br>
<br>
    ด้วยทีมงานผู้เชี่ยวชาญและประสบการณ์ในงานวิศวกรรมและการผลิต เราพร้อมสนับสนุนลูกค้าในทุกขั้นตอน <br>
    ตั้งแต่แนวคิดจนถึงการผลิตจริง เพื่อให้ได้ผลงานที่ตอบโจทย์ทั้งด้านประสิทธิภาพ ความคุ้มค่า <br>
    และความรวดเร็วในการดำเนินงาน

    </p>

  </div>

</section>

<!-- PRINTERS -->
<section class="printers">

  <div class="section-title">
    <span>OUR MACHINES</span>
    <h2>Explore Our 3D Printers</h2>
  </div>

  <div class="printer-grid">

    <!-- CARD -->
    <a href="3d.php" class="printer-card">

      <div class="printer-image">
        <img src="service/MARKTWO.png" alt="">
      </div>

      <div class="printer-info">
        <div class="number">01</div>

        <h3>Mark Two™</h3>

        <p>
          Desktop Composite 3D Printer
          สำหรับงานต้นแบบและงานวิศวกรรมความแข็งแรงสูง
        </p>
      </div>

    </a>
<a href="3d.php" class="printer-card">

      <div class="printer-image">
        <img src="service/X7.png" alt="">
      </div>

      <div class="printer-info">
        <div class="number">02</div>

        <h3>X7™ Industrial</h3>

        <p>
          เครื่องพิมพ์ Composite ระดับอุตสาหกรรม
          รองรับ Carbon Fiber และงาน Production
        </p>
        </p>
      </div>

    </a>

       <!-- CARD -->
    <a href="ComingSoon.php" class="printer-card">

      <div class="printer-image">
        <img src="service/printer3.png" alt="">
      </div>

      <div class="printer-info">
        <div class="number">03</div>

        <h3></h3>

        <p>
         
        </p>
      </div>

    </a>

    <!-- CARD -->
    <a href="ComingSoon.php" class="printer-card">

      <div class="printer-image">
        <img src="service/printer4.png" alt="">
      </div>

      <div class="printer-info">
        <div class="number">04</div>

        <h3></h3>

        <p>
         
        </p>
      </div>

    </a>

  </div>

</section>

<?php include 'footer.php'; ?>

</body>
</html>

<style>

:root{
  --red:#ff3b30;
  --dark:#0b0d12;
  --dark2:#131720;
  --gray:#9ca3af;
  --white:#fff;
}

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Kanit',sans-serif;
}

body{
  background:var(--dark);
  color:white;
  overflow-x:hidden;
}

/* HERO */

.hero{
  min-height:65vh;

  display:flex;
  align-items:center;
  justify-content:center;

  text-align:center;

  padding:120px 8%;

  position:relative;
  overflow:hidden;
}

.hero::before{
  content:"";

  position:absolute;

  width:700px;
  height:700px;

  background:rgba(255,59,48,.08);

  border-radius:50%;

  top:-300px;
  right:-200px;

  filter:blur(80px);
}

.hero-content{
  position:relative;
  z-index:2;
  max-width:900px;
}

.tag{
  color:var(--red);
  letter-spacing:4px;
  font-size:14px;
  font-weight:600;
}

.hero h1{
  font-size:90px;
  line-height:.95;
  margin:25px 0;
}

.hero p{
  color:var(--gray);
  font-size:18px;
  line-height:1.9;
}

/* SECTION */

.printers{
  padding:40px 8% 120px;
}

.section-title{
  text-align:center;
  margin-bottom:70px;
}

.section-title span{
  color:var(--red);
  letter-spacing:3px;
  font-size:14px;
}

.section-title h2{
  font-size:52px;
  margin-top:15px;
}

/* GRID */

.printer-grid{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:35px;
}

/* CARD */

.printer-card{
  text-decoration:none;
  color:white;

  background:rgba(255,255,255,.03);

  border:1px solid rgba(255,255,255,.06);

  border-radius:32px;

  overflow:hidden;

  transition:.45s ease;

  position:relative;
}

.printer-card::before{
  content:"";

  position:absolute;

  width:350px;
  height:350px;

  background:rgba(255,59,48,.08);

  border-radius:50%;

  top:-180px;
  right:-150px;

  filter:blur(40px);

  transition:.4s;
}

.printer-card:hover::before{
  transform:scale(1.2);
}

.printer-card:hover{
  transform:
    translateY(-15px)
    rotateX(2deg);

  border-color:rgba(255,59,48,.35);

  box-shadow:
    0 35px 60px rgba(0,0,0,.4);
}

.printer-card.active{
  border-color:rgba(255,59,48,.4);
}

/* IMAGE */

.printer-image{
  height:380px;

  display:flex;
  align-items:center;
  justify-content:center;

  padding:40px;

  background:
    linear-gradient(
      135deg,
      #111827,
      #18181b
    );
}

.printer-card.active .printer-image{
  background:
    linear-gradient(
      135deg,
      #3f0a0a,
      #111827
    );
}

.printer-image img{
  max-width:100%;
  max-height:100%;

  object-fit:contain;

  transition:.4s;
}

.printer-card:hover img{
  transform:scale(1.05);
}

/* INFO */

.printer-info{
  padding:35px;
  position:relative;
  z-index:2;
}

.number{
  font-size:60px;
  opacity:.08;
  font-weight:700;
  margin-bottom:10px;
}

.printer-info h3{
  font-size:34px;
  margin-bottom:15px;
}

.printer-info p{
  color:#c4c8d0;
  line-height:1.9;
  font-size:16px;
}

/* RESPONSIVE */

@media(max-width:1100px){

  .printer-grid{
    grid-template-columns:1fr;
  }

}

@media(max-width:700px){

  .hero h1{
    font-size:54px;
  }

  .section-title h2{
    font-size:36px;
  }

  .printer-image{
    height:280px;
  }

}

</style>