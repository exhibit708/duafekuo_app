<?php
if(isset($_POST['uid'])){
require "../includes/dbh.inc.php";

$data=array(
"uid" =>trim(strtolower($_POST['uid'])),
"pwd"=> trim(strtolower($_POST['pwd']))
);
    $sql="select * from admin where adminName=? or adminPassword=?;";
    
    $stmt=mysqli_stmt_init($connect);
    
    if(!mysqli_stmt_prepare($stmt,$sql)){
       
        echo "CONNECTION FAIL";
        exit();
    }
    
    else{
        mysqli_stmt_bind_param($stmt,"ss",$data['uid'],$data['pwd']);
        mysqli_stmt_execute($stmt);
        
        $result=mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($result)){
            
            $verification=password_verify($data['pwd'],$row['adminPassword']);
            
            if($verification == false){
              
          echo "wrong password";
          exit();
    
            }
            elseif($verification==true){
                session_start();
                
                $_SESSION['adim'] = $row['adminName'];
                
            
                
            }
         
        }
           else{
                       
          header("location:../login.php?error=wronguidorpassword");
                    exit();
            }
         
    


mysqli_stmt_close($stmt);
mysqli_close($connect);

}



}
else{
    header("location:../../index.php");
    exit();
}