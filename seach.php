<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="stylebanhang.css">

</head>
<body>
	 <div class="wrapper">
        <div class="header">
            <a href="http://localhost/Mywebsite/demobanhang.php">

        	<h1 style= "text-align:center;">ORDER FOOD DELIVERY <h1>
            <div class="logo">
            	<img src="http://doanhealthy.com/wp-content/uploads/2021/11/a2.png" height="80px">
            </div>
        </a>
        
       
            
            <div id="form_seach">
                <form method="get" action="http://localhost/Mywebsite/seach.php">
                <input type="text" name="user_query" placeholder="Search a Product" />
                <input type="submit" name="search" value="search" />
            </form>
        </div> 
    </div>
       
        <div class="menu">
            <ul>
                <li> <a href="http://localhost/Mywebsite/demobanhang.php"  >Home </a></li>
                <li> <a href="" > Introduce</a> </li>
                <li> <a href=" http://localhost/Mywebsite/addproduct.php" > Add Product </a></li>
                <li> <a href="http://localhost/Mywebsite/login.php">Log in</a></li>
                <li> <a href="" >Log out</a></li>
            </ul>

        </div>
        <div class=" content" >
        
            <div class="left">
                <ul style="line-height:300%"; >
                    <li> <a href="http://localhost/Monan/monviet.php" > Vietnamese  </a></li>
                    <li> <a href="http://localhost/Mywebsite/demobanhang.php" > Korean food  </a></li>
                    <li> <a href="http://localhost/Monan/monnhat.php" > Japanese food </a></li>
                    <li> <a href="http://localhost/Monan/doanvat.php" > Fastfood </a></li>
                    <li> <a href="http://localhost/Monan/douong.php" > Drink  </a></li>
                    
                </ul>
            </div>
            <div class="right">
    <?php
    $connect = mysqli_connect('localhost','root','','database');
  if($connect){
    echo"Kết nối thành công";
  }
  else{echo "Kết nối thất bại";}

    if (isset($_GET['search'])) {
        $search = $_GET['user_query'];
          
    }
    ?>    
    <div class ="products_box">     
      <h3> Kết quả tìm kiếm cho sản phẩm <?php $search ?> là: </h3>
        <?php
        
        $sql ="select * from product WHERE product_name LIKE '%{$search}%'";

        $result = mysqli_query($connect,$sql);
        /* tìm và trả về kết quả dưới dạng 1 mảng*/
        while($row_product=mysqli_fetch_array($result)){
          $product_id = $row_product['product_id'];
          $product_name = $row_product['product_name'];
          $product_price = $row_product['product_price'];
          $product_image = $row_product['product_image'];

          echo"
          <div class='single_product'>
          <h3><b> $product_name</b></h3>
          <img src='Img/$product_image' width='180' height='180' />
          <p><b> Price:$product_price $</b></p>
          <a href='single.php?id=$product_id'>Details</a>
          <a href='index.php?add_cart=$product_id'>
          <button style='float:right'>Add to Cart</button>
          </a>            
          </div>       
          ";
      }
      ?>
      

  </div>
</div>
</div>
<div class="footer">
</div>
</div>
</body>
</html>