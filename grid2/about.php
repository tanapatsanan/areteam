<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ABOUT</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body> 
    <?php include 'header.php';?>

    <div class="hd">
      <h1>ABOUT</h1>
    </div>

    <div class="tab-container">
      <button
        class="tablink"
        onclick="openPage('Overview', this)"
        id="defaultOpen"
      >
        Overview
      </button>
      <button class="tablink" onclick="openPage('Updates', this)">
        Updates
      </button>
    </div>

    <div id="Overview" class="tabcontent">
      <div class="content-card">
        <h2>What We Do</h2>
        <p>
          <strong>ARE ROBOTICS</strong> เป็นผู้ให้บริการระบบหุ่นยนต์
          งานวิจัยพร้อมพัฒนาที่สามารถใช้งานได้จริง
          ทีมของเรามีประสบการณ์ในการออกแบบสร้างชิ้นงาน พัฒนา ผลิต
          และส่งมอบหุ่นยนต์ภาคพื้นดินประสิทธิภาพสูง
          เราปฏิบัติตามข้อกำหนดจากกระทรวงกลาโหม
          และได้รับรองมาตรฐานการทดสอบอย่างเป็นทางการตั้งแต่ปี 2565
        </p>
        <a href="imgs/147905.jpg" target="_blank" class="btn-download"
          >ดูรายละเอียด D-EMPIR V.4</a
        >
      </div>
    </div>

    <div id="Updates" class="tabcontent">
      <div class="content-card">
        <h2>News Updates</h2>
        <p>
          ติดตามความเคลื่อนไหวล่าสุดเกี่ยวกับเทคโนโลยีหุ่นยนต์และโครงการวิจัยของเราได้ที่นี่
        </p>
      </div>
    </div>

    <?php include 'footer.php';?>

    <script>
      function openPage(pageName, elmnt) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].classList.remove("active");
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.classList.add("active");
      }

      document.getElementById("defaultOpen").click();
    </script>
  </body>
</html>
<style>
  :root {
    --accent-color: #9e0c0c; /* สีแดงหลักประจำแบรนด์ */
    --bg-light: #f8f9fa;
    --text-dark: #2d3436;
    --transition: all 0.3s ease;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Kanit", sans-serif;
  }

  body {
    background-color: var(--bg-light);
    color: var(--text-dark);
    line-height: 1.6;
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
  /* --- Tab Control Section --- */
  .tab-container {
    background: white;
    display: flex;
    justify-content: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    position: sticky;
    top: 0;
    z-index: 100;
  }

  .tablink {
    background: none;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 20px 40px;
    font-size: 18px;
    font-weight: 400;
    color: #636e72;
    position: relative;
    transition: var(--transition);
  }

  .tablink:hover {
    color: var(--accent-color);
  }

  /* เส้นใต้เวลา Active */
  .tablink.active {
    color: var(--accent-color);
    font-weight: 600;
  }

  .tablink.active::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 20%;
    width: 60%;
    height: 4px;
    background-color: var(--accent-color);
    border-radius: 10px 10px 0 0;
  }

  /* --- Content Section --- */
  .tabcontent {
    display: none;
    padding: 80px 20px;
    max-width: 1000px;
    margin: 0 auto;
    animation: fadeIn 0.5s ease;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .content-card {
    background: white;
    padding: 60px;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    text-align: center;
  }

  .content-card h2 {
    font-size: 2.5rem;
    color: var(--text-dark);
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 15px;
  }

  .content-card h2::after {
    content: "";
    width: 50px;
    height: 3px;
    background: var(--accent-color);
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
  }

  .content-card p {
    font-size: 1.15rem;
    font-weight: 300;
    color: #444;
    max-width: 850px;
    margin: 0 auto 35px;
    line-height: 2;
  }

  /* --- Custom Button --- */
  .btn-download {
    display: inline-block;
    padding: 12px 35px;
    background-color: var(--accent-color);
    color: white !important;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 400;
    transition: var(--transition);
    box-shadow: 0 4px 15px rgba(158, 12, 12, 0.3);
  }

  .btn-download:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(158, 12, 12, 0.4);
    background-color: #800a0a;
  }

  /* --- Footer --- */
  footer {
    background-color: #2d3436;
    color: #dfe6e9;
    text-align: center;
    padding: 30px 0;
    margin-top: 50px;
  }

  /* --- Responsive --- */
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
