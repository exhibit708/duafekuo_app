<?php

if(isset($_POST['login'])){
    //includes the datase connection
    require 'dbh.inc.php';
    
    //grabbibg the user input
    
    $uid=trim(strtolower($_POST['uid'])); 
    
    $password=trim(strtolower($_POST['pwd'])); 
    
    //checking for empty fields
  
        $sql="select * from customer where customerUserName=? or customerPassword=?;";
        
        $stmt=mysqli_stmt_init($connect);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
           
              header("location:../../login.php?error=connectionfail");
                        exit();
      
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$uid,$password);
            mysqli_stmt_execute($stmt);
            
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                
                $verification=password_verify($password,$row['customerPassword']);
                
                if($verification == false){
                  
              header("location:../../login.php?error=wrongpassword");
                        exit();
        
                }
                elseif($verification==true){
                    session_start();
                    $_SESSION['id'] = $row['customerId'];
                    $_SESSION['uid'] = $row['customerUserName'];
                    $_SESSION['fullName'] = $row['customerFullName'];
                    $_SESSION['customerCountry'] = $row['customerCountry'];
                    
                    header("location:../../index.php?login=sucess");
                    exit();
                    
                }
             
            }
               else{
                           
              header("location:../../login.php?error=wronguidorpassword");
                        exit();
                }
             
        }
    

    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    
}else{
    header("location:../../login.php");
    exit();
}
