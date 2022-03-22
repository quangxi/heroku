<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	*{
		align-items: center;
	}
	.wrap{
		background: #D9D3C4;
		margin-left: 100px;
		display: inline-flex;
		border: 1px solid black;

	}
	.pic{
		width: 50%;

	}
	.ifo{
		width: auto;
	}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="pic">
			<img src="Images/Tom.jpg" width="460px">
		</div>
		<div class="ifo">
			<h1 style="font-size: 50px;" >Name of the animal: Tom</h1><br>
			<h3>Ability:  Can survive explotion, do the house work,sing ,dance,...</h3>
			<h3>Longelivity: 15-20 years</h3>
			<h3>Animal type : Cat</h3>
			<h3>Price : 10.000.000$</h3>
			<a href="Trangchu.php">Home Page</a>
		</div>
	</div>
	<?php
	include("Connect.php");  ?>
</body>
</html>