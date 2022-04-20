<?php
require "header2.php";
include "php/includes/dbh.inc.php";
$sql="select * from cart";
$query=mysqli_query($connect,$sql);
 $results=mysqli_num_rows($query);
 $grand_total=0;

?>
<div class="container mt-5">
    <div class="row mt-5">
       
        <div class="col mt-5">
        <?php
if(isset($_GET['delete'])){
    if($_GET['delete']=="all"){
        ?>
         <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>

</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert" style="margin-top:93px;">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="danger:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
all items deleted from your cart!
  </div>
</div>


<?php
    }
    elseif($_GET['delete']=="success"){
        ?>
       <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>

</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert" style="margin-top:93px;">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="danger:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
item deleted from your cart!
  </div>
</div>


<?php

    }
    elseif($_GET['delete']=="error"){
        ?>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>

</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert"  style="margin-top:93px;">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="danger:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
error deleted your item!
  </div>
</div>
        <?php
    }
}
        ?>
            <h6  style="margin-top:103px;">CART ( <span class="text-danger"><?php echo  $results; ?></span> ITEMS IN YOUR CART) </h6>
            <table class="table table-responsive mt-5 bg-white">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product</th>
      <th scope="col">image</th>
      <th scope="col">quantity</th>
      <th scope="col">price</th>
      <th scope="col">total</th>
      <th scope="col">
<a href="clear.php?all=items" class="text-danger" onclick="return confirm('are you sure to clear all items in your cart?');"><i class="fas fa-trash-alt"></i> &nbsp; clear all </a>
      </th>
    </tr>
  </thead>
  <tbody>
      <?php
      while($row=mysqli_fetch_assoc($query)){
        
          ?>
 <tr>
     <td><?= $row['productId'];?></td>
     <input type="hidden" class="form-control pid" value="<?= $row['productId'];?>">
     <td><?= $row['productName'];?></td>
     <td><img src="images/uploads/<?php echo $row['productImage'] ?>" style="width: 66px;"></td>
     <td><div class="form-outline">
  <input type="number" max="100" min="1" id="typeNumber" class="form-control itemQty" value="<?= $row['productQty']; ?>" style="width: 70px;" />
  <label class="form-label" for="typeNumber"></label>
</div>     
     </td>
     <td><span><?= number_format($row['productPrice'],3)?> &nbsp;GH₵</span></td>
     <input type="hidden" value="<?= $row['productPrice'];?>" class="form-control pprice">
     <td><span><?= number_format($row['productTotalPrice'],3)?> &nbsp;GH₵</span></td>
     <td>
     <a href="clear.php?del=<?=$row['productId']?> " class="text-danger" onclick="return confirm('are you sure you want to delete this item in your cart?');"><i class="fas fa-trash-alt"></i>&nbsp; remove</a>
     </td>
</tr>
<?php  $grand_total +=$row['productTotalPrice'];?>


<?php
      }
      ?>
      <tr>
          <td colspan="2">
              <a href="index.php" class="btn btn-outline-primary"> <i class="fas fa-cart-plus"></i> continue shopping</a>
          </td>
          <td colspan="2">
             <h6 class="ml-5"><b >GRAND TOTAL</b></h6>
          </td>
          <td>
          <td><b class="my-5"><?= number_format($grand_total,3)?>&nbsp;GH₵</b></td>
          </td>
          <td>
     <a href="checkout.php" class="btn btn-success <?= ($grand_total>1)?"":"disabled"; ?>"><i class="fas fa-credit-card"></i>&nbsp; checkout</a>
     </td>
      </tr>
  </tbody>
</table>
        </div>
    </div>
</div>



<br><br><br><br>
			
 <!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background:#03644F;">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
     
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            <i class="fas fa-gem me-3" ></i>Duafekuo store
          </h6>
          <p>
          Get all kinds of quality products @ affodable price
		   
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
         <!-- Grid column -->
         <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Support Us!
          </h6>
          <p>
            <a href="#!" class="text-reset">Investors</a>
          </p>
          <p>
            <a href="#!" class="text-reset">donation</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Goals</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vision</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Cutlery</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Appliances</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Utensils</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Decor/Crafts</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Packages/Disposables</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Kumasi ,Ghana</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
			duafekuoventures@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 233 24 582 8985</p>
          <p><i class="fas fa-print me-3"></i>+ 233 24 582 8985</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">Duafekuo.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
        </div>

        <script>
            $(document).ready(function(){
           $(".itemQty").on("change",function(){
            var $el=$(this).closest("tr");
            var pid=$el.find(".pid").val();
            var pprice=$el.find(".pprice").val();
            var pqty=$el.find(".itemQty").val();
            location.reload(true);
             $.ajax({
                url:"clear.php",
                method:"POST",
                cache:false,
                data:{pid:pid,pprice:pprice,pqty:pqty},
               success:function(data){
                   console.log(data);
               }

            });


           });

            });
        </script>
        <!-- popup alert -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-e54972c7-5588-4c1a-b41c-18ed3ddb7f33"></div>
      
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
<!-- bootsrap s5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>