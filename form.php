<?php
require_once "vendor/autoload.php"; //PHPMailer Object 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/phpmailer/phpmailer/src/Exception.php";
require "vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "vendor/phpmailer/phpmailer/src/SMTP.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get the input values
$filename = "inquiry.txt";

$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$mobile = isset($_POST["mobile"]) ? $_POST["mobile"] : "";
$cname = isset($_POST["cname"]) ? $_POST["cname"] : "";
$message = isset($_POST["message"]) ? $_POST["message"] : "";


$data = "* " . "Name:- " . $name . " Email:- " . $email . " Mobile:- " . $mobile . " Company Name:- " . $cname . " Message:- " . $message;

// Open the file in append mode or create it if it doesnt exist
$file = fopen($filename, "a");

// Check if the file is opened successfully
if ($file) {
    // Write the data to the file
    fwrite($file, $data . PHP_EOL); // PHP_EOL adds a newline for better readability
    fclose($file);

}


$mail = new PHPMailer; //From email address and name 


$mail->SMTPDebug = 0;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name                      
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "cs@incognic.tech";
$mail->Password = "xowujbdsfjinrkie";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";

$mail->From = "cs@incognic.tech";
$mail->FromName = "Client Support"; //To address and name 

$mail->addAddress("pawank@incognic.tech"); //Recipient name is optional
$mail->addAddress("shivanip@incognic.tech"); //Recipient name is optional
$mail->addAddress("cs@incognic.tech"); //Address to which recipient will reply 
// $mail->addReplyTo("reply@yourdomain.com", "Reply"); //CC and BCC 
// $mail->addCC("yadavaditya0@gmail.com");
// $mail->addBCC("bcc@example.com"); //Send HTML or Plain Text email 
$mail->isHTML(true);
$mail->Subject = "New Inquiry Request Submitted";
$mail->Body = '
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Request For Query</title>


<style type="text/css">
    img {
        max-width: 100%;
    }

    body {
        -webkit-font-smoothing: antialiased;
        -webkit-text-size-adjust: none;
        width: 100% !important;
        height: 100%;
        line-height: 1.6em;
    }

    body {
        background-color: #f6f6f6;
    }

    @media only screen and (max-width: 640px) {
        body {
            padding: 0 !important;
        }

        h1 {
            font-weight: 800 !important;
            margin: 20px 0 5px !important;
        }

        h2 {
            font-weight: 800 !important;
            margin: 20px 0 5px !important;
        }

        h3 {
            font-weight: 800 !important;
            margin: 20px 0 5px !important;
        }

        h4 {
            font-weight: 800 !important;
            margin: 20px 0 5px !important;
        }

        h1 {
            font-size: 22px !important;
        }

        h2 {
            font-size: 18px !important;
        }

        h3 {
            font-size: 16px !important;
        }

        .container {
            padding: 0 !important;
            width: 100% !important;
        }

        .content {
            padding: 0 !important;
        }

        .content-wrap {
            padding: 10px !important;
        }

        .invoice {
            width: 100% !important;
        }
    }
</style>
</head>

<body itemscope itemtype="http://schema.org/EmailMessage"
style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;"
bgcolor="#f6f6f6">

<table class="body-wrap"
    style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;"
    bgcolor="#f6f6f6">
    <tr
        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
        <td style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;"
            valign="top"></td>
        <td class="container" width="600"
            style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;"
            valign="top">
            <div class="content"
                style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                <table class="main" width="100%" cellpadding="0" cellspacing="0"
                    style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;"
                    bgcolor="#fff">
                    <tr
                        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <td class="alert alert-warning"
                            style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 3px 3px 0 0; background-color: #1d1f48; margin: 0; padding: 20px;"
                            align="center" bgcolor="#2f353f" valign="top">
                           <span style="font-size: 22px;">New Inquiry Request Submitted</span>
                        </td>
                    </tr>
                    <tr
                        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <td class="content-wrap"
                            style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;"
                            valign="top">
                            <table width="100%" cellpadding="0" cellspacing="0"
                                style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                <tr
                                    style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block"
                                        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;"
                                        valign="top">
                                        <strong
                                            style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">Hello
                                            Sales Team, </strong><br>
                                        New Inquery for product has been submitted,Kindly get in touch with mentioned details.
                                    </td>
                                </tr>
                                <tr
                                    style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block"
                                        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px; text-align:center"
                                        valign="top">
                                        <a href="javascript:void(0)" class="btn-primary"
                                            style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #ea4788; margin: 0; border-color: #ea4788; border-style: solid; border-width: 10px 20px;">Name :' . $name . '</a>
                                    </td>
                                </tr>
                                <tr
                                    style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block"
                                        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px; text-align:center"
                                        valign="top">
                                        <a href="javascript:void(0)" class="btn-primary"
                                            style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #ea4788; margin: 0; border-color: #ea4788; border-style: solid; border-width: 10px 20px;">Email Id :' . $email . '</a>
                                    </td>
                                </tr>
                                <tr
                                    style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block"
                                        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px; text-align:center"
                                        valign="top">
                                        <a href="javascript:void(0)" class="btn-primary"
                                            style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #ea4788; margin: 0; border-color: #ea4788; border-style: solid; border-width: 10px 20px;">Contact No. : ' . $mobile . '</a>
                                    </td>
                                </tr>
                                <tr
                                    style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block"
                                        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px; text-align:center"
                                        valign="top">
                                        <a href="javascript:void(0)" class="btn-primary"
                                            style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #ea4788; margin: 0; border-color: #ea4788; border-style: solid; border-width: 10px 20px;">Company Name : ' . $cname . '</a>
                                    </td>
                                </tr>
                                <tr
                                    style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block"
                                        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px; text-align:center"
                                        valign="top">
                                        <a href="javascript:void(0)" class="btn-primary"
                                            style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #ea4788; margin: 0; border-color: #ea4788; border-style: solid; border-width: 10px 20px;">Query Message : ' . $message . '</a>
                                    </td>
                                </tr>
                                <tr
                                    style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block"
                                        style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;"
                                        valign="top">
                                        Thanks & Regards<br>
                                       
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td style="font-family: Arial,Helvetica Neue,Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;"
            valign="top"></td>
    </tr>
</table>
</body>';
// ``$data;//"<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";
// if (!$mail->send()) {
// } else {
//     $mes = "Some Error Occured Please Help us by provide your details again";
// }
$mail->send();
// if (!$mail->send()) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// } else {
//     // echo "Message has been sent successfully";
// }
$mes = "Details Submitted, Our Team will reach you in sometime";

}
else {
    $mes = 'Invalid Values';

}
header("Location: index.html?message=" . $mes);
?>