<?php
include "header.php";
 $user =  $_SESSION['fullName'];
include "php/includes/dbh.inc.php";

$sql="select * from customer where customerFullName='$user'";
$query=mysqli_query($connect,$sql);
$results=mysqli_num_rows($query);

?>
<div class="container mb-5" id="main-login">
    <div class="row mt-5">
        <div class="col mb-5">
            <form action="php/includes/editprofile.php" method="POST">
            <h5 class="text-center text-info mt-5 mb-4">EDIT PROFILE &nbsp; <i class="fas fa-edit"></i></h5>
                <?php
              while($rows=mysqli_fetch_assoc($query)){
                 ?>  
  <div class="input-group mb-3">
  
  <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">FULLNAME</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $rows['customerFullName'] ?>" name="fName">
</div>
<div class="input-group mb-3">
  <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">EMAIL</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $rows['customerEmail'] ?>" name="email">
</div>
<div class="input-group mb-3">
  <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">ADDRESS</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $rows['customerAddress'] ?>" name="addres">
</div>
<div class="input-group mb-3">
  <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">USERNAME</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $rows['customerUserName'] ?>" name="uid">
</div>
<div class="input-group mb-3">
  <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">DATE OF BIRTH</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $rows['customerDateOfBirth'] ?>" name="date">
</div>
<div class="input-group mb-3">
  <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">MOBILE</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $rows['customerContact'] ?>" name="mobile">
</div>
<div class="input-group mb-3">
  <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">COUNTRY</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $rows['customerCountry'] ?>" name="country">
</div>
<div class="input-group mb-3">
  <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">COUNTRY CODE</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $rows['customercountryCode'] ?>" name="code">
</div>
<div class="input-group mb-3">
  <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">GENDER</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $rows['customerGender'] ?>" name="gender">
</div>


<?php
              }
                ?>
               
      
               <button type="submit" class="btn btn-success btn-block" name="edit">save changes</button>


            </form>


        </div>
    </div>
</div>
<br><br>

          
   


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61059f01d6e7610a49adf098/1fbuva8vm';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>