<?php

if($_POST){
  if($_POST['newslettersubmit']){	
    $honeypot = $_POST['firstnamep'];	 
    if ( !empty($honeypot) ) {
      echo 'Invalid Form Submission';
    } else {
      require 'class/SMTPMailer.php';
      $mail = new SMTPMailer();

      $mail->addTo('scott@apacattractions.com');
	  $mail->addCc('travismark22@gmail.com');
      
      $mail->Subject('Subscription from ZipCity');
      $mail->Body('<h3>Mail message</h3>
        Email: <b>'.$_POST['email'].'</b>'
      );

      if ($mail->Send()) {
	    header("Location: /?newsletter=1"); 
	  }	
      else { 
		header("Location: /?newsletter=0"); 
	  }	
    }
  }	
}