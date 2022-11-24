<!doctype html>
<html lang="en">

<head>
  <title>Basic Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/0f1c57c0f5.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/css/parallax.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Courses
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Hacking</a>
              <a class="dropdown-item" href="#">AI Technology</a>
              <a class="dropdown-item" href="#">Graphic Design</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-right">
          <li class="nav-item">
            <a class="nav-link" id="signin" href="/pages/signin.php"><i class="fa-solid fa-user"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="signup" href="/pages/signup.php"><i class="fa-solid fa-user-plus"></i> Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- navbar ends -->

  <div id="carouselExampleIndicators" class="carousel slide top" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/images/1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/images/2.jpeg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/images/3.jpeg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/images/4.jpeg" alt="Third slide">
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

  <!-- slider ends -->

  <div class="container robert">
    <div class="row">
      <div class="col-lg-4">
        <img src="/images/tony.jpeg" alt="image was corrupted" width="140" height="140" class="rounded-circle animate__animated animate__slideInLeft">
        <h1>Robert</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit alias dolorem quae beatae ipsam. Placeat?</p>
      </div>
      <div class="col-lg-4">
        <img src="/images/tony.jpeg" alt="image was corrupted" width="140" height="140" class="rounded-circle animate__animated animate__flipInX">
        <h1>Robert</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit alias dolorem quae beatae ipsam. Placeat?</p>
      </div>
      <div class="col-lg-4">
        <img src="/images/tony.jpeg" alt="image was corrupted" width="140" height="140" class="rounded-circle  animate__animated animate__slideInRight">
        <h1>Robert</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit alias dolorem quae beatae ipsam. Placeat?</p>
      </div>
    </div>
  </div>

  <!-- Profile end -->

  <div class="parallax-window parallex" data-parallax="scroll" data-image-src="http://localhost/images/5.jpg">
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
    <a href="#" class="btn btn-primary"> Click Me </a>
  </div>

  <!-- parallax end -->

  <div class="container content">
    <div class="row">
      <div class="col-lg-7">
        <h1>Lorem, ipsum.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod deleniti magnam similique quibusdam at quo?</p>
      </div>
      <div class="col-lg-5">
        <img src="/images/tony.jpeg" alt="" class="rounded-circle">
      </div>
    </div>
  </div>

  <div class="container content">
    <div class="row">
      <div class="col-lg-5">
        <img src="/images/tony.jpeg" alt="" class="rounded-circle">
      </div>
      <div class="col-lg-7">
        <h1>Lorem, ipsum.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod deleniti magnam similique quibusdam at quo?</p>
      </div>
    </div>
  </div>

  <footer>
    <p class="right"><i class="fa-brands fa-instagram"></i> Instagram </p>
    <p class="right"><i class="fa-brands fa-facebook"></i> Facebook </p>
    <p><i class="fa fa-copyright" aria-hidden="true"></i> Freelancer 2018 <a href="#">Terms and Conditions</a></p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>