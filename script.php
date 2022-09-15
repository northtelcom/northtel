<?php
if (!empty($_GET['name']) && !empty($_GET['email'])) {
    
    
    $name          = $_GET['name'];    
    $email        = $_GET['email'];  	
    $phone        = $_GET['phone']; 
    $message        = $_GET['message']; 
 
    
    $headers =    "From: $email";
    $headers     = "Reply-To: $email\r\n";
    $headers    .= "Return-Path: syedein@gmail.com\r\n";
    $headers 	.= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers    .= "CC: syedein@gmail.com\r\n";
    $headers    .= "BCC: syedein@gmail.com\r\n";
    $subject     = "Website: $email";    
    $mail                = "
    Name:             ".$name."    
    Email:            ".$email."        
    Phone:            ".$phone."; 
    Query:            ".$message."";
  
  mail("syedein@gmail.com", $subject, $mail, $headers);

      //readfile("thank-you.html");    
    //exit;
echo "<h3 style='color:green;padding:0px;    font-size: 20px;
    text-align: center;'>Thank you! We have received your request</h3>";
}else{
    //readfile("error.html");}
    echo "Something Went Wrong Please try again";
}
?>