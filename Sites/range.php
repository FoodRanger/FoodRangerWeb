<!DOCTYPE HTML5>
<html>
<head>
	<title>FoodRanger</title>
	<meta charset="utf-8">
        <link rel="stylesheet" href="../CSS/stylesheet.css">
	<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {height: 50%; width: 50%;}
    </style>
    <script type="text/javascript">
        var slider = document.getElementById('slider'),
        sliderDiv = document.getElementById("sliderDiv");
        slider.onchange = function() {
           sliderDiv.value = this.value;
        }​
    </script> 
</head>
<body>
    <?php include '../Includes/header.php'; ?>
    <?php include '../Sites/functions.php'; ?>
	
	<div id="map"></div>
    <script>

	var map;
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: -34.397, lng: 150.644},
			zoom: 8
		});
	}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBemhYXGzyo_Ailklr-J1MSZ2c7TeOVfRs&callback=initMap"
        async defer></script>
    
<?php 
	$name=$_POST['name'];
	$loc=$_POST['loc'];
	$cat=$_POST['category'];
	$prize=$_POST['prize'];
	$rating=$_POST['rate'];
	echo "<div class='content'><form><input type='range' id='slider' min='500' max='3000' step='500' value='1000' oninput='range(this.value)'><br>
                <input type='text' id='sliderDiv' value='1000'></form>
                <form action=\"restlist.php\" method=\"POST\">
		<input type=\"text\" name=\"name\" placeholder=\"Restaurant Name\" hidden value=$name >
		<input type=\"text\" name=\"loc\" placeholder=\"ZIP Code\" hidden value=$loc ></td>
		<input type=\"text\" name=\"category\" placeholder=\"Category\" hidden value=$cat > <!-- Ersetzen mit Select-->
		<input type=\"text\" name=\"prize\" placeholder=\"Prize 1-5\" hidden value=$prize > <!-- Ersetzen mit Select-->
		<input type=\"text\" name=\"rate\" placeholder=\"Rating 1-5\" hidden value=$rating > <!-- Ersetzen mit Select-->
		<button type='submit'>Next</button>
	</form></div>";
	?>
 
</body>
</html>