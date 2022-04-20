<?php
if(isset($_POST['upload'])){


 $name  =  trim(strtolower($_POST['name']));
 $price  =  trim(strtolower($_POST['price']));
 $discount=trim(strtolower($_POST['discount']));
 $cartegory=trim(strtolower($_POST['cartegory']));
 $desc  =  trim(strtolower($_POST['desc']));

 $time= date("Y-m-d h-i-s");


        $file=$_FILES["file"];

        $fileName=$file["name"];
        $fileSize=$file["size"];
        $fileTempName=$file["tmp_name"];
        $fileError=$file["error"];
        $fileType=$file["type"];

$fileExt=explode(".",$fileName);
$fileActualExt=strtolower(end($fileExt));
$allow=array("jpg","jpeg","png");

if(in_array($fileActualExt,$allow)){
   if($fileError===0){
   if($fileSize < 3000000){
    $fileNewName=uniqid("product",true).".".$fileActualExt;
    $Destination="../../images/uploads/".$fileNewName;
    include "../includes/dbh.inc.php";
    $sql="insert into product(productName,productPrice,productImage,discount,cartegory,productDesc,productDate)values(?,?,?,?,?,?,?);";
    $stmt=mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt,$sql)){
          header("location:questionAdmin.php?error=sommethingwrong");
                  exit();

  }
  else{
      mysqli_stmt_bind_param($stmt,"sssisss",$name, $price,$fileNewName, $discount, $cartegory,$desc,$time);
      mysqli_stmt_execute($stmt);
      move_uploaded_file($fileTempName,$Destination);
      header("location:questionAdmin.php?upload=success");
      exit();
  }

   }
   else{
    header("location:questionAdmin.php?error=filesizeBig");
    exit();
   }
}
   else{
    header("location:questionAdmin.php?error=error");
    exit(); 
   }
}

else{
    header("location:questionAdmin.php?error=notallow");
    exit();
}

}
if(isset($_POST['del'])){

    include "../includes/dbh.inc.php";
 $name  =  trim(strtolower($_POST['name']));
 $code  =  trim(strtolower($_POST['code']));
    $sql="delete from product where productName='$name' or productId='$code';";
$query=mysqli_query($connect,$sql);
header("location:questionAdmin.php?success=deleted");
exit();
   
}

