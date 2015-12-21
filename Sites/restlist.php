<!DOCTYPE HTML5>
<html>
<head>
	<title>FoodRanger</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../CSS/stylesheet.css">
</head>
<body>
	<?php include '../Includes/header.php'; 
	if (!empty($_POST["name"])) {
		$name=$_POST['name'];	
	}
	
	if (!empty($_POST["loc"])) {
		$loc=$_POST['loc'];   
	}
	
	if (!empty($_POST["category"])) {
		$cat=$_POST['category'];   
	}
	
	if (!empty($_POST["prize"])) {
		$prize=$_POST['prize'];   
	}
	
	if (!empty($_POST["rate"])) {
		$rating=$_POST['rate'];   
	}
	
	try {
		$conn = new PDO('mysql:host=37.120.179.200;dbname=restaurants;port=3306', 'username', 'passowrd');
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 
    }
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	
	
	$sql='SELECT * FROM restaurant WHERE 1=1';  //query vorbeireiten, fals variablen vorhanden, mit where abfragen
        if (!empty($_POST["name"])) {
               $sql=$sql . ' AND name=:name';
        }
        if (!empty($_POST["loc"])) {
               $sql=$sql . ' AND location=:loc';
        }
        if (!empty($_POST["category"])) {
               $sql=$sql . ' AND category=:cat';
        }
        if (!empty($_POST["rate"])) {
               $sql=$sql . ' AND rating=:rate';
        }
        if (!empty($_POST["prize"])) {
               $sql=$sql . ' AND prize=:prize';
        }


	$stmt = $conn->prepare($sql);             //stmt prepare


        if (!empty($_POST["name"])) {
               $stmt->bindParam(':name',$name,PDO::PARAM_STR, 12);
        }
		if (!empty($_POST["loc"])) {
               $stmt->bindParam(':loc',$loc,PDO::PARAM_STR, 12);
        }
        if (!empty($_POST["category"])) {
               $stmt->bindParam(':cat',$cat,PDO::PARAM_STR, 12);
        }
        if (!empty($_POST["rate"])) {
               $stmt->bindParam(':rate',$rating,PDO::PARAM_STR, 12);
        }
        if (!empty($_POST["prize"])) {
               $stmt->bindParam(':prize',$prize,PDO::PARAM_STR, 12);
        }
        $stmt->execute();
	
        if($stmt->fetchColumn() == 0) {
                echo "No Clients Found";
        }
        else{
                $stmt2 = $conn->prepare($sql);             //stmt prepare


            if (!empty($_POST["name"])) {
               $stmt2->bindParam(':name',$name,PDO::PARAM_STR, 12);
        }
		if (!empty($_POST["loc"])) {
               $stmt2->bindParam(':loc',$loc,PDO::PARAM_STR, 12);
        }
        if (!empty($_POST["category"])) {
               $stmt2->bindParam(':cat',$cat,PDO::PARAM_STR, 12);
        }
        if (!empty($_POST["rate"])) {
               $stmt2->bindParam(':rate',$rating,PDO::PARAM_STR, 12);
        }
        if (!empty($_POST["prize"])) {
               $stmt2->bindParam(':prize',$prize,PDO::PARAM_STR, 12);
        }
        $stmt2->execute();

               
               echo "<div class='content'><table><tr id='thead'><td>Name</td><td>Category</td><td>Location</td><td>Rating</td><td>Prize</td></tr>";
	        while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                       echo "<tr><td>".$row[name]."</td><td>".$row[category]."</td><td>".$row[location]."</td><td>".$row[rating]."</td><td>".$row[prize]."</td><td><button>View</button></td></tr>";
		        

	        }
                echo "</table></div>";
		}
	?>
	
	
 
</body>
</html>
