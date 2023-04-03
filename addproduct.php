<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" href="style2.css">
</head>

<body>
	 <div class="wrapper">
        <div class="header">
            <h1 style= "text-align:center;">ORDER FOOD DELIVERY <h1>
            <div class="logo">
                <img src="http://doanhealthy.com/wp-content/uploads/2021/11/a2.png" height="80px">
            </div>
        
            
            <div id="form_seach">
                <form method="get" action="http://localhost/Mywebsite/seach.php" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="Search a Product" />
                <input type="submit" name="search" value="Search" />
            </form>
        </div> 
    </div>
       
        <div class="menu">
            <ul >
                <li> <a href="http://localhost/Mywebsite/demobanhang.php"  >Home </a></li>
                <li> <a href="" > Introduce</a> </li>
                <li> <a href=" http://localhost/Mywebsite/addproduct.php" > Add Product </a></li>
                <li> <a href="http://localhost/Mywebsite/login.php">Log in</a></li>
                <li> <a href="" >Log out</a></li>
            </ul>

        </div>
        <form method="POST" enctype="multipart/form-data">

		<table width= "100%px" heigh="200px" border="2" cellpadding="5" align = "center" >
			<colgroup>
 
  		<col span="2" style="background-image :url(https://img.wallpapersafari.com/desktop/800/450/55/81/RSKAxh.jpg)">
		</colgroup>
		<tr>
			<th colspan= "2" style="font-size:30px; font-family: Serif;"> ADD PRODUCT </th>


		</tr>
		<tr >
		    <td> ProductID </td>
		    <td> <input type="text" name="product_id" placeholder="Enter Product ID"></td>
			</tr>
			<tr>
				<td> Name </td>
				<td><input type="text" name="product_name" placeholder="Enter Product Name"></td>
			</tr> 
			<tr>
				<td> Image </td>

				<td><input type="file" name="product_image" ></td>

				
			</tr> 
			<tr>
				<td> Price </td>
				<td><input type="text" name="product_price" placeholder="Enter Product Price"></td>
			</tr> 
			<tr>
				<td> Description </td>
				<td><input type="text" name="product_desc" placeholder="Enter Product Description"></td>
			</tr> 
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="add" value="Add Product">
					<a href="http://localhost/Mywebsite/register.php" > Register? </a></li>
				</td>

			</tr>
		</table>
	</form>
	<?php
	$connect = mysqli_connect('localhost', 'root','', 'database');
	if ($connect) {
		echo "Kết nối thành công";
	}
	else{
		echo "kết nối thất bại";
	}
	if (isset($_POST['add'])) {
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		// chú ý nhận dữ liệu file từ form
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];

		move_uploaded_file($product_image_tmp,  "Img/$product_image");
		// viết SQL
		$sql = "INSERT INTO products VALUES('$product_id','$product_name','$product_image','$product_price','$product_desc' )";
		$result = mysqli_query($connect, $sql);
		if($result) {
			echo "<script>alert('Thêm sản phẩm thành công')</script>";
			echo "<script>window.open('demobanhang.php','_self')</script>";
		}
		else{
			echo "<script>alert('Thêm thất bại')</script>";
		}

	}
	?>


</body>
</html>
