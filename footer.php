<!doctype html>
<html lang="th">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FOOTER | ARE ROBOTICS</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <footer>
      <div class="footer-wrapper">
        <!-- ฝั่งซ้าย: Logo และ Navigation -->
        <div class="footer-left">
          <div class="footer-logo-box">
            <img src="imgs/mut.png" alt="Logo" />
          </div>

          <div class="footer-nav-grid">
            <!-- Column 1 -->
            <div class="footer-section">
              <a href="areteam.php"><h4>ARE ROBOTICS</h4></a>
              <ul>
                <li><a href="ComingSoon.php">PRODUCTS</a></li>
                <li><a href="service.php">SERVICE</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="facilties.php">FACILITIES</a></li>
                <li><a href="contact.php">CONTACT</a></li>
              </ul>
            </div>

            <!-- Column 2 -->
            <div class="footer-section">
              <h4>SERVICE</h4>
              <ul>
                <li><a href="3D Printing.php">3D Printing Prototyping</a></li>
                <li><a href="Parts.php">CNC Machince Part</a></li>
              </ul>
            </div>

            <!-- Column 3 -->
            <div class="footer-section">
              <h4>FACILITIES</h4>
              <ul>
                <li><a href="#">ห้องเครื่องมือวัด</a></li>
                <li><a href="#">ห้องเชื่อมงานเหล็ก</a></li>
                <li><a href="#">ห้อง CNC</a></li>
                <li><a href="#">ลานปฏิบัติงาน Workshop</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- ฝั่งขวา: ติดต่อ -->
        <div class="footer-right">
          <div class="footer-section">
            <h4>CONTACT</h4>
            <ul>
              <li><i class="fa fa-phone"></i> 02-988-3666 ต่อ 2139</li>
              <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:are@mut.ac.th">are@mut.ac.th</a>
              </li>
              <li>
                <i class="fa fa-map-marker-alt"></i>
                <a
                  href="https://maps.app.goo.gl/Z858kuy3MYC5JigB8"
                  target="_blank"
                  class="address-link"
                >
                  มหาวิทยาลัยเทคโนโลยีมหานคร 140 ถนนเชื่อมสัมพันธ์ เขตหนองจอก
                  กรุงเทพฯ 10530
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="copyright-bar">
        &copy; 2026 ARE ROBOTICS | Mahanakorn University of Technology. All
        Rights Reserved.
      </div>
    </footer>
  </body>
</html>

 <style>
      :root {
        --footer-bg: #1a1a1a;
        --text-main: #ffffff;
        --text-dim: #b2bec3;
        --accent-red: #9e0c0c;
      }

      footer {
        background-color: var(--footer-bg);
        color: var(--text-main);
        padding: 50px 160px 30px;
        font-family: "Kanit", sans-serif;
        border-top: 4px solid var(--accent-red);
      }

      .footer-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        /* แบ่งเป็น 2 ส่วนใหญ่: (Logo + Nav) และ (Contact) */
        grid-template-columns: 2.5fr 1fr;
        gap: 60px;
      }

      /* ส่วนฝั่งซ้าย: Logo + Columns */
      .footer-left {
        display: flex;
        gap: 40px;
      }

      .footer-logo-box {
        min-width: 150px;
      }

      .footer-logo-box img {
        width: 140px;
        height: auto;
        filter: brightness(0) invert(1); /* ถ้าโลโก้ไม่ใช่สีขาว ให้เป็นสีขาว */
        opacity: 0.9;
      }

      .footer-nav-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
      }

      /* ส่วนหัวข้อและรายการ */
      .footer-section h4 {
        color: var(--text-main);
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 20px;
        letter-spacing: 1px;
        text-transform: uppercase;
      }

      .footer-section h4 a {
        text-decoration: none;
        color: inherit;
      }

      .footer-section ul {
        list-style: none;
        padding: 0;
      }

      .footer-section ul li {
        margin-bottom: 12px;
        font-size: 14px;
        font-weight: 200;
        display: flex;
        align-items: flex-start;
        gap: 10px;
      }

      .footer-section ul li a {
        color: var(--text-dim);
        text-decoration: none;
        transition: 0.3s;
      }

      .footer-section ul li a:hover {
        color: var(--text-main);
        padding-left: 5px;
      }

      .footer-section i {
        color: var(--accent-red);
        margin-top: 3px;
      }

      /* ฝั่งขวา: Contact & Copyright */
      .footer-right {
        border-left: 1px solid rgba(255, 255, 255, 0.1);
        padding-left: 40px;
      }

      .address-link {
        line-height: 1.8;
        display: inline-block;
      }

      .copyright-bar {
        max-width: 1200px;
        margin: 60px auto 0;
        padding-top: 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        text-align: center;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.3);
        font-weight: 200;
      }

      /* --- Responsive --- */
      @media screen and (max-width: 1024px) {
        .footer-wrapper {
          grid-template-columns: 1fr;
          gap: 40px;
        }
        .footer-right {
          border-left: none;
          padding-left: 0;
          padding-top: 40px;
          border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
      }

      @media screen and (max-width: 768px) {
        .footer-left {
          flex-direction: column;
          align-items: center;
          text-align: center;
        }
        .footer-nav-grid {
          grid-template-columns: 1fr;
          text-align: center;
        }
        .footer-section ul li {
          justify-content: center;
        }
        footer {
          padding: 60px 20px 30px;
        }
      }
    </style>