<?php
 session_start();
if(isset($_GET['id'])){
    require 'php/includes/dbh.inc.php';
    //require 'header.php';
   $id=$_GET['id'];

   $sql="select * from product where productId='$id';";
   $query=mysqli_query($connect,$sql);
   $results=mysqli_num_rows($query);
   while($row=mysqli_fetch_assoc($query)){
   $productname=$row['productName'];
$productprice=$row['productPrice'];
$productimage=$row['productImage'];
$productdesc=$row['productdesc'];
$qty=1;
$totalPrice=$productprice*$qty;
$date=date("Y-m-d h-i-s");

$sqlcart="select * from cart where productId='$id';";
$query=mysqli_query($connect,$sqlcart);
$results=mysqli_num_rows($query);

if($results > 0){
    header("location:index.php?error=itemExits");
    exit(); 
}
else{
   
    $add_to_cart_query="insert into cart(productId,productName,productPrice,productImage,productQty,productTotalPrice,	productdesc,datePurshase) values ('$id','$productname','$productprice','$productimage','$qty','$totalPrice','$productdesc','$date')";
    $add_to_cart_result=mysqli_query($connect,$add_to_cart_query);
    header("location:index.php?add=".$id);
   }


   }

   
}
if(isset($_GET['cartItem'])&& isset($_GET['cartItem'])=="cartCount"){
    require "php/includes/dbh.inc.php";

$sql="select * from cart;";
$query=mysqli_query($connect,$sql);
$results=mysqli_num_rows($query);

echo $results;
}

if(isset($_POST['id'])){
    require "php/includes/dbh.inc.php";
    $id=$_POST['id'];
    $output="";
    $sql="select * from product where productId ='$id';";
    $query=mysqli_query($connect,$sql);
     $results=mysqli_num_rows($query);
     while($row=mysqli_fetch_assoc($query)){
   $output.="
   <div class='card mb-3' style='max-width: 540px;'>
  <div class='row g-0'>
    <div class='col-md-4'>
    <figure class='imghvr-fall-away-ccc'>
      <img
        src='images/uploads/". $row['productImage']."'
        class='img-fluid w-100'
      />
      <figcaption>
      <h3>buy now!</h3>
      </figcaption>
      </figure> 
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <h4 class='card-title text-center'>". $row['productName']."</h4>
        <p class='card-text'>
        ". $row['productDesc']."
        </p>
        <p class='card-text'>
          <p class='text-muted'> ". $row['productPrice']."GH₵</p>
        </p>
      </div>
      <i class='fas fa-star' style='color:yellow;'></i>
      <i class='fas fa-star' style='color:yellow;'></i>
      <i class='fas fa-star' style='color:yellow;'></i>
      <i class='fas fa-star' style='color:yellow;'></i>
      <i class='fas fa-star' style='color:yellow;'></i>
    </div>
  </div>
</div>
   
   
   
   ";

     }
     echo $output;
}

