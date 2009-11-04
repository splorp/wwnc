<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<title>Worldwide Newton Conference 2006 : Registration Status</title>
		<link rel="icon" href="/favicon.ico" type="image/ico" />
		<link rel="stylesheet" type="text/css" href="/includes/wwnc_001.css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="http://wwnc.newtontalk.net/index.xml" />
		<link rel="alternate" type="application/atom+xml" title="Atom" href="http://wwnc.newtontalk.net/atom.xml" />
	</head>

	<body>
		<div id="container">
			<div id="header">
				<a href="/"><img src="/image/wwnc-header2006.jpg" alt="Worldwide Newton Conference - San Francisco, California - January 2006" width="630" height="180" border="0" /></a>
			</div>
			
			<div id="content">
				<div class="chunk">

	<?php
		$mysql_host = "localhost";
		$mysql_user = "wwnc";
		$mysql_pass = "c0nf1r1nc1";
		$mysql_bdd = "wwnc_newtontalk_net";
		
		/* connection avec MySQL */
		@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die("Cannot connect to mysql");
		@mysql_select_db($mysql_bdd) or die("Cannot connect to database '$mysql_bdd'");
		$table = "registration";

		// Vérification que j'ai une commande.
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

		<h1>Thank you.</h1>
		<p>Your registration information has been saved.</p>
		<p>Don't forget to pay your <a href="/registration/payment/">registration fee</a>.
		<p>You may edit or update your registration information by clicking on the 'Update' link after your name on the <a href="/registration/list/">attendee list</a>.</p>
		
			<?php

				} else {
					$errStr = mysql_error() . " [" . mysql_errno() . "]. " . $query;
					?>

		<p>Error: <b>A database error has occured</b></p>
		<p><?php echo $errStr ?></p>

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
							<p>Error: <b>Invalid password</b></p>
							<p>Please go <a href="/registration/update/?id=<?php echo $id ?>">back</a> and try again.</p>
							<p>If you have forgotten your password, please contact us.</p>
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
		<p><b>Thank you.</b></p>
		<p>Your registration information has been updated</p>
	<?php
						} else {
							$errStr = mysql_error() . " [" . mysql_errno() . "]. " . $query;
	?>
		
		<p>Error: <b>A database error has occured</b></p>
		<p><?php echo $errStr ?></p>
		
	<?php
						}
					} // mot de passe
				} else {
					$errStr = mysql_error() . " [" . mysql_errno() . "]. " . $query;
	?>
		
		<p>Error: <b>A database error has occured</b></p>
		<p><?php echo $errStr ?></p>

	<?php
				}
			break;
			
		default:
	?>
		<p>Error: <b>Unknown command</b></p>
	<?php
		}
		@mysql_close();
	?>
				</div>
				<p><a href="/registration/">Back</a> to the registration information page.</p>
				<p>&nbsp;</p>

			</div>

			<div id="footer">
				<p>Copyright &#169; 2004-2009 Worldwide Newton Conference</p>
				<p>Site created by <a href="http://www.kallisys.com/">Paul Guyot</a> | <a href="http://www.thisiswhatwedo.com/">Anil K Solanki</a> | <a href="http://www.torpedobird.com/">Ben Wojtyna</a><br />
				Site maintained by <a href="http://www.splorp.com/">Grant Hutchinson</a><br />
				Site hosted by <a href="http://www.continuity.cx/">Bill Shamam</a></p>
				<p>God bless <a href="http://www.barebones.com/products/bbedit/">BBEdit</a></p>
				<p>Valid <a href="http://validator.w3.org/check/referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://feedvalidator.org/check.cgi?url=http://wwnc.newtontalk.net/index.xml">RSS</a> | <a href="http://feedvalidator.org/check.cgi?url=http://wwnc.newtontalk.net/atom.xml">Atom</a> | <a href="http://www.contentquality.com/mynewtester/cynthia.exe?url1=http://wwnc.newtontalk.net/">508</a></p>
			</div>
		</div>
	</body>
</html>
