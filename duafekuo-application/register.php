<?php
include_once("header.php");


include_once "php/includes/dbh.inc.php";

$sql="select 	Name from country order by 	Name asc;";
$query=mysqli_query($connect,$sql);

$row=mysqli_num_rows($query);

?>


<div class="container mt-5 bg-light" id="main-login">
<div class="row row-cols-1 row-cols-md-2 g-4">
<div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
           <!-- Pills navs -->
  
    <form action="php/includes/signup.inc.php" method="POST" class="demo-form  mt-5">
      <div class="text-center mb-3 ml-3">
        <p>Sign in with:</p>
        <a href="" class="btn btn-primary ml-3 data-mdb-toggle="tooltip title="duafekuo facebbok" style="border-radius: 20%;">
        <i class="fab fa-facebook-f"></i>
        </a>
     

        <a href="" class="btn btn-primary ml-3 bg-info" style="border-radius: 20%;">
        <i class="fab fa-twitter data-mdb-toggle="tooltip title="duafekuo twitter"></i>
        </a>
         
        <a href="" class="btn btn-primary ml-3 data-mdb-toggle="tooltip title="duafekuo instagram" style="border-radius: 20%;">
        <i class="fab fa-instagram "></i>
        </a>

        <a href="" class="btn btn-primary ml-3  bg-danger data-mdb-toggle="tooltip title="duafekuo youtube" style="border-radius: 20%;">
        <i class="fab fa-youtube"></i>
        </a>

      </div>

      <p class="text-center">or:</p>
<!-- erro check -->
<?php
if(isset($_GET['error'])){
  if($_GET['error']=="emailexits"){
    ?>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
 
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
   email aready exits
  </div>
</div>

 <?php
  }
  elseif($_GET['error']=="emailexits"){
    ?>
   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
 
 <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
   <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
 </symbol>
 
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
 <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
 <div>
  somethieg went wrong
 </div>
</div>
    <?php
  }
}
?>

      <!-- Email input -->
      <div class="form-section">
    <label for="fullname">FullNAME:</label>
    <input type="text" class="form-control" name="fullname" placeholder="fullname" id="fullname" required="">

    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" placeholder="email" id="email" required="">
      <!-- address -->
    <label for="address">ADDRESS:</label>
    <input type="text" class="form-control" name="address" placeholder="address" id="address" required="">
   
  </div>

      <!-- SECTION -->
      <div class="form-section">
      <label for="uid">USERNAME:</label>
    <input type="text" class="form-control" name="username" id="uid" placeholder="username" required="">
  <!-- DATE OF BIRTH -->
    <label for="data_ofBirth">DATE OF BIRTH:</label>
    <input type="date" class="form-control" name="date" id="data_ofBirth" required="">
   <!-- CONTACT -->
    <label for="contact">CONTACT:</label>
    <input type="number" class="form-control" name="contact" id="contact" placeholder="contact" required="">
  </div>
  <!-- COUNTRY CODE -->
  <div class="form-section">
  <label for="Ccode">COUNTRY CODE:</label>
    <input type="number" class="form-control" name="code" id="Ccode" placeholder="countryCode" required="">

   <!-- COUNTRY -->

   

    <label for="country">COUNTRY:</label>
<select id="country" required="" class="form-control selectpicker" data-live-search="true" name="country">
  <?php
while($row=mysqli_fetch_assoc($query)){
  ?>
<option value=<?php echo $row['Name']?>><?php echo $row['Name']?></option>
<?php
}
  ?>
  
  </select>

<!-- GENDER -->
  <label for="gender">GENDER:</label>

  <select id="gender" required="" class="form-control mb-5" name="gender">
    <option >Choose..</option>
    <option value="male">MALE</option>
    <option value="female">FEMALE</option>
    <option value="none">NONE</option>
    
  </select>
  </div>

  <div class="form-section">
  <label for="pwd">PASSWORD:</label>
    <input type="password" class="form-control" name="pwd" placeholder="password" id="pwd" required="" data-parsley-length="[8,13]" data-parsley-trigger="keyup">
   
    <label for="confirm-pwd">CONFIRM PASSWORD:</label>
    <input type="password" class="form-control" name="password-repeat" placeholder="confirm password" id="confirm-pwd" required="" data-parsley-equalto="#pwd" data-parsley-trigger="keyup">

  </div>  

  <div class="form-navigation">
    <button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>
    <button type="button" class="next btn btn-info pull-right">Next &gt;</button>
    <input type="submit" class="btn btn-default pull-right btn-success" name="register">
    <span class="clearfix"></span>
  </div>
      <!-- 2 column grid layout -->
      

     

      <!-- Register buttons -->
      <div class="text-center">
        <p>already a member? <a href="login.php">login</a></p>
      </div>
    </form>
  </div>
</div>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,128L30,112C60,96,120,64,180,64C240,64,300,96,360,122.7C420,149,480,171,540,176C600,181,660,171,720,144C780,117,840,75,900,64C960,53,1020,75,1080,106.7C1140,139,1200,181,1260,181.3C1320,181,1380,139,1410,117.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>

</div>


  
<script>
 $(document).ready(function(){

  $(".selectpicker").selectpicker();
});
</script> -->
  <!-- MULTISTEP JAVASRICPT -->
  <script type="text/javascript">
$(function () {
  var $sections = $('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'
    $sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    navigateTo(curIndex() - 1);
  });

  // Next button goes forward iff current block validates
  $('.form-navigation .next').click(function() {
    $('.demo-form').parsley().whenValidate({
      group: 'block-' + curIndex()
    }).done(function() {
      navigateTo(curIndex() + 1);
    });
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  $sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});
</script>



<!-- parsely javasript -->
<script src="js/parsley.min.js"></script>
  
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
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
</body>
</html>