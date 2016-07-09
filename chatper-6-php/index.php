<?php

	$emailTo = "tsabbasi@icloud.com";

	$subject = "Woohoo! I sent an email!";

	$body = "I think coding is so awesome. :)";

	$headers = "From: tuba@mywebnapp.com";

	if (mail($emailTo, $subject, $body, $headers)) {

		echo "The email was sent successfully!";

	} else {

		echo "The email could not be sent.";

	}

?>
