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
    <link rel="stylesheet" href="css/imagehover.min.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- parseely css -->
<link rel="stylesheet" href="css/parsley.css">



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
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
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


<!-- carousel -->
<script src="js/carousel.js"></script>
<!-- parsely javasript -->
<script src="js/parsley.min.js"></script>




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
      <i class="fas fa-bars" style="color:white;"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
    
      <em class="text-white">Duafekuo</em>
      </span>
      
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link text-white" href="index.php"> <i class="fas fa-home" style="color:white;"> </i> &nbsp;home</a>
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

   
       <p class="text-white mt-3 mr-0 text-white" > <?= $_SESSION['fullName']; ?></p> 
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
<!-- bootsrap s5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>