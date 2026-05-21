<!doctype html>
<html lang="th">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTACT</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    
  </head>
  <body>
    <?php include 'header.php';?>

    <div class="hd">
      <h1>CONTACT</h1>
    </div>

    <div class="container">
      <h2>เราทำอะไรให้คุณได้บ้าง?</h2>

      <form id="emailForm" action="send_email.php" method="post">
        <div class="form-row">
          <div class="form-group">
            <input
              type="text"
              name="first_name"
              placeholder="First Name"
              required
            />
          </div>
          <div class="form-group">
            <input
              type="text"
              name="last_name"
              placeholder="Last Name"
              required
            />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <input
              type="text"
              name="company"
              placeholder="Company / Organization"
              required
            />
          </div>
          <div class="form-group">
            <input
              type="text"
              name="position"
              placeholder="Position"
              required
            />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <input
              type="email"
              name="email"
              placeholder="Email Address"
              required
            />
          </div>
          <div class="form-group">
            <input
              type="tel"
              name="phone_number"
              placeholder="Phone Number"
              required
            />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <select name="country" required>
              <option value="">Select Country</option>
              <option value="thailand">Thailand</option>
              <option value="others">Others</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="subject" placeholder="Subject" required />
          </div>
        </div>

        <div class="form-group">
          <textarea
            name="message"
            placeholder="How can we help you?"
            required
          ></textarea>
        </div>

        <button type="submit" class="submit-btn">SEND MESSAGE</button>

        <div id="response"></div>
      </form>
    </div>

    <?php include 'footer.php';?>

    <script>
      $(document).ready(function () {
        $("#emailForm").submit(function (e) {
          e.preventDefault();
          const submitBtn = $(this).find(".submit-btn");
          submitBtn.text("SENDING...").prop("disabled", true);

          $.ajax({
            url: "page_mail.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
              $("#response").html(
                "<div style='color: green; padding: 10px;'>ส่งข้อมูลสำเร็จ ขอบคุณที่ติดต่อเรา!</div>",
              );
              $("#emailForm")[0].reset();
              submitBtn.text("SEND MESSAGE").prop("disabled", false);
            },
            error: function () {
              $("#response").html(
                "<div style='color: red; padding: 10px;'>เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง</div>",
              );
              submitBtn.text("SEND MESSAGE").prop("disabled", false);
            },
          });
        });
      });
    </script>
  </body>
</html>

<style>
      :root {
        --brand-red: #9e0c0c;
        --brand-dark: #1a1a1a;
        --bg-gray: #f8f9fa;
        --transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
      }
      .main {
        max-width: 1200px;
        margin: 50px auto 100px; /* เปลี่ยนเป็นเลขบวก เพื่อให้เว้นระยะห่างจากรูปข้างบน */
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 40px;
        padding: 0 20px;
      }
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Kanit", sans-serif;
      }

      body {
        background-color: var(--bg-gray);
        color: #333;
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

      /* --- Form Container --- */
      .container {
        width: 90%;
        max-width: 800px;
        /* ปรับ Margin เป็นเลขบวก (Top, Right/Left, Bottom) */
        /* 60px คือระยะห่างระหว่าง Header กับกล่องข้อความ */
        margin: 60px auto 100px;
        background-color: #ffffff;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        position: relative;
        z-index: 10;
      }

      h2 {
        text-align: center;
        color: var(--brand-dark);
        margin-bottom: 40px;
        font-size: 2rem;
        font-weight: 600;
      }

      /* --- Grid System for Form --- */
      .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .form-group input,
      .form-group select,
      .form-group textarea {
        width: 100%;
        padding: 15px 20px;
        font-size: 1rem;
        border: 1px solid #e1e1e1;
        border-radius: 12px;
        background-color: #fcfcfc;
        transition: var(--transition);
        outline: none;
      }

      .form-group input:focus,
      .form-group select:focus,
      .form-group textarea:focus {
        border-color: var(--brand-red);
        background-color: #fff;
        box-shadow: 0 0 0 4px rgba(158, 12, 12, 0.05);
      }

      .form-group textarea {
        resize: vertical;
        height: 150px;
      }

      /* --- Submit Button --- */
      .submit-btn {
        width: 100%;
        padding: 18px;
        background-color: var(--brand-dark);
        color: #fff;
        font-size: 1.1rem;
        font-weight: 600;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: var(--transition);
        margin-top: 10px;
        letter-spacing: 1px;
      }

      .submit-btn:hover {
        background-color: var(--brand-red);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(158, 12, 12, 0.2);
      }

      .submit-btn:active {
        transform: translateY(0);
      }

      /* --- Response Message --- */
      #response {
        margin-top: 20px;
        text-align: center;
        font-weight: 400;
      }

      /* --- Responsive Section --- */
      /* ปรับ Media Query สำหรับมือถือด้วย */
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