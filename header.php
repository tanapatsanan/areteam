<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header>
    <div class="topnav" id="myTopnav">
      <a href="areteam.php" class="active">
        <div class="f1">
          <img src="imgs/logo.png" alt="Robotics Logo" class="robotics-logo">
        </div>
      </a>
      <a href="ComingSoon.php" class="small">PRODUCTS</a>
      <a href="test.php" class="small">SERVICE</a>
      <a href="test2.php" class="small">ABOUT</a>
      <a href="test3.php" class="small">FACILITIES</a>
      <a href="test4.php" class="small">CONTACT</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </header>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
/*แสดงให้รู้ว่าอยู่หน้าไหน*/
     document.addEventListener("DOMContentLoaded", function () {
    var currentPage = window.location.pathname.split("/").pop();
    var navLinks = document.querySelectorAll(".topnav a");

    navLinks.forEach(function (link) {
      if (link.getAttribute("href") === currentPage) {
        link.classList.add("active");
      }
    });
  });
  </script>
</body>
</html>

<style>
 * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif /*!important*/;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif !important;
}
  header {
    background-color: #f2f2f2be;
    padding: 5px;
    width: 100%;
  }

  .topnav {
    overflow: hidden;
    background-color: transparent;
    margin-left: 5%;
  }

  .topnav a {
    float: left;
    display: block;
    color: #4f4e4c;
    text-align: center;
    padding: 20px 16px; /* ปรับ Padding ให้เท่ากันบนล่าง */
    text-decoration: none;
    font-size: 16px; /* ใช้ขนาด 16 หรือ 18 เท่ากันหมด */
    margin-left: 2%;
    transition: all 0.3s ease; /* เพิ่มความนุ่มนวลเวลาเปลี่ยนสี */
    position: relative; /* สำหรับทำเส้นใต้ */
}
  .topnav a:hover {
    color: #883a3f;
  }

 .topnav a.active {
    font-size: 16px !important; /* บังคับให้ขนาดเท่ากับเมนูปกติ */
    color: #5d0e0b !important; /* สีแดงเข้ม */
    font-weight: 600 !important; /* หนาขึ้นเล็กน้อยพอให้เด่น */
}

/* เพิ่มเส้นใต้สวยๆ ให้หน้า Active แทนการขยายขนาด */
.topnav a.active::after {
    content: "";
    position: absolute;
    bottom: 5px;
    left: 16px;
    right: 16px;
    height: 3px;
    background-color: #5d0e0b;
    border-radius: 2px;
}

/* ยกเลิกสไตล์ Active สำหรับ Logo (รูปภาพไม่ควรมีเส้นใต้) */
.topnav a.active:first-child::after {
    display: none;
}
.topnav a:first-child {
    padding-top: 10px; /* จัดตำแหน่งโลโก้ให้พอดี */
}

/* ลบพวก margin-top แปลกๆ ใน a.small ออก เพื่อให้ทุกเมนูอยู่ระดับเดียวกัน */
.topnav a.small {
    margin-top: 0;
}

  .topnav .f1 a.active {
    font-size: 30px;
    color: #5d0e0b;
    font-weight: 900;
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 3px solid #5d0e0b; /* เส้นใต้สีแดงเข้ม */
    background-color: rgba(93, 14, 11, 0.1); /* พื้นหลังเบลอเล็กน้อย */
    border-radius: 5px; /* ทำให้ขอบโค้ง */
  }


  .topnav .icon {
    display: none;
    margin-top: 9px;
  }

  .topnav a.small {
  margin-top: 10px; /* ขยับลงจากเดิม */
  font-size: 18px;
}

  .robotics-logo {
    height: 40px; /* Adjust height */
    width: auto; /* Maintain aspect ratio */
    display: block;
    margin: 0 auto;
    padding-left: 30px;
  }

  @media screen and (max-width: 1260px) {
    .topnav a:not(:first-child) {
      display: none;
    }

    .topnav a.icon {
      float: right;
      display: block;
    }
  }

  @media screen and (max-width: 1260px) {
    .topnav.responsive {
      position: relative;
    }

    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }

    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
  }

  @media screen and (max-width: 430px) {
    .topnav {
      text-align: center;
      margin-left: 0;
    }

    .topnav a {
      font-size: 16px;
      margin-left: 0;
      padding: 10px;
    }

    .robotics-logo {
      height: 20px; /* Adjust for smaller screens */
    }
  }
</style>
