<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $name = $_POST['Name'] ?? '';
    $Email = $_POST['Email'] ?? '';
    $phone = $_POST['Phone']?? '';
  
    $docter = $_POST['Docter'] ?? '';
    $services = $_POST['Services'] ?? '';
    $date = $_POST['Date'] ?? '';
    $time = $_POST['Time'] ?? '';
 

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'onestopvascularsolutions@gmail.com'; // Your Gmail email address
        $mail->Password = 'dnwrgzvuklfixvtf'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('onestopvascularsolutions@gmail.com', 'One Stop Vascular Solutions'); // Your Gmail email and name
        $mail->addAddress('onestopvascularsolutions@gmail.com', 'One Stop Vascular Solutions'); // Recipient's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Appointment Form';
        $mail->Body = "
            <h1>New Message</h1>
            <p><strong>Name:</strong> $name</p>
             <p><strong>Email:</strong>  $Email</p>
            <p><strong>Phone:</strong> $phone</p>
             <p><strong>Docter:</strong> $docter</p>
             
             <p><strong>Services:</strong> $services</p>
            <p><strong>Date:</strong> $date</p>
             <p><strong>Time:</strong> $time</p>
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
