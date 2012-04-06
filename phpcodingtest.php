<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP Coding Test</title>
</head>
<body>
<?php
	$con=mysql_connect("localhost","test","test123");

	if(!$con) 
	{
		die('Could not connect: '.mysql_error());
	}

	mysql_select_db("testdb",$con);
	
	echo"<form name='form_browser_poll' method='POST' action='store_info.php' enctype=\"multipart/form-data\">
		<div id='browser_poll'>
			<div>
				<span class='style9'>
					<table>					
						<tr>
							<td><span class='style1'>Full Name:</span></td>
							<td><input type='text' name='name' size='20'/></td>
						</tr>
						
						<tr>
							<td><span class='style1'>Email Address:</span></td>
							<td><input type='text' name='email' size='20'/></td>
						</tr>						
						
						<tr>
							<td><span class='style1'>Favourite Browser: </span></td>					
							<td><select name='browser'>
								<option value=\"Internet Explorer\">Internet Explorer</option>
								<option value=\"FireFox\">FireFox</option>
								<option value=\"Safari\">Safari</option>
								<option value=\"Chrome\">Chrome</option>
								<option value=\"Opera\">Opera</option>
								<option value=\"Konqueror\">Konqueror</option>
								<option value=\"Lynx\">Lynx</option>
							</select></td>
						</tr>
										
						<tr>
							<td><span class='style1'>Reason: </span></td>
							<td><textarea rows=\"10\" cols=\"50\" name='reason'></textarea></td>
						</tr>						
						
						<tr>
							<td/>
							<td><input type='submit' name='Submit' value='Submit'/>&nbsp;<input type='reset' name='clear'value='Clear'></td>
						</tr>
					</table>
				</span>
			</div>
		</div>
		</form>";
?>
</body>
</html>