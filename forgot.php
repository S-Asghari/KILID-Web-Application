<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ($result->num_rows == 0) {
        $_SESSION['message'] = 'ایمیل (یا شماره همراه) اشتباه است.';
        header("location: ./error.php");
    } else {
        $user = $result->fetch_assoc();

        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        $_SESSION['message'] = "یک ایمیل به آدرس $email ارسال شد.<br />لطفا برای دریافت لینک تغییر رمز عبور، ایمیل خود را چک کنید.";

        
        $message_body = " !عزیز، سلام " . $first_name . "<br />" .
        ".این ایمیل به دلیل درخواست شما برای تغییر رمز عبور حساب کاربری تان در سایت کیلید ارسال شده است" . "<br />" .
        ":بدین منظور لطفا روی لینک زیر کلیک نمایید" . "<br />" .
        "http://localhost/myprojs/Project/reset.php?email=". $email."&hash=".$hash;

        require_once('./PHPMailer-6.1.4/src/PHPMailer.php');
        require_once('./PHPMailer-6.1.4/src/Exception.php');
        require_once('./PHPMailer-6.1.4/src/SMTP.php');
        require_once('./PHPMailer-6.1.4/src/OAuth.php');
        require_once('./PHPMailer-6.1.4/src/POP3.php');
        $mail = new PHPMailer();
        $mail->CharSet =  "utf-8";
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = "sara0asghari@gmail.com";
        $mail->Password = "13770312";
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "587";
        $mail->From = 'sara0asghari@gmail.com';
        $mail->FromName = 'Kilid';
        $mail->AddAddress($email, 'User');
        $mail->Subject  =  'لینک تغییر رمز عبور در سایت کیلید';
        $mail->IsHTML(true);
        $mail->Body = $message_body;
        if ($mail->Send()) {
            header("location: ./success.php"); 
        } else {
            $_SESSION['message'] = "Mail Error - >" . $mail->ErrorInfo;
            header("location: ./error.php");
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./cssFile2.css" media="screen" />
</head>

<body>

    <div id="box1">
        <div style="position:relative; left:22.5%; top:30px;">
            <a href="./kilid.php"><img src="https://i.ibb.co/c2gcBwL/remove-Icon.png" style="border-radius:30px;" /></a>
        </div>
        <div id="box2">
            <div id="box3">
                <h5 style="margin-top:100px; margin-bottom: 30px; text-align:center">فراموشی رمز</h5>
                <form action="./forgot.php" method="post" id="foo">
                    <div><input id="searchInput" type="text" name="email" value="" size="35" maxlength="30" placeholder="شماره همراه یا ایمیل" required /></div>
                </form>
                <div style="text-align:center;">
                    <a href="./index.php"><button id="submitBotton" style="background-color:#5E5E5E; margin-left:5px;">بازگشت</button></a>
                    <input type="submit" form="foo" id="submitBotton" name="login" value="ارسال" />
                    <br /><br /><br />
                </div>
            </div>
        </div>
    </div>

</body>

</html>