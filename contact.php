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
   	<div><p>"Buffalo Creative Group’s work is imaginative and they give you exactly what you require to make your business and products stand out."</p> <p class="credit">- Michele Hurley, PT <br/>  Chief Executive Officer<br/>  Move With Me Physical Therapy</p></div><!--testimonial one-->
   	
   	<div><p>"Buffalo Creative Group provided an innovative and memorable logo design for our Real Estate user group. They produced a number of creative ideas, which captured the essence of our group, for us to choose from."</p> <p class="credit">Dave Hyzy <br/>Director of Information Technology<br/>Benderson Development Company</p></div><!--testimonial two-->
   	
   	 <div><p>"We truly appreciate the time and effort Buffalo Creative Group took to provide us with high-quality images in perfect accordance with the numerous details we asked for."</p> <p class="credit">Meg Lee<br/>Risk Management MDP<br/>M&T Bank</p></div><!--testimonial three-->
   	 
   	 <div><p>"It's like I have an extension of the marketing department. They are good listeners and their work always hits the target."</p> <p class="credit">Karen Carey<br/>Marketing Manager<br/>Great Lakes Orthodontics</p></div><!--testimonial four-->
   	 
   	 <div><p>"Buffalo Creative Group creates exactly what I need and always exceeds my expectations with beautiful designs that embody what I’m trying to  express to my clients!"</p> <p class="credit">Michele Hurley, PT<br/>Chief Executive Officer<br/>  Move With Me Physical Therapy</p></div><!--testimonial five-->
   	 
   	 <div><p>"I just saw the latest print - it’s absolutely exquisite - thank you thank you thank you. The brochure is so beautiful and inspiring...wholly due to your design work. Thank you so much"</p> <p class="credit">Megan Weaver<br/>Co-Founder<br/>  Revitalize Buffalo</p></div><!--testimonial six-->
   	 
   
   <div><p>"Thanks again for your help. I truly appreciate your willingness to be flexible around my needs and desires. I’m honored and pleased to provide a reference for the wonderful work that you have done."</p> <p class="credit">Sandy Simon Kappelmann<br/>Owner<br/>  Zesty Life Coaching</p></div><!--testimonial seven-->
   
     <div><p>"Delivering on time and under budget, I would recommend Buffalo Creative Group to anyone looking for a uniquely creative collaboration."</p> <p class="credit">Dave Hyzy<br/>Director of Information Technology<br/>Benderson Development Company</p></div><!--testimonial eight-->
     
     <div><p>"LOVE the business cards. They are so cute! Everyone who has seen them is raving. Thanks again!"</p> <p class="credit">Katie Kahn<br/>Owner<br/>Butter Me Up Bakery</p></div><!--testimonial nine-->
     
     <div><p>"We are very impressed by your contributions and your dedication to providing graphics in a timely manner, despite our last minute requests. Thank you!"</p> <p class="credit">Meg Lee<br/>Risk Management MDP<br/>M&T Bank</p></div><!--testimonial ten-->
     
     <div><p>"They are more than designers...they are business partners. I know that I can rely on them to take ownership of any project and learn what is needed to understand and successfully execute what I am trying to achieve."</p> <p class="credit">Karen Carey<br/>Marketing Manager<br/>Great Lakes Orthodontics</p></div><!--testimonial eleven-->
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
