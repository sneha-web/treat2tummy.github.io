<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/cities.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>

<!------------------------------Navigation bar-------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="images/logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    Treat2tummy
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="cities.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="mumbai/mumbai.php">Mumbai</a>
          <a class="dropdown-item" href="delhi/delhi.php">Delhi</a>
          <a class="dropdown-item" href="bangalore/bangalore.php">Bangalore</a>
          <a class="dropdown-item" href="kolkata/kolkata.php">Kolkata</a>
          <a class="dropdown-item" href="bihar/bihar.php">Bihar</a>
          <a class="dropdown-item" href="hyderabad/hyderabad.php">Hyderabad</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-------------------------------------carousel------------------------------------>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Delhi</h5>
    <p>Lorem ipsum dolor sit amet.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Hyderabad Food</h5>
    <p>Lorem ipsum dolor sit amet.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Bangalore Food</h5>
    <p>Lorem ipsum dolor sit </p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!----------------------------------Explore Cities------------------------>

<div class="section-cards mt-3">
   <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
           <dvi class="card">
              <div class="card-image">
                <a href="#"><img src="images/1.jpg" class="img-fluid"></a>
              </div>

              <div class="content">
                 <h6 class="text-info">ui/ux</h6>
                 <h4 class="card-caption">
                    <a href="#">10 best cafe in mumbai</a>
                 </h4>
                 <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, sint?</p>
              </div>
           </dvi>
        </div>

        <div class="col-md-6 col-lg-4">
           <dvi class="card">
              <div class="card-image">
                <a href="#"><img src="images/1.jpg" class="img-fluid"></a>
              </div>

              <div class="content">
                 <h6 class="text-danger">ui/ux</h6>
                 <h4 class="card-caption">
                    <a href="#">10 best cafe in mumbai</a>
                 </h4>
                 <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, sint?</p>
              </div>
           </dvi>
        </div>

        <div class="col-md-6 col-lg-4">
           <dvi class="card">
              <div class="card-image">
                <a href="#"><img src="images/1.jpg" class="img-fluid"></a>
              </div>

              <div class="content">
                 <h6 class="text-success">ui/ux</h6>
                 <h4 class="card-caption">
                    <a href="#">10 best cafe in mumbai</a>
                 </h4>
                 <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, sint?</p>
              </div>
           </dvi>
        </div>

       
      </div>
   </div>
</div> 


<div class="section-cards mt-3">
   <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
           <dvi class="card">
              <div class="card-image">
                <a href="#"><img src="images/1.jpg" class="img-fluid"></a>
              </div>

              <div class="content">
                 <h6 class="text-info">ui/ux</h6>
                 <h4 class="card-caption">
                    <a href="#">10 best cafe in mumbai</a>
                 </h4>
                 <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, sint?</p>
              </div>
           </dvi>
        </div>

        <div class="col-md-6 col-lg-4">
           <dvi class="card">
              <div class="card-image">
                <a href="#"><img src="images/1.jpg" class="img-fluid"></a>
              </div>

              <div class="content">
                 <h6 class="text-danger">ui/ux</h6>
                 <h4 class="card-caption">
                    <a href="#">10 best cafe in mumbai</a>
                 </h4>
                 <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, sint?</p>
              </div>
           </dvi>
        </div>

        <div class="col-md-6 col-lg-4">
           <dvi class="card">
              <div class="card-image">
                <a href="#"><img src="images/1.jpg" class="img-fluid"></a>
              </div>

              <div class="content">
                 <h6 class="text-success">ui/ux</h6>
                 <h4 class="card-caption">
                    <a href="#">10 best cafe in mumbai</a>
                 </h4>
                 <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, sint?</p>
              </div>
           </dvi>
        </div>

       
      </div>
   </div>
</div> 
 

<!----------------------------GALLERY-------------------------------->

<section class="my-5">
  <div class="py-3">
    <h2 class="text-center">Gallery</h2>
 </div>
 
 <div class="container-fluid" >

  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img style="border-radius:6px;" src="images/2.jpg" alt="" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img style="border-radius:6px;"  src="images/2.jpg" alt="" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img style="border-radius:6px;" src="images/2.jpg" alt="" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img style="border-radius:6px;" src="images/2.jpg" alt="" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img style="border-radius:6px;" src="images/2.jpg" alt="" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img style="border-radius:6px;" src="images/2.jpg" alt="" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img style="border-radius:6px;" src="images/2.jpg" alt="" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img style="border-radius:6px;" src="images/2.jpg" alt="" class="img-fluid pb-4">
    </div>

    <div class="col-lg-4 col-md-4 col-12">
      <img style="border-radius:6px ;" src="images/2.jpg" alt="" class="img-fluid pb-4">
    </div>
  </div>

 </div>

</section>


<!-------------------------------About Us----------------------------------->
<section class="my-5">
  <div class="py-3">
    <h2 class="text-center">About Us</h2>

  </div>
  
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <a href="about.php">
      <img style="border-radius:6px;" src="images/food-blog.jpg" alt="food-blogger" class="img-fluid aboutimg"></a>
    </div>
    
    <div class="col-lg-6 col-md-6 col-12">
     <h2 class="display-5">I Am Sneha Mishra</h2>
     <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, autem asperiores! In hic, veniam asperiores, totam voluptatibus dolores beatae quam suscipit aut sequi modi nobis aliquam aperiam atque facere excepturi, provident cum deserunt ea iste! Illo aperiam nihil quas sequi tempora commodi vel sint, fugiat tempore soluta in, omnis quaerat.</p>
     <a href="about.php" class="btn btn-success">Know more </a>
    </div>
  </div>
</div>
</section>

<!------------------------------------COMMENT SECTION----------------------------------->
<section class="my-5">
  <div class="py-3">
    <h2 class="text-center">Leave Messages</h2>
 </div>
 
 <div class="w-50 m-auto">
   <form action="userinfo.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="user" class="form-control" placeholder="User Name" id="email">
      </div>

      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
      </div>

      <div class="form-group">
        <label for="comments">Comments:</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>

      <button type="submit" class="btn btn-success">Submit</button>

   </form>
 </div>
</section>


<!------------------------ footer ----------------------->
<footer>
  
  <div class="icons p-3 bg-dark text-white text-center">
        <p >@treat2tummy</p>
            <a href="https://facebook.com"><i class="fa fa-facebook"></i> </a>
            <a href="https://twitter.com"> <i class="fa fa-twitter"></i>  </a>
            <a href="https://instagram.com"><i class="fa fa-instagram"></i>  </a>
            <a href="https://linkedin.com"><i class="fa fa-linkedin"></i>  </a>
        </div>
</footer>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>