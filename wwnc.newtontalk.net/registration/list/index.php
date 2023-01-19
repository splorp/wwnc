<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Worldwide Newton Conference 2006 : Attendee List</title>
		<link rel="icon" href="/favicon.ico" type="image/ico" />
		<link rel="stylesheet" type="text/css" href="/includes/wwnc_001.css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="http://wwnc.newtontalk.net/index.xml" />
		<link rel="alternate" type="application/atom+xml" title="Atom" href="http://wwnc.newtontalk.net/atom.xml" />
	</head>

	<?php
		$mysql_host = "localhost";
		$mysql_user = "wwnc";
		$mysql_pass = "c0nf1r1nc1";
		$mysql_bdd = "wwnc_newtontalk_net";
		@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die("Cannot connect to mysql");
		@mysql_select_db($mysql_bdd) or die("Cannot connect to database '$mysql_bdd'");
		$table = "registration";
	?>

	<body>
		<div id="container">
			<div id="header">
				<a href="/"><img src="/image/wwnc-header2006.jpg" alt="Worldwide Newton Conference - San Francisco, California - January 2006" width="630" height="180" border="0" /></a>
			</div>
			
			<div id="content">

				<div class="chunk">
				<h1>Attendee List</h1>

				<p id="confirmed">People who have confirmed that they will be attending.</p>
				
					<?php
						$query = "SELECT * FROM $table where confidence=1 ORDER by lstname";
			
						$result = mysql_query( $query );
				
						$val = "";
						
						if (mysql_errno() == 0)
						{
							echo "<ol>\n";
							while ($val = mysql_fetch_array($result))
							{
								echo "\t<li>";
								
								// URL d'un site (si présent)
								if (strstr($val["url"], "http://"))
								{
									echo "<a href=\"" . $val["url"] . "\">";
								}
			
								// Prénom & nom.
								echo $val["fstname"] . " " . $val["lstname"];
			
								if (strstr($val["url"], "http://"))
								{
									echo "</a>";
								}
			
								// Pays (si présent).
								if ($val["country"] != "")
								{
									echo " - " . $val["country"] . "";
								}
			
								// lien pour la mise à jour
								echo " [ <a href=\"/registration/update/?id=" . $val["id"] . "\">Update</a> ]</li>";
			
								echo "\n";
							}
							echo "</ol>\n";
						}
					?>
				</div>
				
				<div class="chunk">
				<p id="unconfirmed">People who are not sure yet.</p>

					<?php
						$query = "SELECT * FROM $table where confidence=2 ORDER by lstname";
			
						$result = mysql_query( $query );
				
						$val = "";
						
						if (mysql_errno() == 0)
						{
							echo "<ol>\n";
							while ($val = mysql_fetch_array($result))
							{
								echo "\t<li>";
								
								// URL d'un site (si présent)
								if (strstr($val["url"], "http://"))
								{
									echo "<a href=\"" . $val["url"] . "\">";
								}
			
								// Prénom & nom.
								echo $val["fstname"] . " " . $val["lstname"];
			
								if (strstr($val["url"], "http://"))
								{
									echo "</a>";
								}
			
								// Pays (si présent).
								if ($val["country"] != "")
								{
									echo " - " . $val["country"] . "";
								}
			
								// lien pour la mise à jour
								echo " [ <a href=\"/registration/update/?id=" . $val["id"] . "\">Update</a> ]</li>";
			
								echo "\n";
							}
							echo "</ol>\n";
						}
					?>
				</div>
				<p><a href="/registration/">Back</a> to the registration information page.</p>
				<p>&nbsp;</p>

			</div>

			<div id="footer">
				<p>Copyright © 2004–2023 Worldwide Newton Conference</p>
				<p>Original site created by <a href="http://www.kallisys.com/">Paul Guyot</a> | <a href="http://www.thisiswhatwedo.com/">Anil K Solanki</a> | <a href="https://web.archive.org/web/20160111112813/http://www.torpedobird.com/">Ben Wojtyna</a><br />
				Site maintained by <a href="https://splorp.com/">Grant Hutchinson</a></p>
				<p>God bless <a href="https://www.barebones.com/products/bbedit/">BBEdit</a></p>
			</div>
		</div>
	</body>
</html>
