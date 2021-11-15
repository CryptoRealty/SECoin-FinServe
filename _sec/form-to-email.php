<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$message1 = $_POST['id'];
$message2 = dechex($_POST['id']);
$message3 = round(deg2rad($_POST['id']), 4);
$message4 = round(($_POST['id']*deg2rad($_POST['uid'])), 4);
$message5 = round(deg2rad($_POST['uid']*0.04), 4);
$message6 = round(deg2rad($_POST['uid']*400), 4);
$message7 = round(deg2rad($_POST['uid']*30000), 4);
$message8 = $_POST['eth'];
$message9 = $_POST['btc'];
$message10 = $_POST['txn'];
$message11 = $_POST['email'];
//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'dild26@gmail.com';//<== update the email address
$email_subject = "SEC - New Form submission";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message: $message.\n".
"Welcome 			: $name.\n".
"Your ID is 		: $message1.\n".
"Block No. UID 		: $message2.\n".
"SEC in ETH 		: $message3.\n".
"GroupBV in ETH 	: $message4.\n".
"SEC in BTC 		: $message5.\n".
"SEC in USD 		: $message6.\n".
"SEC in INR 		: $message7.\n".
"ETH Address 		: $message8.\n".
"BTC Address 		: $message9.\n".
"Deposit TXN Hash	: $message10.\n".
"Your email ID is	: \n $message11".
    
$to = "dild26@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: sec.php');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 