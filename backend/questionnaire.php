<?php
include('connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'progsportsdev.com'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@progsportsdev.com'; // SMTP username
    $mail->Password   = 'Pass@Email1234'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('noreply@progsportsdev.com', 'Mailer');
    $mail->addAddress('abdulrafay99910@gmail.com', 'Veterans Inc.'); // Add a recipient

    $first_name = $_POST['first_name'] ?? '';
    $middle_initial = $_POST['middle_initial'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $cell_phone = $_POST['cell_phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $address = $_POST['address'] ?? '';
    $marital_status = $_POST['marital_status'] ?? '';
    $your_description = $_POST['your_description'] ?? '';
    $other_details = $_POST['other_details'] ?? '';
    $age = $_POST['age'] ?? '';
    $race = $_POST['race'] ?? '';
    $homeless = $_POST['homeless'] ?? '';
    $hear_about_us = $_POST['hear_about_us'] ?? '';
    $work_hours = $_POST['work_hours'] ?? '';
    $county_residence = $_POST['county_residence'] ?? '';
    $school_certification = $_POST['school_certification'] ?? '';
    if (isset($_POST['learn_about_services']) && $_POST['learn_about_services'] !== null) {

        $learn_about_services = $_POST['learn_about_services'];
        $learn = implode(',', $learn_about_services);
    } else {
        $learn = ''; 
    }
    if (isset($_POST['spoke_with']) && $_POST['spoke_with'] !== null) {

        $spoke_with = $_POST['spoke_with'];
        $spoke = implode(',', $spoke_with);
    } else {
        $spoke = ''; 
    }
    $any_questions = $_POST['any_questions'] ?? '';

    $sql = "INSERT INTO questionnaire (`first_name`, `middle_initial`, `last_name`, `cell_phone`, `email`, `gender`, `address`, `marital_status`,`homeless`, `your_description`, `other_details`,`age`,`race`,`hear_about_us`,`county_residence`,`work_hours`,`school_certification`,`learn_about_services`,`spoke_with`,`any_questions`,`only_questionnaire`) 
            VALUES ('$first_name', '$middle_initial', '$last_name', '$cell_phone', '$email', '$gender','$address', '$marital_status','$homeless', '$your_description', '$other_details','$age','$race','$hear_about_us','$county_residence','$work_hours','$school_certification','$learn','$spoke','$any_questions','0')";

    $result = $conn->query($sql);



    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Questionnaire Submission';

    $bodyContent = '<h1>Questionnaire Submission Details</h1>';
    foreach ($_POST as $key => $value) {
        $bodyContent .= "<p><strong>$key:</strong> $value</p>";
    }
    $mail->Body    = $bodyContent;
 
    $mail->send();
    if (isset($_POST['questionnaire_submit'])) {
        $sql2 = "UPDATE questionnaire 
        SET `only_questionnaire` = '1';";

        $result2 = $conn->query($sql2);
        header('Location: ../thankyou.php');
    } elseif (isset($_POST['form_submit'])) {
        $sql3 = "UPDATE questionnaire 
        SET `only_questionnaire` = '2';";

        $result3 = $conn->query($sql3);
        header('Location: ../form.php');
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
