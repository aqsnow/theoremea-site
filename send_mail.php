<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$msg = $_POST['message'];
$lname = $_POST['lname'];
$city = $_POST['city'];

if($fname!="" && $email!="" && $mobile!="" && $lname!="" && $city!=""){


  $message = "<h3>Theorom Enquiry</h3>";
  $message .= "<table border='1' rules='all' style='font-size:13px;clor:#666;' cellpadding='5' cellspacing='5'>";
  $message .= "<tr><td>First Name:</td><td>".$fname."</td></tr>";
  $message .= "<tr><td>Last Name:</td><td>".$lname."</td></tr>";
  $message .= "<tr><td>Phone No:</td><td>".$mobile."</td></tr>";
  $message .= "<tr><td>Email Id:</td><td>".$email."</td></tr>";
  $message .= "<tr><td>City:</td><td>".$city."</td></tr>";    
  $message .= "<tr><td>Message :</td><td>".$msg."</td></tr></table>";  
  
  $subject = "Theorom Enquiry";
  $to = "Info@theoremea.co.uk";


// // Always set content-type when sending HTML email
 $headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// // More headers
$headers .= 'From: Info@theoremea.co.uk' . "\r\n";


 mail($to,$subject,$message,$headers);
}else{
  echo 'Please Fill all data';
}


?>