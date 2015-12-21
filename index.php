<!DOCTYPE HTML5>
<html>
<head>
	<title>FoodRanger</title>
	<meta charset="utf-8">
        <link rel="stylesheet" href="CSS/stylesheet.css">
</head>
<body>
	<?php include 'Includes/header.php'; 

	try {
		$conn = new PDO('mysql:host=37.120.179.200;port=3306;dbname=restaurants', 'se', 'se2015');
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 
    }
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	?>
        <div class="content">
	<form action="Sites/range.php" method="POST">
	<table>
		<tr>
			<td>Name</td><td><input type="text" name="name" id="name" placeholder="Restaurant Name"></td>
		</tr>
		<tr>
			<td>Location</td><td><input type="text" name="loc" id="loc" placeholder="ZIP Code"></td>
		</tr>
		<tr>
			<td>Category</td><td><input type="text" name="category" id="category" placeholder="Category"></td> <!-- Ersetzen mit Select-->
		</tr>
		<tr>
			<td>Pricerange</td><td><input type="text" name="prize" id="prize" placeholder="Prize 1-5"></td> <!-- Ersetzen mit Select-->
		</tr>
		<tr>
			<td>Rating</td><td><input type="text" name="rate" id="rate" placeholder="Rating 1-5"></td> <!-- Ersetzen mit Select-->
		</tr>
		<tr>
			<td></td><td><button type="submit">Submit</button></td>
		</tr>
	</table>
	</form>
        </div>
</body>
</html>
