<?php
	$servername = "37.120.179.200";
	$username = $_POST["logusername"];
	$password = $_POST["logpass"];

	try {
		$conn = new PDO('mysql:host=37.120.179.200;dbname=restaurants;port=3306', 'se', 'se2015');
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	
	$sql='SELECT * FROM user WHERE name=:name';
	$stmt = $conn->prepare($sql);
	$stmt->execute(array(':name' => $username));
	if ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
		if($password == $row['password']){
			$_SESSION['username']=$row['name'];
		}else{
			header("Location: http://www.foodranger.de/test/Sites/logreg.php?")
		}
	}else{
		
	}
	
	
?>