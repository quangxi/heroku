<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trang chủ</title>
	<style type="text/css">
	    *{
	    	padding: 0;
	    	margin: 0;
	    	box-sizing: border-box;
	    }
		.wrapper{
			border: 1px solid black;
			background: #D9D3C4;
			width: 1200px;
			height: 1100px;
			margin: auto;
		}
		.header{
			height: 50px;
			margin: auto;
			border: 1px solid black;
		}
		.hello{
			margin-top: auto;
			text-align: center;
			font-family: lucidahandwritting,cursive;
			font-size: 20px;
		}
		.logo{
			float: left ;
			width: 150px;
		}
		#form_search{
			margin-top: 11px;
			margin-right: 40px;
			float: right;
		}
		#form_search input[type=text]{width: 250px; height: 30px}
		#form_search input[type=submit]{height: 30px}
		.menu{
			width: 1198px;
			height: 78px;
			background: #FFA500;
		    border:1px solid black ;
		    text-align: center;
		    font-family: lucidahandwritting,cursive;
		}
		.menu ul{
			list-style: none;
			color: #fff;
			display: inline-flex;
		}
		.menu ul li{
			width: 120px;
			padding: 15px;
			margin: 15px;
			margin-bottom: auto;
			margin-top: auto;
			display: inline-table;
		}
		.menu ul li a{
			text-decoration: none;
			color: #000000;
			font-size: 16px;
		}
		.active, .menu ul li:hover{
			background: #CD661D;
			border-radius: 5px;
			height: auto;
		}
		.content{
			width: 100%;
			height: 60%;
			font-family: lucidahandwritting,cursive;
		}
		.low{
			width: 18%;
			height: auto;
			background: #E7AE82;
			float: left;
			border: 1px solid black;
			margin: auto;
		}
		.low >p{
			background: #FF9133;
			color: black;
			font-size: 30px;
			padding: 10px;
			text-align: center;
		}
		.type ul{
			width: 100%;
			height: auto;
		}
		.type ul li{
			list-style: none;
		}
		.type ul li a{
			color: black;
			padding: 5px;
			margin: 2px;
			text-align: left;
			font-size:20px;
			text-decoration: none;
		}
		.type a:hover{
			text-decoration: underline;
			display: inline-block;
		}
		.up{
			width: 82%;
			float: right;
		}
		.animal_box{
			width: 900px;
			text-align: center;
			margin-left: 20px ;
			margin-top: auto;
			display: inline-block;
		}
		.single_animal {
			float: left;
			margin-left: 30px;
			padding: 10px;
		}
		.single_animal img {
			border: 1px solid black;
		}
		.user{
			font-size: 20px;
			text-decoration: underline;
			margin-left: 10px;
		}
	</style>
</head>
<body>
	<div class="logo">
		<img id="logo" src="Images/logo1.jpg" width="180px">
	</div>
	<div class="wrapper">
		<div class="header">
			<div id="form_search">
				<form method="get" action="search.php" enctype="multipart/from-data">
					<input type="search" name="user_query" placeholder="Search">
					<input type="submit" name="search" value="Search">
				</form>
			</div>
			<div class="hello"><h2>Welcome to our toy shop</h2></div>
		</div>
		<div class="menu">
			<ul>
				<li class="active"><a href="Trangchu.php">  Home  </a></li>
				<li><a href="help.php">  Help  </a></li>
				<li><a href="Addproduct.php">  Add Products  </a></li>
				<li><a href="login.php">  Login  </a></li>
				<li><a href="Rigister.php">  Sign Up  </a></li>
				<li><a href="logout.php">Log out?</a></li>
			</ul>
		</div>
		<div class="content">
			<div class="low">
				<p>Toy Type</p>
				<div class="type">
					<ul>
						<li><a href="car.php">Car</a></li><br>
						<li><a href="bike.php">Bike</a></li><br>
						<li><a href="robot.php">Robot</a></li><br>
						<li><a href="gun.php">Gun</a></li><br>
						<li><a href="sword.php">Sword</a></li><br>
					</ul>
				</div>
				<p>User</p>
				<div class="user">
						<?php
						if(isset($_SESSION['username'])){
							$username = $_SESSION['username'];
							echo "$username";
						}
						  ?>
				</div>
			</div>
			<div class="up">
				<p style="text-align: center;font-size: 20px;">All Products</p>
				<div class="animal_box">
					<?php
					include("Connect.php");
					$sql = "SELECT * FROM product";
					$result = mysqli_query($connect,$sql);
					while ($row=mysqli_fetch_array($result)) {
						$product_name = $row['product_name'];
						$product_price = $row['product_price'];
						$product_type = $row['product_type'];
						$product_image = $row['product_image'];
						echo"<div class='single_animal'>
						<h3> $pruduct_name </h3>
						<img src='Images/$product_image'width='180' height='180' />
						<p> Price: $product_price</p> 
						<p><a href='$product_name.php'> Want to know about $product_name? </a></p>
						</div>
						";
					}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>