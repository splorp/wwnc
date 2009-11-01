<!doctype HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Register</title>
		<style type="text/css" media="screen"><!--
.maintext  { color: #595959; font-size: 13px; font-family: "Lucida Grande", Arial, Verdana, FontName }
.box   { color: #595959; font-size: 12px; font-family: "Lucida Grande", Arial, Verdana, FontName; background-color: white; padding: 12px 12px 12px 3px; border: solid 1px #838c00 }
.box1 { color: #595959; font-size: 12px; font-family: "Lucida Grande", Arial, Verdana, FontName; background-color: white; padding: 12px; border: solid 1px #838c00 }
--></style>
	</head>

	<?php
		$mysql_host = "localhost";
		$mysql_user = "wwnc";
		$mysql_pass = "c0nf1r1nc1";
		$mysql_bdd = "wwnc_newtontalk_net";
		
		/* connection avec MySQL */
		@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die("Impossible de se connecter Âˆ mysql");
		@mysql_select_db($mysql_bdd) or die("Impossible de se connecter Âˆ la base de donnÂŽes '$mysql_bdd'");
		$table = "registration";
	?>
	<body bgcolor="#cbcbcb" link="#838c00" vlink="purple">
		<table width="630" border="0" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td><a href="/"><img src="/image/wwnc-header2004.jpg" alt="" width="630" height="180" border="0"></a></td>
			</tr>
		</table>
		<br>
		<table width="634" border="0" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td class="box" valign="top">
					<ul>
						<li><a href="#confirmed"><span class="maintext"><b>People who confirmed.</b></span></a>
						<li><a href="#not-sure"><span class="maintext"><b>People who are not sure yet.</b></span></a>
						<li><a href="#register"><span class="maintext"><b>Register to the conference.</b></span></a>
					</ul>
				</td>
			</tr>
		</table>
		<br>
		<table width="634" border="0" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td class="box" valign="top">
					<p align="center">
	<a name="confirmed"><p align="center"><b>People who confirmed they will attend the conference.<br>
	</b></p></a>

	<ol>
		<?php
			$query = "SELECT * FROM $table where confidence=1 ORDER by lstname";

			$result = mysql_query( $query );
	
			$val = "";
			
			if (mysql_errno() == 0)
			{
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
						echo " (" . $val["country"] . ")";
					}

					// lien pour la mise à jour
					echo " (<a href=\"update/?id=" . $val["id"] . "\">u</a>)";

					echo "\n";
				}
			}
		?>
	</ol>
	
				</td>
			</tr>
		</table>
		<br>
		<table width="634" border="0" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td class="box" valign="top">
					<p align="center"><a name="not-sure"><b>People who are not sure yet.<br></b></a></p>
	<ol>
		<?php
			$query = "SELECT * FROM $table where confidence=2 ORDER by lstname";

			$result = mysql_query( $query );
	
			$val = "";
			
			if (mysql_errno() == 0)
			{
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
						echo " (" . $val["country"] . ")";
					}

					// lien pour la mise à jour
					echo " (<a href=\"update/?id=" . $val["id"] . "\">u</a>)";

					echo "\n";
				}
			}
		?>
	</ol>
	
				</td>
			</tr>
		</table>
		<br>
		<table width="634" border="0" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td class="box1" valign="top">
					<p align="center"><a id="register" name="register"></a><a name="register"><b>Register your interest in the conference.<br>
								<br>
							</b></a></p>
	<form action="register/" method="POST">
		<input type="hidden" name="cmd" value="add">
		<table summary="registration form">
		<tr>
			<td>First name:</td>
			<td><input type="text" name="firstname" size="40"></td>
		</tr>
		<tr>
			<td>Last name:</td>
			<td><input type="text" name="lastname" size="40"></td>
		</tr>
		<tr>
			<td>Country:</td>
			<td><input type="text" name="country" size="40"></p>
		<tr>
			<td>Website (if any):</td>
			<td><input type="text" name="url" size="60"></p>
		<tr>
			<td>E-mail address:</td>
			<td><input type="text" name="email" size="40"></p>
		<tr>
			<td>Password:</td>
			<td><input type="text" name="password" size="40"> (to be used for updates)</p>
		<tr>
			<td colspan="2"><select size="1" name="confidence">
			<option value="1" selected>I will surely come</option>
			<option value="2">I'm Interested but I haven't decided yet</option>
		</select></td>
		</tr>
		</table>
		<input type="submit" value="Register">
	<p>Your e-mail address will not be disclosed on the web page or sold or whatever. However, we may use it to provide you with WWNC-related information. Don't provide us with an address if you don't want to receive anything about the conference.</p>
					</form>
				</td>
			</tr>
		</table>
		<br>
		<table width="634" border="0" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td valign="top" width="317"><font size="-2" color="#666666">Site created by,<br>
						<a href="http://www.kallisys.com/" target="_blank">Paul Guyot</a> <a href="http://www.thisiswhatwedo.com/" target="_blank">Anil K Solanki</a> <a href="http://www.torpedobird.com/" target="_blank">Ben Wojtyna</a></font></td>
				<td valign="top">
					<p><font size="-2" color="#696969">Site hosted by,<br>
							<a href="http://www.continuity.cx/" target="_blank">Bill Shamam</a></font></p>
				</td>
			</tr>
		</table>
		<p></p>
	</body>
</html>
