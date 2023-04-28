<html>

<head>
<title >moNkeFT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="site.css" rel="stylesheet" >
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" crossorigin="anonymous"></script>

<meta charset="UTF-8" />
<style>
.login.ozellogin {
  background-color:#FCD535; 
}
.login.ozellogin input{
display:block;
margin: 5px 0px 0px 0px;
}
.login.ozellogin p{
    color:black;
    margin: 0px 0px 0px 62px;
}
.login.ozellogin fieldset{
margin: 0px 0px 0px 62px;
}
</style>
  <link rel="icon" type="image/x-icon" href="Fotograflar/logo.png">
</head>
</head>

<body>
<header class="p-3 text-bg-dark">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <svg height="130" width="500">
        <link rel="shortcut icon" href="Fotograflar/logo.ico" type="image/x-icon">
  <a class="navbar-brand" href="#">
    <img src="Fotograflar/logo.png" width="120" height="120" class="d-inline-block align-top" alt="">
    
  </a>

</svg>
          <!--svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg-->
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a  href="index.php" class="nav-link px-2 text-secondary">Home Page</a></li>
          <li><a href="index.php?sayfa=products"  class="nav-link px-2 text-white" target="blank">Products</a></li>   
          <li><a href="index.php?sayfa=iletisim"  class="nav-link px-2 text-white" target="blank">Payment</a></li>
          <!--li><a href="index.php?sayfa=iletisim_liste" class="nav-link px-2 text-white">Data Base</a></li>
          <li><a href="https://exit.ddev.site:8037/" class="nav-link px-2 text-white">phpMyAdmin</a></li>
          <li><a href="index.php?sayfa=istenilen" class="nav-link px-2 text-white">Istenilen</a></li-->
          <li> <?php echo  @$_SESSION['username'];
          ?></li>
          <?php
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
          ?>
          <li><a href="index.php?sayfa=login" class="nav-link px-2 text-white" >Giriş</a></li>
          <!--li><a href="index.php?sayfa=register" target="blank" class="nav-link px-2 text-white" target="blank">Kayıt Ol</a></li-->
          
          <?php
          }
          else{
            ?>
          <li><a href="index.php?sayfa=logout" class="nav-link px-2 text-white" >Çıkış</a></li>
          <?php

          }
          ?>

        </ul>
        
      </div>
    </div>
  </header>