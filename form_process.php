<?php 


// define variables and set to empty values
$name_error = $email_error = $phone_error = $captcha_error = "";
$name = $email = $phone = $message = $success ="";


$public_key = "6LeV_0oUAAAAAOVLMMvhJnfeUdhZR0k65ijNsHWP";
$private_key = "6LeV_0oUAAAAAAGVxn_E4WZQEzgiLr9Ko9IQApdN";
$url = "https://www.google.com/recaptcha/api/siteverify";


//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["phone"])) {
    $phone_error = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s]?)?[\(\[\s]{0,2}?\d{3}[\)\]\s]{0,2}?\d{3}[\s]?\d{4}$/i",$phone)) {
      $phone_error = "Invalid phone number"; 
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
    
    
  if (empty($_POST['g-recaptcha-response'])) {
    $captcha_error = "Captcha is required";
  } else {
     
     
     //echo "<pre>"; print_r($_POST);echo "</pre>"; 
    
    $response_key = $_POST['g-recaptcha-response'];
    
    $response = file_get_contents($url. '?secret='.$private_key.'$response='.$response_key.'$remoteip='.$_SERVER['REMOTE_ADDR']);
    
    
    $response = json_decode($response);
    
    
    if($response->success == 1)
    {
     test_input($_POST['g-recaptcha-response']); 
    }
    
}

if($name_error == '' and $email_error == '' and $phone_error == '' and $captcha_error == ''  ){
    $message_body = '';
     unset($_POST['submit']);
     foreach ($_POST as $key => $value){
         $message_body .= "$key: $value\n";
     }
     
     $to = 'rehadkhan21@gmail.com';
     $subject = 'Contact Form Submit';
     if (mail($to, $subject, $message)){
         $success = "Message sent, thank you for contacting me!";
         $name = $email = $phone = $message = '';
     }
 }   
    }
 
     

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
