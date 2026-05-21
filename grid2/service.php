<!doctype html>
<html lang="th">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SERVICES</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php include 'header.php'; ?>

    <section class="hd">
      <h1>SERVICES</h1>
    </section>

    <main class="main">
      <div class="service-card">
        <div class="image-wrapper">
          <img src="service/6.JPG" alt="3D Printing Service" />
        </div>
        <div class="info-overlay">
          <h2 class="service-title">3D Printing</h2>
          <p class="service-desc">
            บริการพิมพ์ชิ้นส่วนด้วยเทคโนโลยี X7™
            เสริมไฟเบอร์กลาสและคาร์บอนไฟเบอร์ต่อเนื่อง แข็งแรงกว่า ABS 10 เท่า
            ทนทานเทียบเท่าอะลูมิเนียม เหมาะสำหรับงานวิศวกรรมขั้นสูง
          </p>
          <a href="3D Printing.php" class="btn-more">รายละเอียดเพิ่มเติม</a>
        </div>
      </div>

      <div class="service-card">
        <div class="image-wrapper">
          <img src="service/cnc.jpg" alt="CNC Machine Part Service" />
        </div>
        <div class="info-overlay">
          <h2 class="service-title">CNC Machine Part</h2>
          <p class="service-desc">
            ผลิตชิ้นงานความละเอียดสูงด้วยเครื่องจักร CNC ที่แม่นยำ
            ควบคุมคุณภาพมาตรฐานสากล รองรับการผลิตจำนวนมากได้อย่างรวดเร็ว
            ประหยัดเวลาและพื้นที่จัดเก็บ
          </p>
          <a href="Parts.php" class="btn-more">รายละเอียดเพิ่มเติม</a>
        </div>
      </div>
    </main>

    <?php include 'footer.php'; ?>
  </body>
</html>
<style>
  :root {
    --primary-color: #c0392b; /* แดงเข้มแบบพรีเมียม */
    --dark-bg: #1a1a1a;
    --text-light: #ffffff;
    --text-muted: #cccccc;
    --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
  }

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Kanit", sans-serif;
  }

  body {
    background-color: #f8f9fa;
    color: #333;
    line-height: 1.6;
  }

  /* Header Section */
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
  /* Main Section */
  .main {
    max-width: 1200px;
    margin: 50px auto 100px; /* เปลี่ยนเป็นเลขบวก เพื่อให้เว้นระยะห่างจากรูปข้างบน */
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    padding: 0 20px;
  }
  .service-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: var(--transition);
    position: relative;
  }

  .service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
  }

  /* Image Container */
  .image-wrapper {
    position: relative;
    height: 280px;
    overflow: hidden;
  }

  .image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
  }

  .service-card:hover .image-wrapper img {
    transform: scale(1.1);
  }

  /* Overlay Info */
  .info-overlay {
    padding: 25px;
    background: white;
  }

  .service-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--dark-bg);
    display: flex;
    align-items: center;
  }

  .service-title::before {
    content: "";
    width: 4px;
    height: 24px;
    background: var(--primary-color);
    margin-right: 12px;
    display: inline-block;
  }

  .service-desc {
    font-size: 15px;
    color: #666;
    margin-bottom: 20px;
    font-weight: 300;
  }

  .btn-more {
    display: inline-block;
    text-decoration: none;
    color: var(--primary-color);
    font-weight: 600;
    font-size: 14px;
    border: 1px solid var(--primary-color);
    padding: 8px 20px;
    border-radius: 50px;
    transition: var(--transition);
  }

  .btn-more:hover {
    background: var(--primary-color);
    color: white;
  }

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
