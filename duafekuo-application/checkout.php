<?php
if(!isset($_SESSION['id'])){
  header("location:index.php");
}
require "header2.php";
require "php/includes/dbh.inc.php";
$grand_total=0;
$all_items="";
$items=array();

$sql="select concat(productName,'(',productQty,')') as itemQty,productTotalPrice from cart;";
$query=mysqli_query($connect,$sql);
$results=mysqli_num_rows($query);

while($rows=mysqli_fetch_assoc($query)){
    $grand_total+=$rows['productTotalPrice'];
    $items[]=$rows['itemQty'];

}

$all_items=implode(",",$items);

?>
<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 px-4 mt-4" id="order">
            <h4 class="text-center text-info p-2 mt-5">complete your order!</h4>
            <div class="jumbotron p-3 mb-2 text-center">
                <h6 class="lead"><b>products(s) :&nbsp;</b><?= $all_items; ?></h6>
                <h6 class="lead"><b>Delivery charge :&nbsp;</b>free</h6>
                <h5><b> Total Amount payable: &nbsp;</b><?= number_format( $grand_total,2)?>GH₵</h5>


            </div>
            <form action="" method="POST" id="validate-form" class="was-validated">
                <input type="hidden" name="product" value="<?= $all_items?>">
                <input type="hidden" name="grandTotal" value="<?= $grand_total?>">

         
                <div class="form-group">
                <label for="name">your name:</label>
                <input type="text" class="form-control" placeholder="enter name" name="name" required  data-parsley-trigger="keyup">
                       </div>
             
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" placeholder="Enter email" name="email" required data-parsley-type="email" data-parsley-trigger="keyup">
        </div>
        <div class="form-group">
            <label for="name">phone:</label>
            <input type="tel" class="form-control" placeholder="phone" name="phone" required data-parsley-pattern="^[0-9+]+$" data-parsley-trigger="keyup">
          </div>

          <div>
    <div class= "mb-5">
      <textarea name="address" placeholder="enter delivery address" class="form-control"  required></textarea>
      <div class="invalid-feedback">Please enter your address in the textarea.</div>
    </div>
  </div>

        <p>
  
  <select name="mode" required="" class="form-control">
    <option value="" selected disabled>-Select Payment Mode-</option>
    <option value="cod">-cash on delively-</option>
    <option value="momo">-mobile money-</option>
    <option value="debit" >-debit/visa card-</option>
  </select>
  </p>

        <div class="form-group">    
        <button type="submit" class="btn btn-danger btn-block" id="place">Place Order</button>
        </div>
            </form>

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





<!-- popup alert -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-e54972c7-5588-4c1a-b41c-18ed3ddb7f33"></div>

<script>
$(document).ready(function(){
$("#validate-form").parsley();

$("#validate-form").on("submit",function(event){
event.preventDefault();
if($("#validate-form").parsley().isValid()){
$.ajax({
url:"php/pages/order.php",
method:"POST",
data:$(this).serialize()+"&action=order",
beforeSend:function(){
$("#place").attr("disabled","disabled");
$("#place").val("submitting....");

},
success:function(data){
  $("#validate-form")[0].reset();
  $("#validate-form").parsley().reset();
  $("#place").attr("disabled",false);
  $("#place").val("submit");
  $("#order").html(data);
}



})

}
})

});



    </script>
    <!-- bootsrap s5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 