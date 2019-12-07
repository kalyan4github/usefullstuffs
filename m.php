<?php
    use PHPMailer\PHPMailer\PHPMailer;

    
    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer\PHPMailer.php";
        require_once "PHPMailer\SMTP.php";
        require_once "PHPMailer\Exception.php";

        $mail = new  PHPMailer();

        //SMTP settings
        $mail->isSMTP();
        $mail->Host = "";
        $mail->SMTPAuth = true;
        $mail->Username = "";
        $mail->Password = "";
        $mail->Port = 587;
        $mail->SMTPSecure = "SSL";
       
        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email,$name);
        $mail->addAddress("arshad.nadeem@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $body;

        if($mail->send()){
            $response = "Email is sent";
        }
        else{
        $response = "Something went wrong: <br><br>".$mail->ErrorInfo;
        }
        exit(json_encode(array("response"=>$response)));
    }
?>