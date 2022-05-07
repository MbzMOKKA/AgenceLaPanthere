<?php	
	if(empty($_POST['customer_name']) && strlen($_POST['customer_name']) == 0 || empty($_POST['customer_email']) && strlen($_POST['customer_email']) == 0 || empty($_POST['customer_source']) && strlen($_POST['customer_source']) == 0 || empty($_POST['customer_project']) && strlen($_POST['customer_project']) == 0)
	{
		return false;
	}
	
	$name = $_POST['customer_name'];
	$email = $_POST['customer_email'];
	$source = $_POST['customer_source'];
	$message = $_POST['customer_project'];
	
	$to = 'contact@agencelapanthere.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Nouveau contact de client";
	$email_body = "Un client nous à contacter, voici ces réponses au formulaire : \n\n".
				  "Nom: $name \nEmail: $email \nDécouverte: $source \nProjet: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $source";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>