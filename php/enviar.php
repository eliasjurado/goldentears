<?php 
	$destino="contact.goldentearsrecords@gmail.com";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$content="Name: ".$name."\nEmail: ".$email."\nSubject: ".$subject."\nMessage: ".$message;
	if (mail($destino, "Webmail Goldentears Records: ".$subject, $content)) {
		echo '<script language="javascript">alert("Thanks for your interest!");</script>';
		echo '<script language="javascript">location.href ="http://goldentearsrecords.pe.hu/";</script>';		
	}
	else{
		echo '<script language="javascript">alert("Error sending message!");</script>';
		echo '<script language="javascript">location.href ="http://goldentearsrecords.pe.hu/";</script>';		
	}
 ?>