<?php 

session_start();

 if(isset($_GET['logout'])){
session_unset();
session_destroy();
 }else{

 }

 ?>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Hospital</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if(isset($_SESSION['admin'])) :?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Doctors
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/hospital/doctors/addDoctors.php">Add Doctors</a>
          <a class="dropdown-item"  href="/hospital/doctors/listDoctors.php">List Doctors</a>
      
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          fields
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/hospital/fields/addfield.php">Add fields</a>
          <a class="dropdown-item"  href="/hospital/fields/listfields.php">List fields</a>
      
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          admins
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item" href="/hospital/admin/addadmin.php">registration</a>
      
        </div>
      </li>
    </ul>
    <form action="">
    <a href=""> <button class="btn btn-danger my-2 my-sm-0" name="logout" type="submit">logout</button></a>
    </form>
    <?php else :?>

    <a href="/hospital/admin/login.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button></a>
    <?php endif?>
  </div>
  
</nav>

    <h1 class="text-center text-info">PHP CURD </h1>
</header>


