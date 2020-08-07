<?php	
	if(empty($_POST['name_38150']) && strlen($_POST['name_38150']) == 0 || empty($_POST['email_38150']) && strlen($_POST['email_38150']) == 0 || empty($_POST['message_38150']) && strlen($_POST['message_38150']) == 0)
	{
		return false;
	}
	
	$name_38150 = $_POST['name_38150'];
	$email_38150 = $_POST['email_38150'];
	$message_38150 = $_POST['message_38150'];
	$optin_38150 = $_POST['optin_38150'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_38150: $name_38150 \nEmail_38150: $email_38150 \nMessage_38150: $message_38150 \nOptin_38150: $optin_38150 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_38150";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>