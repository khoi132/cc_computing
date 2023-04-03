<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
                <form>
                    <input type="text" name="seach" placeholder="Seach">
                    <input type="submit">
                </form>
            </div>
             </div>
	  <div class="menu">
            <ul>
                <li> <a href="http://localhost/Mywebsite/demobanhang.php"  >Home </a></li>
                <li> <a href="" > Introduce</a> </li>
                <li> <a href="http://localhost/Mywebsite/addproduct.php" >Add product </a></li>
                <li> <a href="http://localhost/Mywebsite/login.php">Log in</a></li>
                <li> <a href="" >Log out</a></li>
            </ul>

        </div>
	<form method="POST">
		<table width= "100%px" heigh="200px" border="2" cellpadding="5" align = "center" >
			<colgroup>
 
  <col span="2" style="background-image :url(https://img.wallpapersafari.com/desktop/800/450/55/81/RSKAxh.jpg)">
</colgroup>
		<tr>
			<th colspan= "2"> REGISTER </th>


		</tr>
		<tr >
		    <td> UserID </td>
		    <td> <input type="text" name="user_id" placeholder="UserID"></td>
			</tr>
			<tr>
				<td>UserName</td>
				<td><input type="text" name="username" placeholder="UserName"></td>
			</tr> 
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr> 
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="register" value="Register">
					
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
	if (isset($_POST['register'])) {
		$user_id = $_POST['user_id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
	
	$sql = "INSERT INTO users VALUES('$user_id', '$username', '$password')";
	$result = mysqli_query($connect, $sql);
	if ($result) {
		echo "<script>alert('thêm thành công') </script>";
		echo "<script>window.open('demobanhang.php','_self')</script>";
	}
	else{
		echo "<script>alert('Thêm thất bại') </script>";
		
	}
}
	?>

</body>
</html>