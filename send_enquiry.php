<?php

if (isset($_POST['txtname']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

    ob_start();

    $selectarea = $_POST['selectarea'];
    $selectmachine = $_POST['selectmachine'];
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $txtcompanyname = $_POST['txtcompanyname'];
    $txtadress = $_POST['txtadress'];
    $selectcountry = $_POST['selectcountry'];
    $txtpincode = $_POST['txtpincode'];
    $txtmobileno = $_POST['txtmobileno'];
    $txtquery = $_POST['query'];
 
    
    $headers = "Reply-To: ".$email."\r\n";
    $headers .= "From: ".$name." <".$email.">\r\n";
    $headers .= "BCC: alex@clasticon.com,manoj@clasticon.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $subject = "Tsugami - Send Enquiry";
    $to = 'info@tsugami.co.in';


    $message = "<table width='500' border='0' cellspacing='0' cellpadding='0' align='center'>
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
  <td width='200'><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Area / Nature of business</div></td>
  <td width='250'><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $selectarea . "</div></td>
  </tr>
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Machine type / product</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $selectmachine . "</div></td>
  </tr>
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Name</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $name . "</div></td>
  </tr>
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Email ID</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $email . "</div></td>
  </tr>  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Company Name</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $txtcompanyname . "</div></td>
  </tr>  
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>City / State</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $txtadress . "</div></td>
  </tr>  
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Country</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $selectcountry . "</div></td>
  </tr>  
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Pin Code</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $txtpincode . "</div></td>
  </tr> 
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Mobile No</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $txtmobileno . "</div></td>
  </tr> 
  <tr>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>Comments</div></td>
  <td><div style='font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#333;padding:10px 0;'>" . $txtquery . "</div></td>
  </tr> 
  </table>
  </td>
  </tr>
  <tr>
  <td height='1' style='background:#CCC;line-height:1px;font-size:1px;'>&nbsp;</td>
  </tr>  
  </table>";

   if ( mail($to,$subject,$message,$headers) ) {
     header('location:thank_u.php');
   }

} else {
    header('location:contact.html');
}
?>