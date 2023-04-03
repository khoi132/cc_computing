<!DOCTYPE html>
 <html>
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
  
 <div>
 <div>
    <?php 
    $connect = mysqli_connect('localhost','root','','database');
  if(!$connect){
    echo"Kết nối thất bại";
  }
    $id = $_GET["id"];
    $sql="SELECT * FROM products WHERE product_id= $id ";
    $result= mysqli_query($connect,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
       $product_id = $row['product_id'];
       
     ?>

      <div style="float:left ; background-image:url(https://haycafe.vn/wp-content/uploads/2022/03/Anh-nen-mau-hong-pastel-tron-dep-nhat.jpg);">


        <img src="Img/<?php echo $row['product_image']?>"; style="width: 700px;height: 600px" >
        </div>
        <div style=" text-align: left">
        <h2 style=" font-family: Serif; font-size: 50px " >Name Of Product: <?php echo $row['product_name'] ?></h2>
        <p style="color: red;font-family: Georgia; padding-left: 20px;font-size: 25px "> Price: <?php echo $row['product_price']." $"; ?></p>   

        <br>
        <br>
         <a href='cart.php?add_cart=<?php echo $product_id ?>'>
          <button style='float:right'>Add to Cart</button>
          </a>   
          <?php// echo $row['product_add_cart'];?>
          <br>
          <br>
          <div style="border-bottom: 1px solid black"></div>
          <br>
        <h2 style=" font-family: Serif; font-size: 50px ">
          Basic product info:
        </h2>               
        <p style=" font-family: Georgia; font-size: 20px "><?php echo $row["product_des"] ?></p>
            

        <?php
      }
      ?>
     </div>
     </div>
    
 </body>
 </html>