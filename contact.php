<?php include("header.php"); ?>


<style type="text/css">

.spam_prevention { display: none; }

</style>

<div class="sidebar1">
    <ul class="nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="portfolios.php">Portfolio</a></li>
      <li>Contact Us </li>
    </ul>
    <div id="slideshow">
   		<div><p>"Buffalo Creative Group’s work is imaginative and they give you exactly what you require to make your business and products stand out."</p> <p class="credit">- Michele Hurley, PT <br/>  Chief Executive Officer<br/>  Move With Me Physical Therapy</p></div><!--testimonial one-->
   	
   	<div><p>"Buffalo Creative Group provided an innovative and memorable logo design for our Real Estate user group. They produced a number of creative ideas, which captured the essence of our group, for us to choose from."</p> <p class="credit">Dave Hyzy <br/>Director of Information Technology<br/>Benderson Development Company</p></div><!--testimonial two-->
   	
   	 <div><p>"We truly appreciate the time and effort Buffalo Creative Group took to provide us with high-quality images in perfect accordance with the numerous details we asked for."</p> <p class="credit">Meg Lee<br/>Risk Management MDP<br/>M&T Bank</p></div><!--testimonial three-->
   	 
   	 <div><p>"It's like I have an extension of the marketing department. They are good listeners and their work always hits the target."</p> <p class="credit">Karen Carey<br/>Marketing Manager<br/>Great Lakes Orthodontics</p></div><!--testimonial four-->
   	 
   	 <div><p>"Buffalo Creative Group creates exactly what I need and always exceeds my expectations with beautiful designs that embody what I’m trying to  express to my clients!"</p> <p class="credit">Michele Hurley, PT<br/>Chief Executive Officer<br/>  Move With Me Physical Therapy</p></div><!--testimonial five-->
   	 
   	 <div><p>"I just saw the latest print - it’s absolutely exquisite - thank you thank you thank you. The brochure is so beautiful and inspiring...wholly due to your design work. Thank you so much"</p> <p class="credit">Megan Weaver<br/>Co-Founder<br/>  Revitalize Buffalo</p></div><!--testimonial six-->
   	 
   	 <div><p>"Your talent is amazing! Thanks so much for helping us help our "special" children. You have definitely "classed up" our event!"</p> <p class="credit">Janice R.Rockwood<br/>Co-Chair, 'Miles for Smiles' Annual Wine Tasting Event<br/>
The Women & Children's Hospital of Buffalo</p></div><!--testimonial seven-->

	<div><p>"If you're going to survive and prosper you will need help from the right kind of people. Buffalo Creative Group brings an impressive array of knowledge and skills to the table, including a broad range of marketing experience coupled with excellent design skills."</p><p class="credit">Donald Troyer<br/>Owner<br/>Print King<p></div><!--testimonial eight-->

   	<div><p>"Thanks again for your help. I truly appreciate your willingness to be flexible around my needs and desires. I’m honored and pleased to provide a reference for the wonderful work that you have done."</p> <p class="credit">Sandy Simon Kappelmann<br/>Owner<br/>  Zesty Life Coaching</p></div><!--testimonial nine-->
   
     <div><p>"Delivering on time and under budget, I would recommend Buffalo Creative Group to anyone looking for a uniquely creative collaboration."</p> <p class="credit">Dave Hyzy<br/>Director of Information Technology<br/>Benderson Development Company</p></div><!--testimonial ten-->
     
     <div><p>"LOVE the business cards. They are so cute! Everyone who has seen them is raving. Thanks again!"</p> <p class="credit">Katie Kahn<br/>Owner<br/>Butter Me Up Bakery</p></div><!--testimonial eleven-->
     
     <div><p>"We are very impressed by your contributions and your dedication to providing graphics in a timely manner, despite our last minute requests. Thank you!"</p> <p class="credit">Meg Lee<br/>Risk Management MDP<br/>M&T Bank</p></div><!--testimonial twelve-->
     
     <div><p>"They are more than designers...they are business partners. I know that I can rely on them to take ownership of any project and learn what is needed to understand and successfully execute what I am trying to achieve."</p> <p class="credit">Karen Carey<br/>Marketing Manager<br/>Great Lakes Orthodontics</p></div><!--testimonial thirteen-->
   
   </div><!--/slideshow-->

    <!-- end .sidebar1 --></div>
  <div class="content">
<h2>We would love to hear from you!</h2>
Please use the form below to send us an email.<br/>If you prefer, call or text us at 716-207-8680.





        <?php if(isset($isSpam)) { //If errors are found ?>
                <p class="error">Your message was considered spam, Please check that you did not fill in the 'If you're human leave this blank' field. Thank y
ou.</p>
        <?php } ?>
        <?php if(isset($hasError)) { //If errors are found ?>
                <p class="error">Please check if you've filled all the fields with valid information. Thank you.</p>
        <?php } ?>

        <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                <p class='thanks'><strong>Thanks for your message!</strong><br/>
            We will get back to you as soon as possible.</p>
        <?php } ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
               <em class="requiredText">All fields are required</em>
                    <label for="name">Name:
                        <input type="text" size="50" name="contactname" id="contactname" value="<?php echo $_POST['contactname']; ?>" class="required" />
                </label>

               
                        <label for="email">Email:
                        <input type="text" size="50" name="email" id="email" value="<?php echo $_POST['email']; ?>" class="required email" />
             
				</label>
              
                        <label for="phone">Phone:
                        <input type="text" size="50" name="phone" id="phone" value="<?php echo $_POST['phone']; ?>" class="required" />
                </label>
                
                        <label for="find">Where did you find us?
                        <input type="text" size="50" name="find" id="find" value="<?php echo $_POST['find']; ?>" class="required" />
</label>
                        <label for="message"><strong>Message:</strong><br/>
                        <textarea  name="message" id="message" class="required" value="<?php echo $_POST['message']; ?>"></textarea>
               </label>

                <div class="spam_prevention" id="pot">
                        <label for="message"><strong>Spam prevention test:</strong><br/>If you're human leave this blank:</label>
                        <input name="spam_prevention_test" type="text" id="spam_prevention_test" class="spam_prevention_test" value="<?php echo $_POST['spam_p
revention_test']; ?>"/>
                </div>
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
?>
            <input type="submit" value="Send Message" name="submit" class="submitMe" />
        </form>
    
<!-- end .content --></div>
<div class="clearMe"></div>
  <div class="footer">
    <p>&copy;2012 Buffalo Creative Group</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
<!-- end .wrapper --> </div>
</body>
</html>
