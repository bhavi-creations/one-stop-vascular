<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $firstname = $_POST['name'] ?? '';
    $lastname = $_POST['surname'] ?? '';
    $number = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $city = $_POST['city'] ?? '';
    $state = $_POST['state'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rameshpilli1428@gmail.com'; // Your Gmail email address
        $mail->Password = 'jjpksiywaevdyyrc'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('rameshpilli1428@gmail.com', 'mythri'); // Your Gmail email and name
        $mail->addAddress('rameshpilli1428@gmail.com', 'mythri'); // Recipient's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body = "
            <h1>New Message</h1>
            <p><strong>First Name:</strong> $firstname</p>
            <p><strong>Last Name:</strong> $lastname</p>
            <p><strong>Phone:</strong> $number</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>city:</strong><br>$city</p>
            <p><strong>state:</strong> $state</p>
            <p><strong>subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo '<script> window.alert("Message has been sent.\n\nPlease click OK."); window.location.href="index.html";</script>';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}


<select name="Services" id=""  class="option-menu select-control">

<option value="Diabetic foot and wound care clinic"  class="option-list option"> Diabetic foot and wound care clinic   </option>
<option value="Vascular genetic"  class="option-list option">  Vascular genetic  </option>
<option value="Aortic clinic"  class="option-list option">Aortic clinic</option>
<option value="Thrombosis	clinic">Thrombosis	clinic</option>
<option value="Dialysis Access">Dialysis Access</option>
<option value="Varicose Veins">Varicose Veins</option>
<option value="Peripheral Artery Disease">Peripheral Artery Disease</option>
<option value="Diabetic Foot">Diabetic Foot</option>
<option value="Deep Vein Thrombosis">Deep Vein Thrombosis</option>
<option value="Emergency Vasular Services">Emergency Vasular Services</option>
</select>