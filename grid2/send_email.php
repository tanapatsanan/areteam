<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone_number = $_POST['phone_number'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // ตั้งค่า SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'tanapatsanan@mut.ac.th'; 
        $mail->Password = 'wdng mizq cdls vcif'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        // ตั้งค่าผู้ส่ง
        $mail->setFrom($email, $first_name . ' ' . $last_name);
        $mail->addAddress('tanapatsanan@mut.ac.th');
        $mail->addReplyTo($email, $first_name . ' ' . $last_name);

        $mail->isHTML(false);
        $mail->Subject = "Contact Form Submission: " . $subject;
        $mail->Body    = "
        First Name: $first_name
        Last Name: $last_name
        Company: $company
        Position: $position
        Email: $email
        Phone Number: $phone_number
        Country: $country
        Message: $message
        ";
        //Subject: $subject
        $mail->send();
        $success = true;
    } catch (Exception $e) {
        $errorMessage = $mail->ErrorInfo;
    }
}
?>

<!-- HTML ของ Modal Popup -->
<div id="popupModal" class="modal <?php echo $success || $errorMessage ? 'show' : ''; ?>">
    <div class="modal-content">
        <?php if ($success): ?>
            <p>✅ อีเมลถูกส่งสำเร็จ!</p>
            <a href="contact.php" class="back-button">เสร็จสิ้น</a>
        <?php elseif ($errorMessage): ?>
            <p>❌ ไม่สามารถส่งอีเมลได้: <?= htmlspecialchars($errorMessage) ?></p>
            <a href="test.php" class="back-button1">ลองใหม่</a>
        <?php endif; ?>
    </div>
</div>

<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.37);
        justify-content: center;
        align-items: center;
    }

    .modal.show {
        display: flex;
    }

    .modal-content {
        background-color: #f0fff4;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        font-family: 'Segoe UI', sans-serif;
        color: #2e7d32;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .back-button {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .back-button1 {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color:rgb(175, 76, 76);
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    .back-button:hover {
        background-color: #388E3C;
    }

    .back-button1:hover {
        background-color:rgb(142, 56, 56);
    }
</style>