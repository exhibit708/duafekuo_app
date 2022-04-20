
<?php
include_once("header.php");
?>
 
<div class="container-fluid mt-5"
 id="main-login">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">



<!-- Pills content -->

    <form action="php/includes/login.inc.php" method="POST" id="validate-form" class="mt-5">
      <div class="text-center mb-3 ml-3">
        <p>Sign in with:</p>
        <a href="" class="btn btn-primary ml-3 data-mdb-toggle="tooltip title="daufekuo facebbok" style="border-radius: 20%;">
        <i class="fab fa-facebook-f"></i>
        </a>
     

        <a href="" class="btn btn-primary ml-3 bg-info" style="border-radius: 20%;">
        <i class="fab fa-twitter data-mdb-toggle="tooltip title="daufekuo twitter"></i>
        </a>
         
        <a href="" class="btn btn-primary ml-3 data-mdb-toggle="tooltip title="daufekuo instagram" style="border-radius: 20%;">
        <i class="fab fa-instagram "></i>
        </a>

        <a href="" class="btn btn-primary ml-3  bg-danger data-mdb-toggle="tooltip title="daufekuo youtube" style="border-radius: 20%;">
        <i class="fab fa-youtube"></i>
        </a>

      </div>

      <p class="text-center">or:</p>
      <!-- success info -->
      <?php
if(isset($_GET['register'])){
  if($_GET['register']=="success"){
    ?>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>

</svg>
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
successfully registered!
  </div>
</div>

 <?php
  }

}
?>

<?php
if(isset($_GET['error'])){
  if($_GET['error']=="connectionfail"){
    ?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    connection problem!
  </div>
</div>

<?php

  }
  elseif($_GET['error']=="wrongpassword"){
    ?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>
  invalid password credentials!
</div>
</div>


    <?php
  }
  elseif($_GET['error']=="wronguidorpassword"){
?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>
  invalid username credentials!
</div>
</div>

<?php

  }

}

?>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" id="loginName" class="form-control" name="uid" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup"/>
        <label class="form-label" for="loginName">username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4 input-group">
        <input type="password" id="loginPassword" class="form-control" name="pwd" required data-parsley-length="[8,13]" data-parsley-trigger="keyup"/>
        <label class="form-label" for="loginPassword">Password</label>
        <div class="input-group-prepend">
          <div class="input-group-text">
            <a href="#" class="text-dark" id="icon-id">
         <i class="fas fa-eye" id="icon"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check mb-3 mb-md-0">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="loginCheck"
              
            />
            <label class="form-check-label" for="loginCheck"> Remember me </label>
          </div>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
          <!-- Simple link -->
          <a href="">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4" id="signIn" name="login">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>

</div>

 


        
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="1" d="M0,128L30,112C60,96,120,64,180,64C240,64,300,96,360,122.7C420,149,480,171,540,176C600,181,660,171,720,144C780,117,840,75,900,64C960,53,1020,75,1080,106.7C1140,139,1200,181,1260,181.3C1320,181,1380,139,1410,117.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
</div>
<script>
  $(document).ready(function(){
$('#icon-id').click(function(){
$('#icon').toggleClass('fa-eye-slash');
var input=$("#loginPassword");
if(input.attr("type")==="password"){

  input.attr("type","text");
}
else{
  input.attr("type","password");
}


});


  });
</script>


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

</body>
</html>