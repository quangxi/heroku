<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1> THÊM SẢN PHẨM</h1>
		<form action="" method="POST" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="1px">
			<tr>
				<td> Product_id</td>
                <td><input type="text" name="Product_id" ></td>
			</tr>
			<tr>
				<td>Product_name</td>
				<td><input type="text" name="Product_name" ></td>
			</tr>
		    <tr>
		    	<td>Product_Price</td>
		    	<td><input type="text" name="Product_Price" required=""></td>
		    </tr>
		    <tr>
		    	<td>Product_Image</td>
		    	<td><input type="file" name="Product_Image"></td>
		    </tr>
		    <tr>
		    	<td valign="top">Product_description</td>
		    	<td><textarea name="Product_description" rows="10"></textarea> </td>
		    </tr>
		    
		    <tr>
		    	<td></td>
		    	<td colspan ="7"><input type="submit" value ="Add product" name="insert_product"></td>
		    </tr>
		   
		</table>

	</form>
	<?php
	include("Connect.php");
	if(isset($_POST['insert_product'])){
		$product_name = $_POST['Product_name'];
		$product_price = $_POST['Product_Price'];
		$product_description = $_POST['Product_description'];

		$product_image = $_FILES['Product_Image']['name'];
		$product_image_tmp = $_FILES['Product_Image']['tmp_name'];
		move_uploaded_file($product_image_tmp,"Images/$product_image");

		$sql =" INSERT INTO products VALUES(NULL,'$product_name','$product_price','$product_image')";
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