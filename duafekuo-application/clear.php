<?php

include "php/includes/dbh.inc.php";

if(isset($_GET['del'])){
    $id=$_GET['del'];

    $sql="delete from cart where productId=?;";
    $stmt=mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt,$sql)){
     header("location:cart.php?delete=error");
     exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"i", $id);
        mysqli_stmt_execute($stmt);
        header("location:cart.php?delete=success");
        exit();
    }



}

if(isset($_GET['all'])){
    $sql="delete from cart;";
$query=mysqli_query($connect,$sql);

header("location:cart.php?delete=all");
exit();
}
if(isset($_POST['pqty'])){
    $pid=$_POST['pid'];
    $pprice=$_POST['pprice'];
    $pqty=$_POST['pqty'];

    $ptotal= $pqty*$pprice;

 $sql="update cart set productQty=?,productTotalPrice=? where productId=?;"; 
 $stmt=mysqli_stmt_init($connect);
 if(!mysqli_stmt_prepare($stmt,$sql)){
  header("location:cart.php?error=fail");
  exit();
 }
 else{
     mysqli_stmt_bind_param($stmt,"isi",$pqty,$ptotal, $pid);
     mysqli_stmt_execute($stmt);
 }

}