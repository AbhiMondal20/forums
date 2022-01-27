<?php

include "connection.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $cpassword  = $_POST['cpassword'];


          if(($password == $cpassword)){
              $hash = password_hash($password, PASSWORD_DEFAULT);
          $sql = "INSERT INTO `signup` (`name`, `email`, `mobile`, `password`, `cpassword`) VALUES ( '$name', '$email', '$mobile', '$password', '$cpassword', current_timestamp())";
          $result = mysqli_query($conn, $sql);
          if($result){
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Successfull!</strong> You can login if you can want.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'; 
                      }
          
          }
              else{
                      
                          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                           <strong>Wrong!</strong> password do not match.
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
          }
}




  echo '<link rel="stylesheet" href="style.css">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="#">AD-forums</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About_Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Categoris
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact_Us</a>
        </li>
        </ul>
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-info mx-2" type="submit">Search</button>
      <button type="button" class="btn btn-outline-info mx-2" data-bs-toggle="modal" data-bs-target="#signup">SignUp</button>
      <button type="button" class="btn btn-outline-info mx-2" data-bs-toggle="modal" data-bs-target="#login">Login</button>
    </form>
  </div>
</div>
</nav>';

include 'login.php';
include 'signup.php';





?>