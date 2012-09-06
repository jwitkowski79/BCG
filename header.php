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
  	<span class="hilight">Social Media Strategy:</span> Choosing to engage in outlets such as Facebook, Twitter or Linked In as part of your marketing plan will help build strong relationships and widen your customer base
  	</div>
  	</li>
  	<li>Multi-Media Design
  	<div>
  	<span class="hilight">Multi-Media Design:</span> Using a variety of web and mobile-based mediums to share your brand message
  	</div>
  	</li>
  </ul>
    <!-- end .header --></div>