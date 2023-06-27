<?php
	include("connection.php");

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$brand=$_POST['brand'];
		$quantity=$_POST['quantity'];
		$number_of_use=$_POST['number_of_use'];

		$sql="insert into item_tbl (name,brand,quantity,number_of_use) values ('$name','$brand','$quantity','$number_of_use')";

		$result=mysqli_query($con,$sql);
		if($result)
		{
			echo "<script> alert ('success') 
			window.location='add_item.php'</script>";
		}
		else
		{
			die(mysqli_error("error"+$con));
		}
	}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">

	<title>Milktea Shop</title>
</head>
<body>
	<!-- para to sa dashboard at sa baba ng dashboard
		yung mga <i class='bx bxs-smile'></i> nakuha yan sa boxicons para
		mag karoon ng mga ICONS-->
	<section id="sidebar">
		<a href="index.php" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">39 ers</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="store_menu.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="inventory.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Inventory Item</span>
				</a>
			</li>
			<li>
				<a href="sales.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Sales</span>
				</a>
			</li>
			<li class="active">
				<a href="add_item.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Add New Item</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="login.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->
		<!-- MAIN -->
		<main>
			<form method="POST">
         		<h1>ADD ITEM</h1>
         		<label>Item Name</label>
         		<input type="text" name="username" placeholder="Enter Username">
         		<label>Brand</label>
         		<input type="text" name="username" placeholder="Enter Username">
         		<label>Quantity</label>
         		<input type="text" name="username" placeholder="Enter Username">
         		<label>Number of Use</label>
         		<input type="text" name="username" placeholder="Enter Username">
            	<input type="submit" name="submit" value="Add Item">
         	</form>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>