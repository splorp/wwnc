<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Worldwide Newton Conference 2006 : Registration Form</title>
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
				<h1>Registration Form</h1>
				<p>Please fill out the following information.</p>
				<p>If you are not sure whether you are able to attend at this time, complete the registration form, indicating your tentative interest.</p>
				<p>Payment of the conference regsitration fee may be made after submitting this form.</p>
				
				<form action="/registration/register/" method="post">
					<input type="hidden" name="cmd" value="add" />
					<table border="0" cellspacing="10" cellpadding="0" summary="registration form">
					<tr>
						<td>First name:</td>
						<td><input type="text" name="firstname" size="40" /></td>
					</tr>
					<tr>
						<td>Last name:</td>
						<td><input type="text" name="lastname" size="40" /></td>
					</tr>
					<tr>
						<td>Country:</td>
						<td><input type="text" name="country" size="40" /></td>
					</tr>
					<tr>
						<td>Website:</td>
						<td><input type="text" name="url" size="40" /> (Optional)</td>
					</tr>
					<tr>
						<td>E-mail:</td>
						<td><input type="text" name="email" size="40" /> (Optional) *</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" size="40" /> **</td>
					</tr>
					<tr>
						<td>Interest:</td>
						<td>
							<select size="1" name="confidence">
								<option value="1" selected="selected">I will be attending the conference</option>
								<option value="2">I am interested, but do not know if I will attend the conference</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="submit" value="Register" />
						</td>
					</tr>
					</table>

				</form>
				</div>

				<p>* Your e-mail address will not be disclosed on this web site or made available to any other party whatsoever. However, the Worldwide Newton Association reserves the right to send conference-related information to you via e-mail. Do not provide us with an e-mail address if you do not want to receive additional conference information.</p>
				<p>** This password is used to access and update your registration information.</p>
				<p>&nbsp;</p>

			</div>

			<div id="footer">
				<p>Copyright © 2004–2021 Worldwide Newton Conference</p>
				<p>Original site created by <a href="http://www.kallisys.com/">Paul Guyot</a> | <a href="http://www.thisiswhatwedo.com/">Anil K Solanki</a> | <a href="https://web.archive.org/web/20160111112813/http://www.torpedobird.com/">Ben Wojtyna</a><br />
				Site maintained by <a href="https://splorp.com/">Grant Hutchinson</a></p>
				<p>God bless <a href="https://www.barebones.com/products/bbedit/">BBEdit</a></p>
			</div>
		</div>
	</body>
</html>
