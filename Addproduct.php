<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	.wrapper{
		border: 1px solid black;
		background: #D9D3C4;
		width: 1200px;
		height: auto;
		margin: auto;
	}
	.logo{
		float: left ;
		width: 150px;
	}
	.header{
		height: 80px;
		margin: auto;
		border: 1px solid black;
	}
	.hello{
		margin-top: auto;
		text-align: center;
		font-family: lucidahandwritting,cursive;
		font-size: 20px;
	}
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
		height: auto;;
	}
	.content form{
		margin-right: auto;
		margin-left: auto;
		margin-top: 30px;
		width: 50%;
		height: 55%;
		border: 2px solid #ccc;
		padding: 30px;
		background: #fff;
		border-radius: 15px;
	}
	.content h2{
		text-align: center;
		margin: bottom 40px;
	}
	.content input{
		display: block;
		border: 2px solid #ccc;
		width: 95%;
		padding: 10px;
		margin: 10px auto;
		border-radius: 5px;
	}
	.content label{
		color: #888;
		font-size: 18px;
		padding: 10px;
	}
	.content button{
		float: right;
		background: #555;
		padding: 10px 15px;
		color: #fff;
		border-radius: 5px;
		margin-right: 10px;
		border: none;
	}
	.content button:hover{
		opacity: .7;
	}
	*{
		font-family: sans-serif;
		box-sizing: border-box;
	}
	</style>
</head>
<body>
	<div class="logo">
		<img id="logo" src="Images/logo1.jpg" width="180px">
	</div>
	<div class="wrapper">
		<div class="header">
			<div class="hello"><h2>Welcome to our toy shop </h2></div>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">  Home  </a></li>
				<li><a href="">  Help  </a></li>
				<li class="active"><a href="Addproduct.php">  Add Products  </a></li>
				<li><a href="login.php">  Login  </a></li>
				<li><a href="Rigister.php">  Sign Up  </a></li>
			</ul>
		</div>
		<div class="content">
			<form action="" method="POST" enctype="multipart/form-data">
				<h2>Add Products</h2>
				<label>Product Name</label>
				<input type="text" name="product_name">

				<label>Product Price</label>
				<input type="text" name="product_price">

				<label>Product Image</label>
				<input type="file" name="product_image">

				<label>Product Type</label>
				<input type="text" name="product_type">

				<button type="submit" value="Add animal" name="add_product">Add Product</button>
			</form>
		</div>
		<?php
		include("Connect.php");
		if(isset($_POST['add_product'])){
			$product_name = $_POST['product_name'];
			$product_price = $_POST['product_price'];
			$product_type = $_POST['product_type'];

			$product_image = $_FILES['product_image']['name'];
			$product_image_tmp = $_FILES['product_image']['tmp_name'];
			move_uploaded_file($product_image_tmp,"Images/$product_image");

			$sql = "INSERT INTO product VALUES(NULL,'$product_name','$product_image','$product_price','$product_type')";

			$insert_pro = mysqli_query($connect,$sql);
			if($insert_pro)
			{
				echo"THEM THANH CONG";
			}
			else{
				echo"ErROr";
			}
		}
		?>
	</body>
	</html>