
<?php
include("connect_db2.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Parking UI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap">
	<link rel="stylesheet" href="gt1.css">	
</head>
<body>
	<header>
		<h1>Smart Parking</h1>
		<nav>
			<ul>
				<!-- <li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li> -->
			</ul>
		</nav>
	</header>
    
	<main>
		<section class="hero">
			<div class="hero-text">
				<h2>Find the perfect parking spot</h2>
				<p>Smart Parking helps you find available parking spots in real-time, so you can save time and money.</p>
			</div>
			<div class="hero-image">
				<img src="parking.jpg" alt="Parking Lot">
			</div>
		</section>
		
		<section class="search">
			<form action="connect_db2.php" method="POST">
				<label for="location">Location:</label>
				<input type="text" id="location" name="location" placeholder="Enter location">
				<label for="date">Date:</label>
				<input type="date" id="date" name="date">
				<label for="time">Time:</label>
				<input type="time" id="time" name="time">
				<input type="submit" name="submit">
			</form>
		</section>
		<?php 
        if(isset($_POST['submit']))
        {
            $location=$_POST['location'];
            $date=$_POST['date'];
            $time=$_POST['time'];

            $res=mysqli_query($mysqli,"INSERT into smart_parking values('','$location','$date','$time')");
            if($result)
            {
                echo "Success";
            }
            else{
                echo "Failed";
            }
        }
        ?>
		<section class="results">
			<h3>Available Parking Spots</h3>
			<div class="parking-spot">
				<div class="parking-image">
					<img src="https://img.freepik.com/free-vector/car-parking-city-street-luxury-automobiles_33099-1995.jpg" alt="Parking Spot">
				</div>
				<div class="parking-info">
					<h4>Parking Spot 1</h4>
					<p>Address: 123 Main St.</p>
					<p>Price: $5 per hour</p>
					<p>Distance: 0.2 miles</p>
                    <a href="grid_1.html"><button>Book Now</button></a>					
				</div>
			</div>
			<div class="parking-spot">
				<div class="parking-image">
					<img src="https://img.freepik.com/free-vector/underground-car-parking-garage-with-vacant-places_107791-1736.jpg" alt="Parking Spot">
				</div>
				<div class="parking-info">
					<h4>Parking Spot 2</h4>
					<p>Address: 456 Elm St.</p>
					<p>Price: $3 per hour</p>
					<p>Distance: 0.5 miles</p>
                    <a href="grid_1.html"><button>Book Now</button></a>
					<!-- <button href="home.html">Book Now</button> -->
				</div>
			</div>
		</section>
	</main>
	
	<footer>
		<p>&copy; 2023 Smart Parking</p>
	</footer>
</body>
</html>