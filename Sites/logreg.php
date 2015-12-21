<!DOCTYPE HTML5>
<head>
	<title>FoodRanger</title>
	<meta charset="utf-8">
</head>
<body>
	<?php include '../Includes/header.php'; ?>
	<form action="../Scripts/login.php" method="post" id="logForm">
		<table>
			<tr>
				<td>Login</td>
				<td>Passwort</td>
			</tr>
			<tr>
				<td><input type="text" name="logusername" id="logusername"></td>
				<td><input type="password" name="logpass" id="logpass"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submitbtn" id="submitbtn">Login</button></td>
			</tr>
		</table>
	</form>
	
</body>