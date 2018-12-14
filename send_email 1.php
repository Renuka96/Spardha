<HTML>
<HEAD>
</HEAD>
<BODY>
<CENTER>
<h2>APSSDC Email Code</h2><br>
<?php

  require_once('email/class.phpmailer.php');
  //include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
		
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "ebookexpress05";  // GMAIL username
  $mail->Password   = "EbookXpress";            // GMAIL password

  $mail->SetFrom('ebookexpress05@gmail.com', 'EBOOK XPRESS'); // Change the name as you want
  $mail->Subject    = "EBOOK XPRESS REGISTRATION";
  $mail->Body = "Thank You for showing interest into EBOOK XPRESS.\n Your are one Step ahead for getting registered into EBOOK XPRESS";
  $mail->AddAddress("trirumalasubhashini@gmail.com");

  $mail->Send();

  echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	  

  ?>
</BODY>
</HTML>
