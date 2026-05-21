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

    <section class="hero">
        <h1>
        ABOUT US
        </h1>
    </section>

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
  --red: #ff3b30;
  --dark: #0b0d12;
  --dark2: #131720;
  --glass: rgba(255,255,255,.04);
  --line: rgba(255,255,255,.08);
  --gray: #9ca3af;
  --white: #ffffff;

  --transition: all .3s ease;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Kanit", sans-serif;
}

body {
  background: var(--dark);
  color: var(--white);
  line-height: 1.6;
}

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

/* TAB */

.tab-container {

  background: rgba(255,255,255,.03);

  backdrop-filter: blur(20px);

  border: 1px solid var(--line);

  display: flex;
  justify-content: center;

  max-width: 500px;

  margin: 60px auto 0;

  border-radius: 60px;

  overflow: hidden;
}

.tablink {

  flex:1;

  background: transparent;

  border: none;

  color: #9ca3af;

  padding: 18px 40px;

  cursor: pointer;

  font-size: 17px;

  transition: .3s ease;
}


.tablink:hover {
  color: white;
}

.tablink.active {

  background:
    linear-gradient(
      135deg,
      #7a0f14,
      #4f080b
    );

  color: white;

  font-weight: 600;

  border-radius: 0;
}
/* CONTENT */

.tabcontent {
  display: none;

  padding: 70px 20px;

  max-width: 1100px;

  margin: auto;

  animation: fadeIn .4s ease;
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

  background: var(--glass);

  backdrop-filter: blur(20px);

  border: 1px solid var(--line);

  padding: 60px;

  border-radius: 30px;

  text-align: center;

  position: relative;

  overflow: hidden;

  transition: .4s ease;
}

.content-card::before{

  content:"";

  position:absolute;

  width:350px;
  height:350px;

  background:
    rgba(255,59,48,.06);

  border-radius:50%;

  top:-180px;
  right:-160px;

  filter:blur(50px);
}

.content-card:hover{

  transform:
    translateY(-8px);

  border-color:
    rgba(255,59,48,.25);

  box-shadow:
    0 30px 60px rgba(0,0,0,.35);
}

.content-card h2 {

  font-size: 42px;

  color: white;

  margin-bottom: 30px;
}

.content-card p {

  font-size: 18px;

  color: var(--gray);

  max-width: 850px;

  margin: auto auto 35px;

  line-height: 2;
}

.content-card strong{
  color:white;
}

/* BUTTON */

.btn-download {

  display: inline-block;

  padding: 14px 35px;

  background:
    linear-gradient(
      135deg,
      #ff3b30,
      #8d0f13
    );

  color: white !important;

  text-decoration: none;

  border-radius: 50px;

  transition: .3s;

  box-shadow:
    0 18px 40px rgba(255,59,48,.22);
}

.btn-download:hover {

  transform:
    translateY(-5px);

  box-shadow:
    0 25px 55px rgba(255,59,48,.35);
}

/* RESPONSIVE */

@media (max-width: 768px) {

  .hd {
    height: 250px;
  }

  .hd h1 {
    font-size: 45px;
    letter-spacing: 5px;
  }

  .tab-container {

  background: rgba(255,255,255,.03);

  backdrop-filter: blur(20px);

  border: 1px solid rgba(255,255,255,.08);

  display: flex;

  justify-content: center;

  max-width: 500px;

  margin: 60px auto 0;

  border-radius: 60px;

  overflow: hidden; /* สำคัญ */
}
  .tablink{
    width:100%;
  }

  .content-card{
    padding:40px 24px;
  }

  .content-card h2{
    font-size:32px;
  }

  .content-card p{
    font-size:16px;
  }

}
</style>