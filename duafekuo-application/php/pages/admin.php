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
    <link rel="icon" href="../../images/logo7.jpg.jpg" style="border-radius: 50%;">
    <link rel="stylesheet" href="../../css/main.css">
    <!-- magnific popup cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  
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

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</head>
<body> 

<div class="container-fluid">
<div class="row row-cols-1 row-cols-md-2 g-4">
<div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top" style="background:#03644F;">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars" style="color: white;"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="../../index.php">
      <img src="../../images/logo.jpg.jpg"  style="width: 30px; border-radius:50px;"><em class="text-white">duafekuo</em>
      
      </a>
     
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link text-white" href="../../index.php"> <i class="fas fa-home" style="color: white;"> </i> &nbsp;home</a>
        </li>
        <li class="nav-item dropdown">
      <a href="#" class="nav-link  dropdown-toggle text-white" data-toggle="dropdown" data-target="dropdown_target"> <i class="fab fa-shopify" style="color: white;"></i> &nbsp;about us
      <span class="caret"></span></a>
      <div class="dropdown-menu bg-light" aria-labelledby="dropdown_target">
         <a href="" class="dropdown-item"> <i class="fas fa-futbol"></i>&nbsp;goal</a>
         <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-eye" > </i> &nbsp;vision</a>
         <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-donate"> </i> &nbsp;donation</a>
         <div class="dropdown-divider"></div>
         <a href="" class="dropdown-item"> <i class="fas fa-bookmark"> </i> &nbsp;investors</a>
         <div class="dropdown-divider"></div>
         <a href="admin.php" class="dropdown-item"> <i class="fas fa-address-card"> </i> &nbsp;admin</a>
      </div>
      </li>
      
      
    <li class="nav-item">
          <a class="nav-link text-white" href="../../login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../../register.php"> <i class="fas fa-user-plus"></i> &nbsp;register</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->



    <!-- Right elements -->
    <div class="d-flex align-items-center">
     

   
      

      <?php
if(isset($_SESSION['uid'])){
?>
   
       <p class="text-white mt-3 mr-0" > <?= $_SESSION['fullName']; ?></p>  
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
          >
</i>
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <li>
          <a class="dropdown-item" href="#"> <i class="fas fa-user"></i>&nbsp;My profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>&nbsp;edit</a>
        </li>
        <li>
          <a class="dropdown-item" href="../includes/logout.inc.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
        </li>
      </ul> 
      
<?php
}
else{
  ?>
  
       <p class="text-white mt-3 mr-0"> you are not log in!</p> 
      
  <?php
}

    ?>
 
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->


</div>


</div>

</div>



<div class="container"
style="margin-top: 155px;
left:44px;
position:absolute;">

    <div class="row">
        <div class="col">
        <?php

if(isset($_GET['erro'])){
  if($_GET['erro']=="wrongpwd"){
  ?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center text-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>
  invalid admin password!
</div>
</div>
<?php
}
}
?>
            <!-- Button trigger modal -->
<button
  type="button"
  class="btn btn-primary float-right"
  data-mdb-toggle="modal"
  data-mdb-target="#staticBackdrop"
  style="left:510px; position:absolute;"
>
  confirm you identity
</button>

<!-- Modal -->
<div
  class="modal fade"
  id="staticBackdrop"
  data-mdb-backdrop="static"
  data-mdb-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">confirm your identity</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
      <form action="confirm.php" method="POST">
          <div class="form-outline">
          <input type="password" id="typePassword" class="form-control" placeholder="ENTER PASSWORD" name="confirm">
  <label class="form-label" for="typePassword">PASSWORD</label>
</div>
<br>
<br>
<button type="submit" class="btn btn-primary" name="sumbit">submit</button>
          </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
       
      </div>
    </div>
  </div>
</div>


 
        </div>
    </div>

</div>





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
<br><br>
			
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
           All get all kinks of quality products @ affodable and quality
		   
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-white">
            Information
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
            <a href="#!" class="text-reset">fassion</a>
          </p>
          <p>
            <a href="#!" class="text-reset">wooden products</a>
          </p>
          <p>
            <a href="#!" class="text-reset">cosmetics</a>
          </p>
          <p>
            <a href="#!" class="text-reset">edible</a>
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

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script> 