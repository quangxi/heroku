<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rigister</title>
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
		height: 650px;;
	}
	.content form{
		margin-right: auto;
		margin-left: auto;
		margin-top: 30px;
		width: 500px;
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
			<div class="hello"><h2>Welcome to the animal Home</h2></div>
		</div>
		<div class="menu">
			<ul>
				<li><a href="Trangchu.php">  Home  </a></li>
				<li><a href="">  Help  </a></li>
				<li><a href="Addanimals.php">  Add Animals  </a></li>
				<li><a href="login.php">  Login  </a></li>
				<li class="active"><a href="Rigister.php">  Sign Up  </a></li>
			</ul>
		</div>
		<div class="content">
			<form action="" method="POST" enctype="multipart/form-data">
				<h2>Rigister</h2>
				<label>Name</label>
				<input type="text" name="name" placeholder="Name"><br>

				<label>User ID</label>
				<input type="text" name="user_id" placeholder="User ID"><br>

				<label>User Name</label>
				<input type="text" name="username" placeholder="User Name"><br>

				<label>Password</label>
				<input type="Password" name="password" placeholder="Password"><br>

				<label>Email</label>
				<input type="Email" name="email" placeholder="Email"><br>
				<button type="submit" value="Rigister" name="rigister">Rigister</button>
				<a href="login.php" class="ca">Already have an accout</a>
			</form>
		</div>
	</div>
		<?php
		include("Connect.php");
		if(isset($_POST['rigister'])){
			$username = $_POST['username'];
			$fullname = $_POST['name'];
			$password = $_POST['password'];
			$Email = $_POST['email'];
			$user_id = $_POST['user_id'];
			
			$sql =" INSERT INTO user VALUES('$username','$fullname','$password','$Email','$user_id')";
			$insert_pro = mysqli_query($connect,$sql);
		}
		?>
	</body>
	</html>