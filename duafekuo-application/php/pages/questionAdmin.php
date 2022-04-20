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
    <!-- parseely css -->
<link rel="stylesheet" href="../../css/parsley.css">

<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>

<link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> 
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

<!-- parsely javasript -->
<script src="../../js/parsley.min.js"></script>
<script src="../../js/dataTables.bootstrap5.min.js"></script>
</head>
<body> 

<div class="container-fluid">
<div class="row row-cols-1 row-cols-md-2 g-4">
<div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg  fixed-top" style="background:#03644F;">
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
      <img src="../../images/logo.jpg.jpg"  style="width: 30px; border-radius:50px;"><ems class="text-white">duafekuo</ems>
      
      </a>
     
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link text-white" href="../../index.php"> <i class="fas fa-home" style="color:white;"> </i> &nbsp;home</a>
        </li>
        <li class="nav-item dropdown">
      <a href="#" class="nav-link  dropdown-toggle text-white" data-toggle="dropdown" data-target="dropdown_target"> <i class="fab fa-shopify" style="color:white;"></i> &nbsp;about us
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
   
       <p class="mt-3 mr-5 text-white" > <?= $_SESSION['fullName']; ?></p> 
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
          <a class="dropdown-item" href="#"> <i class="fas fa-user"></i>&nbsp;My profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>&nbsp;edit</a>
        </li>
        <li>
          <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
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
      <!-- Avatar -->
      
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->


</div>


</div>

</div>

<div class="container mt-5">
    <div class="row">
        <div class="col mt-4">
            <h3 class="text-center text-success mt-5">admin control</h3>
            <ul class="nav nav-tabs mb-0 ml-5" id="myTab0" role="tablist">
  <li class="nav-item" role="presentation">
    <button
    
      class="nav-link active btn btn-primary"
      id="home-tab0"
      data-mdb-toggle="tab"
      data-mdb-target="#home0"
      type="button"
      role="tab"
      aria-controls="home"
      aria-selected="true"
    >
      ADD PRODUCT &nbsp;<i class=" fas fa-edit"></i>
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button
      class="nav-link btn btn-danger"
      id="profile-tab0"
      data-mdb-toggle="tab"
      data-mdb-target="#profile0"
      type="button"
      role="tab"
      aria-controls="profile"
      aria-selected="false"
    >
    REMOVE PRODUCT &nbsp;<i class=" fas fa-trash"></i>
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button
      class="nav-link btn btn-success"
      id="manage-tab0"
      data-mdb-toggle="tab"
      data-mdb-target="#manage0"
      type="button"
      role="tab"
      aria-controls="manage"
      aria-selected="false"
    >
    MANAGE CUSTOMERS &nbsp;<i class="fas fa-tasks"></i>
    </button>
  </li>

</ul>
<div class="tab-content" id="myTabContent0">
  <div
    class="tab-pane fade show active"
    id="home0"
    role="tabpanel"
    aria-labelledby="home-tab0"
  >
    <!-- addproduct -->
    <div class="container-fluid mb-5 main">
    <div class="row row-cols-1 row-cols-md-2 g-4 ">
        <div class="col mb-5">
<div class="admin-container bg-white mt-2">
<img src="../../images/logo.jpg.jpg"  style="width: 50px; border-radius:50px;margin-left:175px; margin-top:22px;">
<h5 class="text-center text-info mb-5">duafukuo online store.. &nbsp: <i class="fas fa-shopping-cart"></i> </h5>
  <?php
if(isset($_GET['error'])){
  if($_GET['error']=="sommethingwrong"){
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
  elseif($_GET['error']=="filesizeBig"){
    ?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>
  file size too big!
</div>
</div>


    <?php
  }
  elseif($_GET['error']=="error"){
?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>
  you have an error uploading this file!
</div>
</div>

<?php

  }
  elseif($_GET['error']=="notallow"){
    ?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
<div>
  this type of file is not allow!
</div>
</div>
    <?php
  }
 
    ?>


<?php
  

}
elseif(isset($_GET['upload'])){
  if($_GET['upload']=="success"){
?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
</svg>
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
   image uploaded succesfully!
  </div>
</div>


<?php

  }
}

?>


        <form action="upload.php"  method="POST" enctype="multipart/form-data" id="demo-form" data-parsley-validate="" style="margin-left: 53px; margin-top:-73px; position:absolute;" class="mt-4">
 
  <input type="text" class="form-control mb-3" name="name" required="" placeholder="PRODUCT NAME...">

  <input type="text" class="form-control mb-3" name="price" required="" placeholder="PRODUCT PRICE IN CEDIS...">

  <label for="question">BROWSE PRODUCT IMAGE:</label>
  <input type="file" name="file" class="form-control mb-3" required="" data-parsley-max-file-size="2000000">
  
  <input type="tel" class="form-control mb-3" name="discount" required="" placeholder="DISCOUNT...">

  <p>
  
  <select name="cartegory" required="" class="form-control">
    <option value="" selected disabled>-Select cartegory-</option>
    <option value="Cutlery">-Cutlery-</option>
    <option value="Appliances">-Appliances-</option>
    <option value="Decor/Crafts" >-Decor/Crafts-</option>
    <option value="Utensils" >-Utensils-</option>
    <option value="Packages/Disposables" >-Packages/Disposables-</option>
  </select>
  </p>
 

 
  <textarea class="form-control" id="desc" rows="4" name="desc" required="" placeholder="WRITE PRODUCT DESCRIPTION"></textarea>
  <button type="submit" class="btn btn-primary btn-block mt-4" id="upload" name="upload"> <i class="fas fa-upload">&nbsp;</i> UPLOAD</button>
  <a href="../../index.php" class="btn btn-warning btn-block mt-4"> <i class="fas fa-back">&nbsp;</i>go to product page</a>
</form>
</div>
        </div>
    </div>
</div>
<!-- addproduct end -->
  </div>
  <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
    <!-- addproduct -->
    <div class="container-fluid mt-1 main">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
<div class="admin-container bg-white">
<img src="../../images/logo.jpg.jpg"  style="width: 50px; border-radius:50px;margin-left:175px; margin-top:22px;">
<h5 class="text-center mb-5 text-info">duafukuo online store.. &nbsp: <i class="fas fa-shopping-cart"></i> </h5>

<?php

if(isset($_GET['success'])){
  if($_GET['success']=="deleted"){
  ?>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="danger:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
   image deleted succesfully!
  </div>
</div>


  <?php
  }
}
?>

        <form action="upload.php"  method="POST" id="demo-form" data-parsley-validate="" class="m-5 ">
  <label class="mt-3" for="question">PRODUCT NAME:</label>
  <input type="text" class="form-control" name="name" required="" >

  <label class="mt-3" for="question">PRODUCT CODE:</label>
  <input type="number" class="form-control" name="code" required="" >
 
  <button type="submit" class="btn btn-danger btn-block mt-4" id="upload" name="del"> <i class="fas fa-trash">&nbsp;</i> DELETE</button>
</form>
        
<div class="msg">

</div>
</div>
        </div>
    </div>
</div>
  </div>

  <!-- MANAGE -->
  <div class="tab-pane fade" id="manage0" role="tabpanel" aria-labelledby="manage-tab0">
  
    <div class="container-fluid mt-1">
    <div class="row justify-content-center">
        <div class="col row-cols-1 row-cols-md-2 g-4 ">

        <h4 class="text-center text-success">ALL CUSTOMERS</h4>
        <?php
        require "../includes/dbh.inc.php";
        $sql="select * from customer order by customerId desc;";
        $query=mysqli_query($connect,$sql);

        $results=mysqli_num_rows($query);
        ?>
        <h6 class="text-center"><span class="text-danger"><?= $results; ?></span> CUSTOMERS ON DASHBOARD</h6>
        <table class="table table-responsive table-hover" id="customers">
        <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FullName</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Contact</th>
      <th scope="col">GENDER</th>
      <th scope="col">COUNTRY</th>

    </tr>
  </thead>
        <?php
while($rows=mysqli_fetch_assoc($query)){
  ?>
 

  <tbody>
    <tr>
      <th scope="row"><?=$rows['customerId']?></th>
      <td><?=$rows['customerFullName']?></td>
      <td><?=$rows['customerEmail']?></td>
      <td><?=$rows['customerAddress']?></td>
      <td><?=$rows['customerDateOfBirth']?></td>
      <td><?=$rows['customerContact']?></td>
      <td><?=$rows['customerGender']?></td>
      <td><?=$rows['customerCountry']?></td>
    </tr>
   
  </tbody>



<?Php
}

        ?>
        </table>
  
    </div>
    


        
    </div>
</div>
  </div>
  
  
</div>

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
<script>
  $(document).ready(function(){
    $("#customers").DataTable();
  });
</script>
<script type="text/javascript">
window.Parsley.addValidator('palindrome', {
  validateString: function(value) {
    return value.split('').reverse().join('') === value;
  },
  messages: {
    en: 'This string is not the reverse of itself',
    fr: "Cette valeur n'est pas l'inverse d'elle même."
  }
});

window.Parsley.addValidator('multipleOf', {
  validateNumber: function(value, requirement) {
    return value % requirement === 0;
  },
  requirementType: '',
  messages: {
    en: 'This value should be a multiple of %s.',
    fr: "Ce nombre n'est pas un multiple de %s."
  }
});

window.Parsley.addValidator('maxFileSize', {
  validateString: function(_value, maxSize, parsleyInstance) {
    if (!window.FormData) {
      alert('You are making all developpers in the world cringe. Upgrade your browser!');
      return true;
    }
    var files = parsleyInstance.$element[0].files;
    return files.length != 1  || files[0].size <= maxSize * 1024;
  },
  requirementType: 'integer',
  messages: {
    en: 'This file should not be larger than %s Kb',
    fr: 'Ce fichier est plus grand que %s Kb.'
  }
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

