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

    <header class="hd">
      <h1>FACILITIES</h1>
    </header>

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
      :root {
        --primary-red: #9e0c0c;
        --dark-gray: #333;
        --light-bg: #f4f7f6;
        --white: #ffffff;
        --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
      }

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Kanit", sans-serif;
      }

      body {
        background-color: var(--light-bg);
        color: var(--dark-gray);
      }

      /* --- Header Section --- */
      .hd {
    /* กำหนดความสูงให้ตายตัวทุกหน้า */
    height: 350px; 
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    
    /* ล้างค่า Padding/Margin ที่เคยตั้งไว้ไม่เท่ากันออกให้หมด */
    padding: 0 !important; 
    margin: 0 !important;

    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url("imgs/3.jpg") no-repeat center center/cover;
    background-attachment: fixed;
    color: white;
    width: 100%;
}

/* --- ส่วนตัวหนังสือ (Title) --- */
.hd h1 {
    /* กำหนดขนาดให้เท่ากันทุกหน้า */
    font-size: 80px; 
    font-weight: 600;
    letter-spacing: 10px;
    text-transform: uppercase;
    text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    margin: 0;
    line-height: 1;
}
/* --- ส่วนเนื้อหา (Container / Main) --- */
/* ปรับให้ทุกหน้ามีระยะห่างจาก Header เท่ากัน */
.container, .main, .tab-container, .robot {
    margin-top: 60px !important; /* เว้นระยะจาก Header 60px เท่ากันหมด */
    margin-bottom: 100px;
}
      /* --- Grid System --- */
      .robot {
        max-width: 1300px;
        margin: 0 auto 100px;
        padding: 0 20px;
      }

      .products-grid {
        display: grid;
        /* ปรับเป็น auto-fit เพื่อให้การ์ดไม่ผอมเกินไป */
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
      }

      /* --- Facility Card Design --- */
      .product-card {
        background: var(--white);
        border-radius: 16px;
        overflow: hidden; /* ให้รูปไม่ล้นขอบมน */
        display: flex;
        flex-direction: column;
        transition: var(--transition);
        box-shadow: var(--shadow);
        border: 1px solid rgba(0, 0, 0, 0.03);
      }

      .product-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
      }

      /* จัดการรูปภาพ */
      .image-container {
        width: 100%;
        aspect-ratio: 16 / 10; /* ควบคุมสัดส่วนรูปภาพ */
        overflow: hidden;
      }

      .product-image {
        width: 100%;
        height: 100%;
        object-fit: cover; /* รูปจะเต็มกรอบพอดี ไม่เบี้ยว */
        transition: var(--transition);
      }

      .product-card:hover .product-image {
        transform: scale(1.08);
      }

      /* ส่วนเนื้อหาภายในคาร์ด */
      .card-body {
        padding: 25px;
        display: flex;
        flex-direction: column;
        flex-grow: 1; /* ดันปุ่มให้ไปอยู่ด้านล่างสุดเสมอ */
        text-align: center;
      }

      .card-body h3 {
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: #1a1a1a;
      }

      .card-body p {
        font-size: 1rem;
        color: #666;
        margin-bottom: 25px;
        line-height: 1.6;
        font-weight: 300;
        flex-grow: 1;
      }

      /* --- Explore Button --- */
      .explore-button {
        align-self: center;
        display: inline-block;
        padding: 10px 30px;
        font-size: 14px;
        font-weight: 500;
        color: var(--primary-red);
        border: 1.5px solid var(--primary-red);
        border-radius: 50px;
        text-decoration: none;
        transition: var(--transition);
        background: transparent;
      }

      .explore-button:hover {
        background-color: var(--primary-red);
        color: var(--white);
        box-shadow: 0 5px 15px rgba(158, 12, 12, 0.3);
      }

      /* --- Responsive Section --- */
      @media (max-width: 768px) {
    .hd {
        height: 250px; /* ลดความสูงลงเมื่ออยู่ในมือถือ */
    }
    .hd h1 {
        font-size: 45px;
        letter-spacing: 5px;
    }
    .container, .main, .tab-container, .robot {
        margin-top: 40px !important;
    }
}
    </style>