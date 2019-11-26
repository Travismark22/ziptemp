<?php

if($_POST){
  if($_POST['contactsubmit']){	
    $honeypot = $_POST['firstnamep'];	 
    if ( !empty($honeypot) ) {
      echo 'Invalid Form Submission';
    } else {
      require 'class/SMTPMailer.php';
      $mail = new SMTPMailer();

      $mail->addTo('scott@apacattractions.com');
	  $mail->addCc('travismark22@gmail.com');
      
      $mail->Subject('Contact message from ZipCity');
      $mail->Body('<h3>Mail message</h3>
        <b>Your name:</b> '.$_POST['name'].'<br />
		<b>Email:</b> '.$_POST['email'].'<br />
		<b>Message:</b> '.$_POST['message'].'
	    '
      );

      if ($mail->Send()) {
	    header("Location: /?contact=1"); 
	  }	
      else { 
		header("Location: /?contact=0"); 
	  }	
    }
  }	
}