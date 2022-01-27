<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="img/icon.jpg" rel="icon">
    <title>Welcome to AD-forums - Coding Forums</title>

</head>

<body>
    <?php
          include "connection.php";
    //   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $mobile = $_POST['mobile'];
    //     $password = $_POST['password'];
    //     $cpassword  = $_POST['cpassword'];


    //             if(($password == $cpassword)){
    //                 $hash = password_hash($password, PASSWORD_DEFAULT);
    //             $sql = "INSERT INTO `signup` (`name`, `email`, `mobile`, `password`, `cpassword`) VALUES ( '$name', '$email', '$mobile', '$password', '$cpassword', current_timestamp())";
    //             $result = mysqli_query($conn, $sql);
    //             if($result){
    //                 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //                 <strong>Successfull!</strong> You can login if you can want.
    //                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //               </div>'; 
    //                         }
                
    //             }
    //                 else{
                            
    //                             echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //                              <strong>Wrong!</strong> password do not match.
    //                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //                             </div>';
    //             }
    //  }


      include "header.php";
    ?>
    <!-- navbar -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/750x250/?code,javascript" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/750x250/?code,c++" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/750x250/?code,mysqli" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- navbar -->
    <!--login modal starts -->
    

    <div class="container my-4">
        <h2 class="text-center my-4">AD-Discuss - Browse Categories</h2>
        <div class="row my-4">
            <?php 
        $sql = "SELECT * FROM `forums`";
        $result = mysqli_query($conn, $sql);


        while($row = mysqli_fetch_assoc($result)){

            $id = $row['category_Id'];
            $cat = $row['category_name'];
        echo'
            <div class="cards col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/1337x752/?'.$row['category_name'].'coding, code" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                        <p class="card-text">'.substr($row['category_description'], 0, 100).'...</p>
                        <a href="threadlist.php?catid=' . $id . '" class="btn btn-info">View More</a>
                    </div>
                </div>
            </div>';
           }
          ?>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>