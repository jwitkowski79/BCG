<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Best desingers in Buffalo" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- this meta data alows mobile css to be applied on iphone-->
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<title>BCG</title>

<!-- PC WEb -->
<link href="BCG-Screen.css" rel="stylesheet" type="text/css" />




<!-- This is to specify icons for iphone and Android -->
<!-- For third-generation iPad with high-resolution Retina display: -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
<!-- For iPhone with high-resolution Retina display: -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
<!-- For first- and second-generation iPad: -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
</head>

<body>
<?php if(isset($_POST['email'])) {           // EDIT THE 2 LINES BELOW AS REQUIRED     $email_to = "aaron.damiano@gmail.com";     $email_subject = "Your email subject line";                 function died($error) {         // your error code can go here         echo "We are very sorry, but there were error(s) found with the form you submitted. ";         echo "These errors appear below.<br /><br />";         echo $error."<br /><br />";         echo "Please go back and fix these errors.<br /><br />";         die();     }           // validation expected data exists     if(!isset($_POST['first_name']) ||         !isset($_POST['last_name']) ||         !isset($_POST['email']) ||         !isset($_POST['telephone']) ||         !isset($_POST['comments'])) {         died('We are sorry, but there appears to be a problem with the form you submitted.');            }           $first_name = $_POST['first_name']; // required     $last_name = $_POST['last_name']; // required     $email_from = $_POST['email']; // required     $telephone = $_POST['telephone']; // not required     $comments = $_POST['comments']; // required           $error_message = "";     $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';   if(!preg_match($email_exp,$email_from)) {     $error_message .= 'The Email Address you entered does not appear to be valid.<br />';   }     $string_exp = "/^[A-Za-z .'-]+$/";   if(!preg_match($string_exp,$first_name)) {     $error_message .= 'The First Name you entered does not appear to be valid.<br />';   }   if(!preg_match($string_exp,$last_name)) {     $error_message .= 'The Last Name you entered does not appear to be valid.<br />';   }   if(strlen($comments) < 2) {     $error_message .= 'The Comments you entered do not appear to be valid.<br />';   }   if(strlen($error_message) > 0) {     died($error_message);   }     $email_message = "Form details below.\n\n";           function clean_string($string) {       $bad = array("content-type","bcc:","to:","cc:","href");       return str_replace($bad,"",$string);     }           $email_message .= "First Name: ".clean_string($first_name)."\n";     $email_message .= "Last Name: ".clean_string($last_name)."\n";     $email_message .= "Email: ".clean_string($email_from)."\n";     $email_message .= "Telephone: ".clean_string($telephone)."\n";     $email_message .= "Comments: ".clean_string($comments)."\n";             // create email headers $headers = 'From: '.$email_from."\r\n". 'Reply-To: '.$email_from."\r\n" . 'X-Mailer: PHP/' . phpversion(); @mail($email_to, $email_subject, $email_message, $headers);   ?>   <!-- include your own success html here -->     

<div class="wrapper"><img src="images/top.gif" name="topImg" width="970" height="6" id="topImg" />
  <!--this is used to make the container shaddow -->
<div class="container">
  <div class="header"><a href="http://www.buffalocreativegroup.com"><img src="images/BCG_logo_web.jpg" alt="Buffalo Creative Group" name="Insert_logo" width="416" height="128" id="Insert_logo" style="display:block;" /></a> 
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="index.html">About Us</a></li>
      <li><a href="portfolios.html">Portfolio</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
    <h1><!-- end .sidebar1 --></h1>
  </div>
  <div class="content"><!-- end .content -->
    <h3>&nbsp;</h3>
    <h3>Thank you for your comment. <br />
      Someone will be in touch soon.
    </h3>
  </div>
  <div class="footer">
    <p>&copy;2012 Buffalo Creative group</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
<!-- end .wrapper --> </div><?php } ?> 
</body>
</html>
