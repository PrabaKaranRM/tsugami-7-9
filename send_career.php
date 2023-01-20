<?php
if (isset($_POST['txtname']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    ob_start();    
    require 'class.phpmailer.php';
    $mail = new PHPMailer;


 
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $tmp_file_name    = $_FILES['resumefile']['tmp_name'];
    $file_name        = $_FILES['resumefile']['name'];  // get the name of the file
    $file_size        = $_FILES['resumefile']['size'];  // get size of the file for size validation
    $file_type        = $_FILES['resumefile']['type'];  // get type of the file
    $file_error       = $_FILES['resumefile']['error'];
    
    /*$headers = "Reply-To: ".$email."\r\n";
    $headers .= "From: ".$name." <".$email.">\r\n";
    $headers .= "BCC: alex@clasticon.com,manoj@clasticon.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    */
    $subject = "Tsugami - Send Enquiry";
    


    $htmlContent = "<table width='500' border='0' cellspacing='0' cellpadding='0' align='center'>
  <tr bgcolor='#000' align='center'>
  <td><img src='http://tsugami.co.in/images/tsugami-logo.png'/></td>
  </tr>
  <tr>
  <td height='1' style='background:#CCC;line-height:1px;font-size:1px;'>&nbsp;</td>
  </tr>
  <tr>
  <td style='background:#f8f7f5;'>
  <table width='450' border='0' cellspacing='0' cellpadding='0' align='center' style='padding:12px 0'>
  
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Name</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $name . "</div></td>
  </tr>
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Email ID</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $email . "</div></td>
  </tr> 
  </table>
  </td>
  </tr>
  <tr>
  <td height='1' style='background:#CCC;line-height:1px;font-size:1px;'>&nbsp;</td>
  </tr>  
  </table>";

  $to = 'sam@tsugami.co.in';
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'info@tsugami.co.in';                 // SMTP username
  $mail->Password = 'Ifo#@2011';                           // SMTP password
  $mail->SMTPSecure = 'STARTTLS';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to
  
 // $mail->setFrom('info@tsugami.co.in', 'Info');  
  $mail->addAddress($to);               // Name is optional
  $mail->addReplyTo($email, $name);
  $mail->addBCC('alex@clasticon.com','rajkumar@clasticon.com');
  $mail->From = "info@tsugami.co.in";
  $mail->FromName = 'Info';
  $mail->addAttachment($tmp_file_name);         // Add attachments
  // /$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
  $mail->isHTML(true);                                  // Set email format to HTML
  
  $mail->Subject = $subject;
  $mail->Body    = $htmlContent;
  // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
  if(!$mail->send()) {
     /* echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;*/
      header('location:careers.html');
  } else {
    header('location:thank_u.php');
      // echo 'Message has been sent';
  }

}


/*
exit();



 
 
// Header for sender info 
$headers = "From: $name"." <".$email.">";
  
// Boundary  
$semi_rand = md5(time());  
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
// Headers for attachment  
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
$headers .= "BCC: alex@clasticon.com,rajkumar@clasticon.com\r\n";
$headers .= "Reply-To: ".$email."\r\n";


// Multipart boundary  
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
 
// Preparing attachment 
if(!empty($tmp_file_name) > 0){ 
    if(is_file($file_name)){ 
        $message .= "--{$mime_boundary}\n"; 
        $fp =    @fopen($tmp_file_name,"rb"); 
        $data =  @fread($fp,filesize($tmp_file_name)); 
 
        @fclose($fp); 
        $data = chunk_split(base64_encode($data)); 
        $message .= "Content-Type: application/octet-stream; name=\"".$file_name."\"\n" .  
        "Content-Description: ".$file_name."\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"".$file_name."\"; size=".$file_size.";\n" .  
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
    } 
} 
$message .= "--{$mime_boundary}--"; 
//$returnpath = "-f" . $from; 
 

   if ( mail($to,$subject,$message,$headers) ) {
     header('location:thank_u.php');
   }

} else {
    header('location:contact-us.html');
}*/
