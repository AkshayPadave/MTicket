<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
$name = $_POST['name'];
$card = $_POST['cno'];
$EM  = $_POST['Em'];
$EY = $_POST['Ey'];
$Cvv = $_POST['Cvv'];
$Pin = $_POST['Pin'];
$sql_transactions="INSERT INTO transactions(email,source,dest,Name,Class,Type,NoOfpass,card_no,expmonth,expyear,cvv,pin,Amt,Route)VALUES ('".$_SESSION['email']."','".$_SESSION['source']."','".$_SESSION['dest']."','" . $_SESSION['name'] . "','".$_SESSION['Class']."' ,'".$_SESSION['Type']."','".$_SESSION['NoOfpass']."','$card', '$EM', '$EY', '$Cvv', '$Pin', '".$_SESSION['final']."','".$_SESSION['Route']."')";

if(mysqli_query($connect, $sql_transactions) == true)
{
echo "<h1><center>Your Ticket has been sucessfully booked<center></h1><br>";

}
header("location: bookdone.php");

/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';






//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging

$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'email-smtp.us-east-1.amazonaws.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
// I tried PORT 25, 465 too
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "AKIATZTO6KPEQGIX3OGG";

//Password to use for SMTP authentication
$mail->Password = "BE4/ch1/NPC/WDO0DGaSKT39jT8c85Bx7Rn6iHM5OtdR";

//Set who the message is to be sent from
$mail->setFrom('prajwalsutar0@gmail.com', 'M-Ticket');

//Set who the message is to be sent to
$mail->addAddress($_SESSION[email], 'receiver');

//Set the subject line
$mail->Subject = 'Ticket Booking Details';


$mail->Body = "You  Have Sucessfully Booked Ticket For $_SESSION[source] to $_SESSION[dest]  , Head on to mticket.com for more information";
//Replace the plain text body with one created manually
$mail->AltBody = "You  Have Sucessfully Booked Ticket For $_SESSION[source] to $_SESSION[source]";

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}




require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

$params = array(
    'credentials' => array(
        'key' => 'AKIATZTO6KPEVG2N7SFP',
        'secret' => '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',
    ),
  'region'  => 'eu-west-1',
    'version' => 'latest',
);
$sns = new \Aws\Sns\SnsClient($params);

$args = array(
    "MessageAttributes" => [
                'AWS.SNS.SMS.SenderID' => [
                    'DataType' => 'String',
                    'StringValue' => 'sms'
                ],
                'AWS.SNS.SMS.SMSType' => [
                    'DataType' => 'String',
                    'StringValue' => 'Transactional'
                ]
            ],
    "Message" => "You  Have Sucessfully Booked Ticket For $_SESSION[source] to $_SESSION[dest]  , Head on to mticket.com for more information",
    "PhoneNumber" => "+918286655443"
);


$result = $sns->publish($args);
echo "<pre>";
var_dump($result);
echo "</pre>";
*/
exit;



?>