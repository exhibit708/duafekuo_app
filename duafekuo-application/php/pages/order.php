<?php

require "../includes/dbh.inc.php";

if(isset($_POST['action'])&& isset($_POST['action'])=="order" ){

    $name=trim(mysqli_real_escape_string($connect,$_POST['name']));
    $email=trim(mysqli_real_escape_string($connect,$_POST['email']));
    $phone=trim(mysqli_real_escape_string($connect,$_POST['phone']));
    $address=trim(mysqli_real_escape_string($connect,$_POST['address']));
    $mode=trim(mysqli_real_escape_string($connect,$_POST['mode']));
    $product=trim(mysqli_real_escape_string($connect,$_POST['product']));
    $grandTotal=trim(mysqli_real_escape_string($connect,$_POST['grandTotal']));
  $date=date("y-m-d");
    $data="";

    $sql="insert into orders(customerName,customerEmail,customerPhone,customerAddress,paymentMode,product,amountPayable)values(?,?,?,?,?,?,?,?);";

    $stmt=mysqli_stmt_init($connect);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        $data.="someting went wrong";
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"ssisssss",$name,$email,$phone,$address,$mode,$product,$grandTotal, $date);
        mysqli_stmt_execute($stmt);

        $data.="<div class='text-center' style='margin-top:344px;'>
              <h1>thank you</h1>
        
        
        </div>";
        echo $data;
    }
    
}
