<?php include("header.php"); ?>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="index.php">About Us</a></li>
      <li><a href="portfolios.php">Portfolio</a></li>
      <li><a href="current_projects.php">Current Projects</a></li>
      <li>Contact Us<br />
        <br />
        <br />
        <br />
        
      </li>
    </ul>
    <div id="slideshow">
   	<div><p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum"</p> <p class="credit">first name Lastname <br/>Title<br/>Company</p></div><!--testimonial one-->
   	
   	<div><p>"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum"</p> <p class="credit">first name Lastname2 <br/>Title<br/>Company</p></div><!--testimonial one-->
   </div><!--/slideshow-->

    <!-- end .sidebar1 --></div>
  <div class="content">
  <h2>We would love to hear from you!</h2>
  716-430-5982<br/> 
  <a href="mailto:hello@buffalocreativegroup.com">hello@buffalocreativegroup.com</a>
  <form name="contactform" method="post" action="send_form_email.php"> 
    <p>&nbsp;</p>
    <table width="450px"> <tr>  <td valign="top">   <label for="first_name">First Name*</label>  </td>  <td valign="top">   <input  type="text" name="first_name" maxlength="50" size="30">  </td> </tr> <tr>  <td valign="top"">   <label for="last_name">Last Name*</label>  </td>  <td valign="top">   <input  type="text" name="last_name" maxlength="50" size="30">  </td> </tr> <tr>  <td valign="top">   <label for="email">Email Address*</label>  </td>  <td valign="top">   <input  type="text" name="email" maxlength="80" size="30">  </td> </tr> <tr>  <td valign="top">   <label for="telephone">Telephone Number</label>  </td>  <td valign="top">   <input  type="text" name="telephone" maxlength="30" size="30">  </td> </tr> <tr>  <td valign="top">   <label for="comments">Comments*</label>  </td>  <td valign="top">   <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>  </td> </tr><tr><td colspan="2" align="right">
    <!--captcha-->
    <?php

require_once('recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6LdAotUSAAAAAEWvpbPGQJMH6PD94Xhm6RJiPddT";
$privatekey = "6LdAotUSAAAAANHj6aElWAQ3rSE9dAFtrW_PbNZn";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

# was there a reCAPTCHA response?
if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                echo "You got it!";
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
        }
}
echo recaptcha_get_html($publickey, $error);
?></td></tr> <tr>  <td colspan="2" style="text-align:center"><input name="submit" type="submit" id="submit" value="Submit" "mailto:" leslie@buffalocreativegroup.com"></td> </tr> </table> </form> 


<!-- end .content --></div>
  <div class="footer">
    <p>&copy;2012 Buffalo Creative Group</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
<!-- end .wrapper --> </div>
</body>
</html>
