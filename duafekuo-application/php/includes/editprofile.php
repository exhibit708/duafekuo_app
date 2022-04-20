<?php


session_start();
 $active=$_SESSION['id'];

if(isset($_POST['edit'])){
    include_once "dbh.inc.php";
    $fname=trim(strtolower($_POST['fName']));
    $mail=trim(strtolower($_POST['email']));
    $addres=trim(strtolower($_POST['addres']));
    $uid=trim(strtolower($_POST['uid']));
    $date=trim(strtolower($_POST['date']));
    $mobile=trim(strtolower($_POST['mobile']));
    $country=trim(strtolower($_POST['country']));
    $code=trim(strtolower($_POST['code']));
    $gender=trim(strtolower($_POST['gender']));



    $sql="update customer set customerFullName='$fname',customerEmail='$mail',customerAddress='$addres',customerUserName='$uid',customerDateOfBirth= $date,customerContact='$mobile',customercountryCode='$code',customerCountry=' $country',customerGender='$gender' where customerId='$active';";

    $query=mysqli_query($connect,$sql);

        header("location:../../edit.php?edited=success");
        exit();

}