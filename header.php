<?php

//configs
$email_to ='jwitkowski79@gmail.com'; //put your email address here
$email_subject_prefix ='Buffalo Creative Group contact form: '; //put the email sibject line prefix here
$email_from ='contact@buffalocreativegroup.com'; //put the email address that this form will be sent from
$email_from_nice ='Contact Form submission'; //put in the 'nice' name for the email sender

//If the form is submitted
if(isset($_POST['submit'])) {

        //Check to make sure that the name field is not empty
        if(trim($_POST['contactname']) == '') {
                $hasError = true;
        } else {
                $name = trim($_POST['contactname']);
        }
        
        if(trim($_POST['phone']) == '') {
                $hasError = true;
        } else {
                $phone = trim($_POST['phone']);
        }
        
           if(trim($_POST['find']) == '') {
                $hasError = true;
        } else {
                $find = trim($_POST['find']);
        }


       

        //Check to make sure sure that a valid email address is submitted
        if(trim($_POST['email']) == '')  {
                $hasError = true;
        } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
                $hasError = true;
        } else {
                $email = trim($_POST['email']);
        }

        //Check to make sure comments were entered
        if(trim($_POST['message']) == '') {
                $hasError = true;
        } else {
                if(function_exists('stripslashes')) {
                        $comments = stripslashes(trim($_POST['message']));
                } else {
                        $comments = trim($_POST['message']);
                }
        }

        //Check to make sure comments were entered
        if($_POST['spam_prevention_test']) {
                $isSpam = true;
        }

        //If there is no error, send the email
        if(!isset($hasError) AND !isset($isSpam)) {
                $emailTo = $email_to; //Put your own email address here
                $body = "Name: $name \n\nEmail: $email \n\nphone: $phone \n\nfind: $find \n\nComments:\n $comments";
                $headers = 'From: '.$email_from_nice.' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email;

                mail($emailTo, $subject, $body, $headers);
                $emailSent = true;
        }
}
?>
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

<!--links to jquery for testimonials and portfolio rotations-->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
        $("#contactform").validate();
});
</script>

<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.72.js"></script>
<script src="jquery.tabify.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
			// <![CDATA[
				
			$(document).ready(function () {
				$('#menu').tabify();
				
			});
					
			// ]]>
		</script>

<!--code for testimonial slideshow-->
<script type="text/javascript">
// see http://jquery.malsup.com/cycle/ for usage
$(function() {
$('#slideshow') 
.cycle({ 
    fx:     'fade', 
    speed:  1000, 
    timeout: 9000, 
    random: 1,
    pause: 1
});
});

$(function() {
$('.slideshow2') 
.cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 0, 
    next:   '.next2', 
    prev:   '.prev2' 
});
});

$(function() {
$('.slideshow3') 
.cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 0, 
    next:   '.next3', 
    prev:   '.prev3' 
});
});

$(function() {
$('.slideshow4') 
.cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 0, 
    next:   '.next4', 
    prev:   '.prev4' 
});
});

$(function() {
$('.slideshow5') 
.cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 0, 
    next:   '.next5', 
    prev:   '.prev5' 
});
});

$(function() {
$('.slideshow6') 
.cycle({ 
    fx:     'fade', 
    speed:  'fast', 
    timeout: 0, 
    next:   '.next6', 
    prev:   '.prev6' 
});
});

</script>
<script type="text/javascript"> 
  $("#usual1 ul").idTabs(); 
</script>
<link rel="stylesheet" href="colorbox.css" />
<script src="jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				
				$(".youtube").colorbox({iframe:true, innerWidth:480, innerHeight:360});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
</head>

<body>
<div class="wrapper"><img src="images/top.gif" name="topImg" width="970" height="6" id="topImg" />
  <!--this is used to make the container shaddow -->
<div class="container">
  <div class="header">
  <a href="http://www.buffalocreativegroup.com"><img src="images/BCG_logo_web.jpg" alt="Buffalo Creative Group" name="Insert_logo" width="416" height="127" id="Insert_logo" style="display:block;" /></a> 
  <ul class="headerBullets">
  	<li>Marketing Solutions
  		<div><span class="hilight">Marketing Solutions:</span> Effective ways to insure visibility and prominence in your field, setting you apart from your competition</div>
  	</li>
  	<li>Brand Identity
  	<div>
  	<span class="hilight">Brand Identity:</span> A family of visual elements that help portray a message about who you are in a consistent and professional manner
  	</div>
  	</li>
  	<li>Social Media Strategy
  	<div>
  	<span class="hilight">Social Media Strategy:</span> Choosing to engage in outlets such as Facebook, Twitter or LinkedIn as part of your marketing plan will help build strong relationships and widen your customer base
  	</div>
  	</li>
  	<li>Multi-Media Design
  	<div>
  	<span class="hilight">Multi-Media Design:</span> Using a variety of web and mobile-based mediums to share your brand message
  	</div>
  	</li>
  </ul>
    <!-- end .header --></div>