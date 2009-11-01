<!doctype HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Registration</title>
</head>
<body>
	<?php
		$mysql_host = "localhost";
		$mysql_user = "wwnc";
		$mysql_pass = "c0nf1r1nc1";
		$mysql_bdd = "wwnc_newtontalk_net";
		
		/* connection avec MySQL */
		@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die("Impossible de se connecter ˆ mysql");
		@mysql_select_db($mysql_bdd) or die("Impossible de se connecter ˆ la base de donnŽes '$mysql_bdd'");
		$table = "registration";

		// VŽrification que j'ai une commande.
		switch ($HTTP_POST_VARS['cmd'])
		{
			case "add":
				$firstname = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["firstname"] );
				$lastname = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["lastname"] );
				$country = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["country"] );
				$url = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["url"] );
				$email = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["email"] );
				$password = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["password"] );
				$confidence = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["confidence"] );
				$query = "INSERT INTO $table(fstname,lstname,country,url,email,password,confidence) "
				. "VALUES( \"" . $firstname
				. "\", \"" . $lastname
				. "\", \"" . $country
				. "\", \"" . $url
				. "\", \"" . $email
				. "\", \"" . $password
				. "\", " . $confidence
				. ")";

				// Gestion du code HTML.
				$query = ereg_replace ( "<", "&lt;", $query );
				$query = ereg_replace ( ">", "&gt;", $query );

				$result = @mysql_query( $query );
				if (mysql_errno() == 0)
				{
					?>

		<p align="center">Your registration has been saved. Thank you. <a href="../">Back</a></p>					<?php

				} else {
					$errStr = mysql_error() . " [" . mysql_errno() . "]. " . $query;
					?>

		<p align="center"><b>An SQL error occurred (<?php echo $errStr ?>)</b>. <a href="../">Back</a></p>

					<?php
				}
			break;
			
			case "update":
				// Vérification du mot de passe.
				$password = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["password"] );
				$password = ereg_replace ( "<", "&lt;", $password );
				$password = ereg_replace ( ">", "&gt;", $password );
				$id = $HTTP_POST_VARS["id"];
				$query = "SELECT * from $table where id=$id";
				$result = @mysql_query( $query );
				if (mysql_errno() == 0)
				{
					$val = mysql_fetch_array($result);
					if ($val["password"] != $password) {
						?>
							<p align="center"><b>Invalid password. Please click on back and retry. If you forgot your password, please drop us a line.</b></p>
						<?php
					} else {
						$country = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["country"] );
						$url = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["url"] );
						$email = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["email"] );
						$confidence = ereg_replace( '"', "&quot;", $HTTP_POST_VARS["confidence"] );
						if ($email == "")
						{
							$email = $val['email'];
						}
		
						$query = "UPDATE $table "
						. "set country=\"" . $country
						. "\", url=\"" . $url
						. "\", email=\"" . $email
						. "\", confidence=" . $confidence
						. " where id=" . $id;

						$result = @mysql_query( $query );
						if (mysql_errno() == 0)
						{
	?>
		<p align="center">Your registration data has been updated. Thank you. <a href="../">Back</a></p>
	<?php
						} else {
							$errStr = mysql_error() . " [" . mysql_errno() . "]. " . $query;
	?>
		
				<p align="center"><b>An SQL error occurred (<?php echo $errStr ?>)</b>. <a href="../">Back</a></p>
		
	<?php
						}
					} // mot de passe
				} else {
					$errStr = mysql_error() . " [" . mysql_errno() . "]. " . $query;
	?>
		
				<p align="center"><b>An SQL error occurred (<?php echo $errStr ?>)</b>. <a href="../">Back</a></p>

	<?php
				}
			break;
			
		default:
	?>
		<p align="center"><b>Unknown command</b></p>
	<?php
		}
		@mysql_close();
	?>
	
</body>
</html>
