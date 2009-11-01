<!doctype HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title>Update registration details</title>
</head>
<body>
	<?php
		$mysql_host = "localhost";
		$mysql_user = "wwnc";
		$mysql_pass = "c0nf1r1nc1";
		$mysql_bdd = "wwnc_newtontalk_net";
		
		/* connection avec MySQL */
		@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die("Impossible de se connecter à mysql");
		@mysql_select_db($mysql_bdd) or die("Impossible de se connecter à la base de données '$mysql_bdd'");
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
	<p align="center"><b>Update your conference registration data:</b></p>
	<form action="../register/" method="POST">
		<input type="hidden" name="cmd" value="update">
		<input type="hidden" name="id" value="<?php echo $val['id'] ?>">
		<table summary="registration form">
		<tr>
			<td>First name:</td>
			<td><?php echo $val['fstname'] ?></td>
		</tr>
		<tr>
			<td>Last name:</td>
			<td><?php echo $val['lstname'] ?></td>
		</tr>
		<tr>
			<td>Country:</td>
			<td><input type="text" name="country" size="40" value="<?php echo $val['country'] ?>"></p>
		<tr>
			<td>Website (if any):</td>
			<td><input type="text" name="url" size="60" value="<?php echo $val['url'] ?>"></p>
		<tr>
			<td>E-mail address (only if it did change):</td>
			<td><input type="text" name="email" size="40"></p>
		<tr>
			<td>Password:</td>
			<td><input type="text" name="password" size="40"></p>
		<tr>
			<td colspan="2"><select size="1" name="confidence">
			<option value="1" <?php if ($val['confidence']==1) { echo "selected"; } ?>>I will surely come</option>
			<option value="2" <?php if ($val['confidence']==2) { echo "selected"; } ?>>I'm Interested but I haven't decided yet</option>
		</select></td>
		</tr>
		</table>
		<input type="submit" value="Update">
	<p>Your e-mail address will not be disclosed on the web page or sold or whatever. However, we may use it to provide you with WWNC-related information. Don't provide us with an address if you don't want to receive anything about the conference.</p>

	<?php
				} else {
	?>

	<p align="center"><b>Unknown ID</b>. <a href="../">Back</a></p>

	<?php
				}
			} else {
				$errStr = mysql_error() . " [" . mysql_errno() . "]. " . $query;
	?>

	<p align="center"><b>An SQL error occurred (<?php echo $errStr ?>)</b>. <a href="../">Back</a></p>

	<?php
			}
		} else {
	?>

	<p align="center"><b>No ID was provided</b>. <a href="../">Back</a></p>

	<?php
		}
	?>
</body>
</html>
