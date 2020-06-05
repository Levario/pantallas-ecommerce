<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav id="navbar">
		<?php include('nav.php');?>
    </nav>

     <!--         carousel  -->
    <div class="section" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-7 mr-auto ml-auto">
            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-85" src="images/carrito.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                      <i class="material-icons"></i>
                       AQUI LO ENCUENTRAS TODO
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-85" src="images/carrito.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                      <i class="material-icons"></i>
                        LA MEJOR PAPELERIA A NIVEL NACIONAL
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-85" src="images/carrito.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons"></i>
                        NO TE QUEDES CON LA DUDA
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                 
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                 
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- End Carousel Card -->
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
    <!--         end carousel -->
    
    <div class="container text-center">
      <h1 >CATEGORIAS</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-3 mr-auto ml-auto">
        <div class="card" style="width: 18rem;">
          <img src="images/carrito.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                 <h5 class="card-title">Estuches geometricos</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>
        </div>
        
        <div class="col-sm-3 mr-auto ml-auto">
        <div class="card" style="width: 18rem;">
          <img src="images/carrito.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                 <h5 class="card-title">Pegamentos
                 </h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>
        </div>
        
        
        <div class="col-sm-4 mr-auto ml-auto">
        <div class="card" style="width: 18rem;">
          <img src="images/carrito.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                 <h5 class="card-title">Tijeras</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>
        </div>
        
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 mr-auto ml-auto">
        <div class="card" style="width: 18rem;">
          <img src="images/carrito.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                 <h5 class="card-title">Arquitectura</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>
        </div>
        
        <div class="col-sm-3 mr-auto ml-auto">
        <div class="card" style="width: 18rem;">
          <img src="images/carrito.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                 <h5 class="card-title">Libretas</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>
        </div>
        
        
        <div class="col-sm-4 mr-auto ml-auto">
        <div class="card" style="width: 18rem;">
          <img src="images/carrito.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                 <h5 class="card-title">Lapiceros</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>
        </div>
        
      </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

<div style="background-color: #F3EDEC;">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-sm-10 ">
        <h6 class="mb-0">Get connected with us on social networks!</h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
     

       

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>


<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">Company name</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
        consectetur
        adipisicing elit.</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Categorias</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="#!">Arquitectura</a>
      </p>
      <p>
        <a href="#!">Libretas</a>
      </p>
      <p>
        <a href="#!">Pegamentos</a>
      </p>
      <p>
        <a href="#!">estuches geometricos</a>
      </p>
      <p>
        <a href="#!">Lapiceros</a>
      </p>
      <p>
        <a href="#!">Tijeras</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Useful links</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="#!">Your Account</a>
      </p>
      <p>
        <a href="#!">Become an Affiliate</a>
      </p>
      <p>
        <a href="#!">Shipping Rates</a>
      </p>
      <p>
        <a href="#!">Help</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Contacto</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> info@example.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
      <p>
        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Ecommerce:
  <a href="#"> Pantallas Levario</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>