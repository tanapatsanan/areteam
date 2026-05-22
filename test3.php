<!doctype html>
<html lang="th">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FACILITIES</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php include 'header.php';?>

  
    <section class="hero">
        <h1>
        FACILITIES
        </h1>
    </section>

    <main class="robot">
      <div class="products-grid">
        <article class="product-card">
          <div class="image-container">
            <img
              src="imgs/car1.jpg"
              alt="ห้องเครื่องมือวัด"
              class="product-image"
            />
          </div>
          <div class="card-body">
            <h3>ห้องเครื่องมือวัด</h3>
            <p>
              ศูนย์รวมเครื่องมือวัดความละเอียดสูง
              เพื่อการตรวจสอบคุณภาพชิ้นงานให้ได้มาตรฐานระดับสากล
            </p>
            <a href="#" class="explore-button">Explore</a>
          </div>
        </article>

        <article class="product-card">
          <div class="image-container">
            <img
              src="imgs/car3.jpg"
              alt="ห้องเชื่อมงานเหล็ก"
              class="product-image"
            />
          </div>
          <div class="card-body">
            <h3>ห้องเชื่อมงานเหล็ก</h3>
            <p>
              พื้นที่ปฏิบัติงานเชื่อมโลหะด้วยระบบความปลอดภัยครบวงจร
              รองรับโครงสร้างหุ่นยนต์ทุกรูปแบบ
            </p>
            <a href="#" class="explore-button">Explore</a>
          </div>
        </article>

        <article class="product-card">
          <div class="image-container">
            <img src="imgs/car4.jpg" alt="ห้อง CNC" class="product-image" />
          </div>
          <div class="card-body">
            <h3>ห้อง CNC</h3>
            <p>
              การผลิตชิ้นส่วนด้วยเครื่องจักร CNC ที่แม่นยำ รองรับงานกัด กลึง
              และขึ้นรูปโลหะซับซ้อน
            </p>
            <a href="#" class="explore-button">Explore</a>
          </div>
        </article>

        <article class="product-card">
          <div class="image-container">
            <img
              src="imgs/car6.jpg"
              alt="ลานปฏิบัติงาน Workshop"
              class="product-image"
            />
          </div>
          <div class="card-body">
            <h3>ลานปฏิบัติงาน Workshop</h3>
            <p>
              ลานอเนกประสงค์สำหรับการประกอบร่างหุ่นยนต์ (Final Assembly)
              และการทดสอบระบบภาคพื้นดิน
            </p>
            <a href="#" class="explore-button">Explore</a>
          </div>
        </article>
      </div>
    </main>

    <?php include 'footer.php';?>
  </body>
</html>

<style>

:root{
  --red:#7a0f14;
  --dark:#0b0d12;
  --dark2:#131720;
  --glass:rgba(255,255,255,.04);
  --line:rgba(255,255,255,.08);
  --gray:#9ca3af;
  --white:#ffffff;

  --transition:all .35s ease;
}

*{
  padding:0;
  margin:0;
  box-sizing:border-box;
  font-family:"Kanit",sans-serif;
}

body{
  background:var(--dark);
  color:white;
}

/* HERO */

/* HERO */

.hero{
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
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

.robot{

  max-width:1300px;

  margin:80px auto 120px;

  padding:0 24px;
}

/* GRID */

.products-grid{

  display:grid;

  grid-template-columns:
    repeat(auto-fit,minmax(300px,1fr));

  gap:30px;
}

/* CARD */

.product-card{

  background:var(--glass);

  backdrop-filter:blur(20px);

  border:1px solid var(--line);

  border-radius:30px;

  overflow:hidden;

  transition:var(--transition);

  position:relative;
}

/* glow */

.product-card::before{

  content:"";

  position:absolute;

  width:300px;
  height:300px;

  background:
    rgba(122,15,20,.08);

  border-radius:50%;

  top:-150px;
  right:-150px;

  filter:blur(40px);
}

.product-card:hover{

  transform:
    translateY(-12px);

  border-color:
    rgba(122,15,20,.3);

  box-shadow:
    0 30px 60px rgba(0,0,0,.35);
}

/* IMAGE */

.image-container{

  width:100%;

  aspect-ratio:16/10;

  overflow:hidden;
}

.product-image{

  width:100%;
  height:100%;

  object-fit:cover;

  transition:.5s ease;
}

.product-card:hover .product-image{
  transform:scale(1.08);
}

/* BODY */

.card-body{

  padding:28px;

  text-align:center;
}

.card-body h3{

  font-size:28px;

  color:white;

  margin-bottom:18px;
}

.card-body p{

  color:var(--gray);

  line-height:1.9;

  margin-bottom:28px;
}

/* BUTTON */

.explore-button{

  display:inline-block;

  padding:12px 28px;

  border-radius:50px;

  text-decoration:none;

  color:white;

  background:
    linear-gradient(
      135deg,
      #7a0f14,
      #4f080b
    );

  transition:.3s ease;

  box-shadow:
    0 15px 35px rgba(122,15,20,.22);
}

.explore-button:hover{

  transform:
    translateY(-4px);

  box-shadow:
    0 22px 45px rgba(122,15,20,.35);
}

/* MOBILE */

@media(max-width:768px){

  .hd{
    height:240px;
  }

  .hd h1{
    font-size:50px;
  }

  .robot{
    margin-top:50px;
  }

}

</style>