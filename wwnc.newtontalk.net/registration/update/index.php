<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<title>Worldwide Newton Conference 2006 : Update Form</title>
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

	<?php
		$mysql_host = "localhost";
		$mysql_user = "wwnc";
		$mysql_pass = "c0nf1r1nc1";
		$mysql_bdd = "wwnc_newtontalk_net";
		@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die("Cannot connect to mysql");
		@mysql_select_db($mysql_bdd) or die("Cannot connect to database '$mysql_bdd'");
		$table = "registration";

		$id = $HTTP_GET_VARS["id"];
		if ($id)
		{

			$query = "SELECT * FROM $table where id=$id";
			$result = @mysql_query( $query );
			if (mysql_errno() == 0)
			{
				$val = @mysql_fetch_array( $result );
				if ($val)
				{
	?>

				<div class="chunk">
				<h1>Update Form</h1>
				<p>You must enter your password to update your registration information.</p>

				<form action="/registration/register/" method="post">
					<input type="hidden" name="cmd" value="update" />
					<input type="hidden" name="id" value="<?php echo $val['id'] ?>" />
					<table border="0" cellspacing="10" cellpadding="0" summary="registration form">
						<tr>
							<td>Name:</td>
							<td><?php echo $val['fstname'] ?> <?php echo $val['lstname'] ?></td>
						</tr>
						<tr>
							<td>Country:</td>
							<td><input type="text" name="country" size="40" value="<?php echo $val['country'] ?>" /></td>
						</tr>
						<tr>
							<td>Website:</td>
							<td><input type="text" name="url" size="40" value="<?php echo $val['url'] ?>" /> (Optional)</td>
						</tr>
						<tr>
							<td>E-mail:</td>
							<td><input type="text" name="email" size="40" /> (Optional) *</td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="text" name="password" size="40" /></td>
						</tr>
						<tr>
							<td>Interest:</td>
							<td>
								<select size="1" name="confidence">
									<option value="1" <?php if ($val['confidence']==1) { echo "selected=\"selected\""; } ?>>I will be attending the conference</option>
									<option value="2" <?php if ($val['confidence']==2) { echo "selected=\"selected\""; } ?>>I am interested, but do not know if I will attend the conference</option>
								</select>
							</td>
						</tr>
							<td>&nbsp;</td>
							<td><input type="submit" value="Update" /></td>
					</table>
				</form>

					<p>* Please enter only if your e-mail address has changed.</p>
	
			<?php
				} else {
			?>
		
			<p>Error: <b>Unknown ID Number</b></p>
		
			<?php
					}
				} else {
					$errStr = mysql_error() . " [" . mysql_errno() . "]. " . $query;
			?>
		
			<p>Error: <b>A database error occurred</b></p>
			<p><?php echo $errStr ?></p>
		
			<?php
					}
				} else {
			?>
		
			<p>Error: <b>No ID provided</b></p>
		
			<?php
				}
			?>
				</div>
				<p><a href="/registration/">Back</a> to the registration information page.</p>
				<p>&nbsp;</p>

			</div>

			<div id="footer">
				<p>Copyright &#169; 2004-2016 Worldwide Newton Conference</p>
				<p>Site created by <a href="http://www.kallisys.com/">Paul Guyot</a> | <a href="http://www.thisiswhatwedo.com/">Anil K Solanki</a> | <a href="http://www.torpedobird.com/">Ben Wojtyna</a><br />
				Site maintained by <a href="http://www.splorp.com/">Grant Hutchinson</a><br />
				Site hosted by <a href="http://www.continuity.cx/">Bill Shamam</a></p>
				<p>God bless <a href="http://www.barebones.com/products/bbedit/">BBEdit</a></p>
				<p>Valid <a href="http://validator.w3.org/check/referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://feedvalidator.org/check.cgi?url=http://wwnc.newtontalk.net/index.xml">RSS</a> | <a href="http://feedvalidator.org/check.cgi?url=http://wwnc.newtontalk.net/atom.xml">Atom</a> | <a href="http://www.contentquality.com/mynewtester/cynthia.exe?url1=http://wwnc.newtontalk.net/">508</a></p>
			</div>
		</div>
	</body>
</html>
