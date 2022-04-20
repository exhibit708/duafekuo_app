<?php

if(isset($_POST['sumbit'])){
    
    include "../includes/dbh.inc.php";

    $password=$_POST['confirm'];

    $sql="select * from admin where adminPassword=?;";
    $stmt=mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt,$sql)){
           
        header("location:admin.php?error=fail");
                  exit();

  }
  else{
      mysqli_stmt_bind_param($stmt,"s",$password);
      mysqli_stmt_execute($stmt);
      
      $result=mysqli_stmt_store_result($stmt);

      $row=mysqli_stmt_num_rows($stmt);
      if($row > 0){
        header("location:questionAdmin.php?");
               exit();    
    }
    else{
        
        header("location:admin.php?erro=wrongpwd");
        
        exit();
    }

}
}