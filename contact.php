<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <meta charset="utf-8">
        <title>Contact | Rehad Khan - Email, Message, Facebook</title>
        
        <meta name="description" content="Contact Rehad Khan via email, message Rehad Khan using the contact form or find Rehad Khan on Facebook.">
        
    <meta name="keywords" content="Contact, Rehad, Khan, Message, Email, Facebook">


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../Styles/contact_style.css" type="text/css">
        
    <!-- Java - CAPTCHA-->
        
<script src='https://www.google.com/recaptcha/api.js'></script>
        
</head>
    
    <!-- Header-->

 <body>
<div class="header" role="img">
    
 
    <!-- Logo-->

    <div class="logo">
        <a href="../index.html"><img src="../Images/logo.png" width="55" height="55" alt="Rehad Khan Logo"></a> 
        </div>
    

    <!-- Navigation-->

 <div class="navigation" role="navigation">
        
  <ul>                 
<li><a href="../index.html">Home</a></li>
<li><a href="../Subpages/about.html">About</a></li>
<li><a href="../Subpages/blogs.html">Blogs</a></li>
<li><a href="../Subpages/contact.php">Contact</a></li>
  </ul> 

  </div>
    

    <!-- Heading-->

   <h1> <a href="../Subpages/contact.php">Contact</a></h1>

     </div>
     

     <!-- Banner-->

    <div class="banner" role="banner">
    
  </div>    
    

  <!-- Container 1 - Contact Info-->

<div class="container" role="contentinfo"> 
    
 <h2> I'd love to hear from you...</h2>

    <p class="touch">Feel free to get in touch, do not hesitate!</p><br>
    
    <a class="email" href="mailto:rehadkhan21@gmail.com" >Email: rehadkhan21@gmail.com</a>
    
    
    <div class="icon">
         <p class="FB">Find me on Facebook</p><a href="https://www.facebook.com/rehad.khan"><img src="../Images/fb_icon.png" width="35" height="35" alt="FB Logo"></a>
    </div>
          
 </div>
     
  

     <!-- Container 2 - Contact Form--> 
    
<?php include('form_process.php'); ?>

<div class="container2"> 
    
  <form class="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">    <h3>Message me</h3>
    <h4>Contact me and I'll get back to you!</h4>
    <fieldset>
      <input placeholder="Name" type="text" name="name" value="<?= $name ?>">
    <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Email Address" type="text" name="email" value="<?= $email ?>">
   <span class="error"><?= $email_error ?></span>
   </fieldset>
    <fieldset>
      <input placeholder="Phone Number" type="text" name="phone" value="<?= $phone ?>">
 <span class="error"><?= $phone_error ?></span>
</fieldset>
    <fieldset>
      <textarea placeholder="Type Message Here...."  name="message"></textarea>
</fieldset>
      
      <div class="g-recaptcha" data-sitekey="6LeV_0oUAAAAAOVLMMvhJnfeUdhZR0k65ijNsHWP" data-theme="dark"></div>
     <span class="error"><?= $captcha_error ?></span>
     
      <fieldset>
      <button name="send" type="submit" value="Send" class="contact-send" data-submit="...Sending">Send</button>
    </fieldset>
    <div class="success"><?= $success; ?></div>
  </form>
 
</div>   
    
 <!-- Footer - FB Logo-->
     
<footer>
    <div class="icon">
      <a href="https://www.facebook.com/rehad.khan"><img src="../Images/fb_icon.png" width="35" height="35" alt="FB Logo"></a></div>
    
    </footer>
    

    </body>
</html>