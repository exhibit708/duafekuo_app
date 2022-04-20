<?php
if(isset($_POST['name'])){
    require "../includes/dbh.inc.php";

    $data=array(
"pid" =>$_POST['id'],
"pname"=>$_POST['name'],
"pPrice"=>$_POST['price'],
"pImage"=>$_POST['image'],
"qty"=> 1,
"total"=>$_POST['price'],
"pDesc"=>$_POST['desc'],
"date"=>date("Y:m:d h:i:s")
 );

$sql="select  * from cart where productId=?;";
    $stmt=mysqli_stmt_init($connect);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
           echo "SOMETING WENT WRONG";
           exit();
       }
        else{
            mysqli_stmt_bind_param($stmt,"i",$data['pid']);
            mysqli_stmt_execute($stmt);
            
            mysqli_stmt_store_result($stmt);
            
            $results=mysqli_stmt_num_rows($stmt);
            
            if($results > 0){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                item  already added to you cart
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                exit();
            }
            else{
                $sql="insert into cart(productId,productName,productPrice,productImage,productQty,productTotalPrice,productdesc,datePurshase)values(?,?,?,?,?,?,?,?)";
                $stmt=mysqli_stmt_init($connect);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo "SOMETING WENT WRONG";
                    exit();
                }
                 else{
                     mysqli_stmt_bind_param($stmt,"isssisss",$data['pid'],$data['pname'],$data['pPrice'],$data['pImage'],$data['qty'],$data['total'],$data['pDesc'],$data['date']);
                     mysqli_stmt_execute($stmt);
                     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                     item added to you cart
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 exit();

                 }
                
            }
                
        
            
             
        }


    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    
    }

//     if(isset($_GET['cart_num'])){
//         $sql="select * from cart";
// $query=mysqli_query($connect,$sql);
//  $results=mysqli_num_rows($query);
//  echo $results;
//     }