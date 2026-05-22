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

     <section class="hero">
        <h1>
        CONTACT
        </h1>
    </section>


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

/* CONTAINER */

.container{

  width:90%;
  max-width:900px;

  margin:80px auto 120px;

  background:var(--glass);

  backdrop-filter:blur(20px);

  border:1px solid var(--line);

  border-radius:35px;

  padding:60px;

  position:relative;

  overflow:hidden;
}

/* glow */

.container::before{

  content:"";

  position:absolute;

  width:350px;
  height:350px;

  background:
    rgba(122,15,20,.08);

  border-radius:50%;

  top:-180px;
  right:-150px;

  filter:blur(50px);
}

.container h2{

  text-align:center;

  color:white;

  margin-bottom:45px;

  font-size:42px;

  position:relative;

  z-index:2;
}

/* FORM */

.form-row{

  display:grid;

  grid-template-columns:1fr 1fr;

  gap:20px;
}

.form-group{
  margin-bottom:20px;
}

.form-group input,
.form-group select,
.form-group textarea{

  width:100%;

  padding:16px 20px;

  background:
    rgba(255,255,255,.03);

  border:
    1px solid rgba(255,255,255,.08);

  border-radius:16px;

  color:white;

  outline:none;

  transition:.3s ease;

  font-size:15px;
}

.form-group textarea{
  height:160px;
  resize:none;
}

.form-group input::placeholder,
.form-group textarea::placeholder{
  color:#7d8590;
}

.form-group select{
  color:#9ca3af;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{

  border-color:
    rgba(122,15,20,.5);

  box-shadow:
    0 0 0 4px rgba(122,15,20,.12);
}

/* BUTTON */

.submit-btn{

  width:100%;

  padding:18px;

  border:none;

  border-radius:18px;

  background:
    linear-gradient(
      135deg,
      #7a0f14,
      #4f080b
    );

  color:white;

  font-size:16px;

  font-weight:600;

  letter-spacing:1px;

  cursor:pointer;

  transition:.35s ease;

  box-shadow:
    0 18px 40px rgba(122,15,20,.22);
}

.submit-btn:hover{

  transform:
    translateY(-4px);

  box-shadow:
    0 25px 55px rgba(122,15,20,.35);
}

/* RESPONSE */

#response{
  margin-top:20px;
  text-align:center;
}

/* MOBILE */

@media(max-width:768px){

  .hd{
    height:240px;
  }

  .hd h1{
    font-size:50px;
  }

  .container{
    padding:35px 24px;
    margin-top:50px;
  }

  .container h2{
    font-size:30px;
  }

  .form-row{
    grid-template-columns:1fr;
  }

}

</style>