<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/metro-village-apartments/inc/akismet.class.php';

// PREVENT DIRECT ACCESS TO THANK YOU PAGE
if ( !isset( $_POST['form-fname']) || !isset( $_POST['form-lname']) || !isset( $_POST['form-email']) || !isset( $_POST['form-phone']) ) {
	echo 'This page cannot be accessed directly.';
	exit();
}

if ( empty( $_POST['form-fname']) || !isset( $_POST['form-lname']) || !isset( $_POST['form-email']) || !isset( $_POST['form-phone']) ) {
	echo 'You neglected to fill out required form fields.';
	exit();
}
	
// HIDDEN HONEYPOT
$spa = $_POST["honey"];
	
if (!empty($spa) && !($spa == "9" || $spa == "nine")) {
	echo "We're sorry, but you appear to be a spambot";
    exit ();
}
	
if($_SERVER['REQUEST_METHOD']=="POST") {
	$WordPressAPIKey = 'c32918c5e5bc';
	$MyBlogURL = 'http://www.metrovillageapartments.com/';
	
	$recipients=$_POST["recipients"];
	$to = str_replace("_AT_","@",$recipients);
	//$to='chris@mm4solutions.com';
	
	$first_name=strip_tags($_POST["form-fname"]);
	$last_name=strip_tags($_POST["form-lname"]);
	$phone=$_POST["form-phone"];
	$email=strip_tags($_POST["form-email"]);
	$comments=strip_tags($_POST["form-comments"]);
	
	$comment = array(
		'author' => $first_name . $last_name,
		'email' => $email,
		'website' => $MyBlogURL,
		'body' => $comments
	);
	 
	$akismet = new Akismet($MyBlogURL, $WordPressAPIKey, $comment);
	
	$from="donotreply@metrovillageapartments.com";
	$subject="Metro Village Apartments Website Contact Form Submission";
	$message="First Name: ".$first_name."<br>"."Last Name: ".$last_name."<br>"."Phone: ".$phone."<br>". "Email: ".$email."<br>"."Comments: ".$comments;
	$header='From: '.$from."\r\n".'Reply-To: '.$from."\r\n".'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charser=iso-8859-1'."\r\n".'X-Mailer: PHP/'.phpversion();
	
	if ($akismet->isSpam()) {
		//-- THIS IS SPAM, YO!!!!!
		echo 'We\'re sorry, but this appears to be spam.';
		exit();
	} else {
		@mail($to,$subject,$message,$header);
	}
}
?>