<?php

if(isset($_POST['register'])){
    //GRABBING THE DATABASE CONNECTION
    
      require 'dbh.inc.php';
    
 $fullName=trim(strtolower($_POST['fullname']));     
 $email=trim(strtolower($_POST['email']));   
 $address=trim(strtolower($_POST['address']));   
 $uid= trim(strtolower($_POST['username'])); 
 $date=trim(strtolower($_POST['date'])); 
 $contact=trim(strtolower($_POST['contact'])); 

 $code=trim(strtolower($_POST['code']));
 $country=trim(strtolower($_POST['country']));   
 $gender=trim(strtolower($_POST['gender']));   
 $pwd=trim(strtolower($_POST['pwd']));      
 $repeat_password=trim(strtolower($_POST['password-repeat'])); 
    

        //checking if username exists
        $sql="select * from customer where customerEmail =?;";
        $stmt=mysqli_stmt_init($connect);
        
        //if connection fails
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("location:../../register.php?error=somethingwentwrong");
                       exit();   
            
        }
        //binding the parameters
        else{
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            $results=mysqli_stmt_num_rows($stmt);
            
            if($results > 0){
                header("location:../../register.php?error=emailexits");
                       exit();    
            }
            //inserting the data into the database
            $sql="insert into customer(customerFullName,customerEmail,customerAddress,customerUserName,customerDateOfBirth,customerContact,customercountryCode,customerCountry,customerGender,customerPassword)values(?,?,?,?,?,?,?,?,?,?);";
            
            $stmt=mysqli_stmt_init($connect);
        
        //if connection fails
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("location:../../register.php?error=somethingwentwrong");
                       exit();   
            
        }
     
        else{
               //hashing the password
            $hash_password=password_hash($pwd,PASSWORD_DEFAULT);
               //binding the parameters
        mysqli_stmt_bind_param($stmt,"sssssiisss",$fullName,$email, $address,$uid,$date, $contact, $code, $country, $gender,$hash_password);
            mysqli_stmt_execute($stmt);
            header("location:../../login.php?register=success");
            exit();  
         
                
                    
                }
                
            }
            
      
            
        
        
        
    
    
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    
}
else{
    header("location:../../register.php");
    exit();
}