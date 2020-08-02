<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["firstname"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
	$surname = strip_tags(trim($_POST["surname"]));
    $surname = str_replace(array("\r","\n"),array(" "," "),$surname);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    // Check the data.
    // ?success=-1#form dont delete it
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://andreashnygaard.com/andreas-haug-nygaard-contact.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "andreas.haug.nygaard@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
	$email_content .= "Surname: $surname\n";
    $email_content .= "Email: $email\n\n";
	$email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers. $email_headers = "From: $name <$email>";
    $email_headers = "From: $name $surname $email $phone $message";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the contact.php page with success code
    header("Location: http://andreashnygaard.com/andreas-haug-nygaard-contact.php?success=1#form");

?>