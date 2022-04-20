<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>duafekuo online store</title>
    
    <link rel="icon" href="images/logo7.jpg.jpg" style="border-radius: 50%;">
    <link rel="stylesheet" href="css/main.css">
   
    <!-- magnific popup cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="css/jquery.exzoom.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- parseely css -->
<link rel="stylesheet" href="css/parsley.css">
<link rel="stylesheet" href="css/imagehover.min.css">
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>

     <!-- Font Awesome -->
     <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- slick css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<!-- carousel -->
<script src="js/carousel.js"></script>
<!-- parsely javasript -->
<script src="js/parsley.min.js"></script>

</head>
<body> 

<header id="header" class="fixed-top d-flex align-items-center header-transparent">
<div class="container d-flex justify-content-between align-items-center">

<!-- Navbar -->
<nav class="navbar navbar-expand-md  fixed-top" style="background:#03644F;">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="btn btn-white m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fas fa-list-ul" style="color: #fff;"></i></button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
      
      <em class="text-white">Duafekuo</em>
      </span>
      
      </a>
     
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item" style="margin-left: 323px;">
    
        </li>
     
     
      
      </ul>
     
    </div>
    
     

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      
 
    <form action="search.php" method="POST" class="d-flex input-group w-auto mr-4">
      <input
        type="search"
        class="form-control rounded"
        placeholder="Search product..."
        aria-label="Search"
        aria-describedby="search-addon"
        name="inputSearch"
        id="search"
      />
      
        <button type="submit" class="btn btn-primary btn-sm ml-2" name="search" id="btn-search">
        <i class="fas fa-search"></i>
        </button>
       
     
    </form>

   
    
      <!-- Avatar -->
 <!-- Icon -->
 <a class="text-reset me-3 mr-5" href="cart.php">
        <i class="fas fa-shopping-cart" id="owesome" style="color:white;"></i>
        <span class="badge rounded-pill badge-notification bg-danger" id="count-cart"></span>
      </a>

      <?php
if(isset($_SESSION['uid'])){
?>


<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">ABOUT US</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-dark">
  <a class="nav-link text-dark" href="index.php"> <i class="fas fa-home" style="color:dark;"> </i> &nbsp;Home</a>
  <div class="dropdown-divider"></div>
          <a class="nav-link text-dark" href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
          <div class="dropdown-divider"></div>
          <a class="nav-link text-dark" href="register.php"> <i class="fas fa-user-plus"></i> &nbsp;Register</a>
          <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-futbol"></i>&nbsp;Goal</a>
         <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-eye" > </i> &nbsp;Vision</a>
         <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-donate"> </i> &nbsp;Donation</a>
         <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-bookmark"> </i> &nbsp;Investors</a>
         <div class="dropdown-divider"></div>
         <a href="php/pages/admin.php" class="dropdown-item"> <i class="fas fa-address-card"> </i> &nbsp;Admin</a>

      </div>
      <div class="offcanvas-footer" style="background:#03644F;">
      <section class="mb-4 mt-3">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-youtube"></i
      ></a>
    </section>
    <!-- Section: Social media -->
      <div class="text-center text-muted p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="#">Duafekuo.com</a>
  </div>
      </div>

      
  </div>
</div>
    
       <p class="text-white mt-3" > <?= $_SESSION['fullName']; ?></p> 

       <a
        class="dropdown-toggle d-flex align-items-center hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <i
      
          id="owesome"
          class=" fas fa-user rounded-circle"
          height="25"
          alt=""
          loading="lazy"
          style="color:white;"
          >
</i>
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
   
        <li>
          <a class="dropdown-item" href="profile.php"> <i class="fas fa-user"></i>&nbsp;My profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="edit.php"> <i class="fas fa-edit"></i>&nbsp;edit</a>
        </li>
        <li>
          <a class="dropdown-item" href="php/includes/logout.inc.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
        </li>
      </ul>
       
      
<?php
}
else{
  ?>
       

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">ABOUT US</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-dark">
  <a class="nav-link text-dark" href="index.php"> <i class="fas fa-home" style="color:dark;"> </i> &nbsp;Home</a>
  <div class="dropdown-divider"></div>
          <a class="dropdown-item text-dark" href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
          <div class="dropdown-divider"></div>
          <a class="nav-link text-dark" href="register.php"> <i class="fas fa-user-plus"></i> &nbsp;Register</a>
          <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-futbol"></i>&nbsp;Goal</a>
         <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-eye" > </i> &nbsp;Vision</a>
         <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-donate"> </i> &nbsp;Donation</a>
         <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-bookmark"> </i> &nbsp;Investors</a>
         <div class="dropdown-divider"></div>
         <a href="php/pages/admin.php" class="dropdown-item"> <i class="fas fa-address-card"> </i> &nbsp;Admin</a>
  
      </div>
      <div class="offcanvas-footer" style="background:#03644F;">
      <section class="mb-4 mt-3">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-youtube"></i
      ></a>
    </section>
    <!-- Section: Social media -->
      <div class="text-center text-muted p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="#">Duafekuo.com</a>
  </div>
      </div>
      
  </div>
</div>
   
  
       <p class="mt-3 mr-0 text-white"> you are not log in!</p> 
      
  <?php
}

    ?>
</nav>
   
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->

<!-- Navbar -->


</header>





<script>
$(document).ready(function(){
  load_cart_items();
function load_cart_items(){
  $.ajax({
url:"cart_add.php",
method:"GET",
data:{cartItem:"cartCount"},
success:function(data){
  $("#count-cart").html(data);
}
  });

}



});


</script>
<!-- snbutton -->
    <script src="js/snbutton.js"></script>
    <script>
$(document).ready(function(){
SNButton.init("btn-search",{
fields:["search",],
enabletext:"search",
disabletext:"search"


})


})



    </script>
    