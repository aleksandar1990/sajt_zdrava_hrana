<html>
	<head> 
		<title> Obrada podataka za kontakt </title>
	</head>

	<body>
		<?php

		/* tekstualne kontrole */
		$mail=$_GET['email'];
		$ime=$_GET['subject'];
		$poruka=$_GET['message'];
		$mojmejl="mi09036@alas.matf.bg.ac.rs";

		/* slanje poruke na moj mail */
		mail($mojmejl, "poruka sa sajta zdrave hrane", $poruka, $mail);
		
		// redirekcija na stranicu kontakt
		header( 'Location: http://www.krondesign.com/mi09036/kontakt.html' );

		?>


		
	</body>
</html>
