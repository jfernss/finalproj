<!doctype html>
<html lang="en">
  <head>
    <title>Trippy Vault</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logo.jpg">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!--custom css -->
    <link rel="stylesheet" href="style.css">
     <!--custom js -->
     <link rel="script" href="carousel.css">
    <!--font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

    <div class="container-fluid">
    <header class="d-flex flex-wrap  align-items-center justify-content-center justify-content-md-between py-4 mb-4 border-bottom" style="font-size: 22px">
      <div class="col-md-2 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
        <img src="img/logo.jpg" alt="" width="50" height="50">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li class="nav-item"><a href="#sectionB" class="nav-link px-2 text-info">New & Featured</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Products</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item text-info" href="#">Tshirt</a>
                <a class="dropdown-item text-info" href="#">Pants</a>
                <a class="dropdown-item text-info" href="#">Bags</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-info">About us</a></li>
      </ul>

      <div class="col-md-2 text-right">
        <button type="button" class="btn btn-info"><span class="bi bi-cart"></span></button>
        <button type="button" class="btn btn-outline-info me-2">Login</button>
        <button type="button" class="btn btn-info">Sign-up</button>
      </div>
    </header>
</div>

    <div class="container-fluid">
            <div class="row">
            <div class="col-md-3 mb-1 mb-lg-0">
            <img
            src="img/1.jpg"
            class="w-100  shadow-1-strong rounded mb-3"
            alt=""/>

            <img
            src="img/gray.png"
            class="w-100 h-30 shadow-1-strong rounded mb-3"
            alt=""/></div>

            <div class="col-md-3 mb-1 mb-lg-0">
            <img
            src="img/gray.png"
            class="w-100 h-30 shadow-1-strong rounded mb-3"
            alt=""/>

            <img
            src="img/2.jpg"
            class="w-100 shadow-1-strong rounded mb-3"
            alt=""/></div>

            <div class="col-md-3 mb-1 mb-lg-0">
            <img
            src="img/3.jpg"
            class="w-100 shadow-1-strong rounded mb-3"
            alt=""/>
            <img
            src="img/gray.png"
            class="w-100 h-30 shadow-1-strong rounded mb-3"
            alt=""/></div>

            <div class="col-md-3 mb-1 mb-lg-0">
            <img
            src="img/gray.png"
            class="w-100 h-100 shadow-1-strong rounded "
            alt=""/></div>
        </div>
    </div>

    <section id="sectionB">
    <div class="b-example-divider"></div>
    
    <div class="container-fluid mb-4 mx-4">
        <h2>NEW & FEATURED PRODUCTS</h2>
    </div>
   
    <div class="container-fluid w-100">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-10 mx-auto" role="listbox">
            <div class="carousel-item col-md-4 active text-center">
                <img class="img-fluid mx-2 d-bloc" src="img/products/1.jpg" alt="slide 1">
                <p >Gucci Blade Print Beige Tee Large</p>
                <p >₱1999</p>
                <button type="button" class="btn btn-success"><span class="bi bi-cart"></span> Add to Cart</button>
            </div>
            <div class="carousel-item col-md-4 text-center">
                <img class="img-fluid mx-auto d-block" src="img/products/2.jpg" alt="slide 2">
                <p >Gucci Interlocking G Stripes TeeLarge</p>
                <p>₱1999</p>
                <button type="button" class="btn btn-success"><span class="bi bi-cart"></span> Add to Cart</button>
            </div>
            <div class="carousel-item col-md-4 text-center">
                <img class="img-fluid mx-auto d-block" src="img/products/3.jpg" alt="slide 3">
                <p>Kanye West x AWGE Jik Cross Navy Tee Large</p>
                <p>₱1499</p>
                <button type="button" class="btn btn-success"><span class="bi bi-cart"></span> Add to Cart</button>
            </div>
            <div class="carousel-item col-md-4 text-center">
                <img class="img-fluid mx-auto d-block" src="img/products/4.jpg" alt="slide 4">
                <p>Stussy x Nike 8Ball White Tee Large</p>
                <p>₱1499</p>
                <button type="button" class="btn btn-success"><span class="bi bi-cart"></span> Add to Cart</button>
            </div>
            <div class="carousel-item col-md-4 text-center">
                <img class="img-fluid mx-auto d-block" src="img/products/5.jpg" alt="slide 5">
                <p>Bape Camou Tote Bag</p>
                <p>₱599</p>
                <button type="button" class="btn btn-success"><span class="bi bi-cart"></span> Add to Cart</button>
            </div>
            <div class="carousel-item col-md-4 text-center">
                <img class="img-fluid mx-auto d-block" src="img/products/6.jpg" alt="slide 6">
                <p>Stussy Script Bag Tote Bag</p>
                <p>₱799</p>
                <button type="button" class="btn btn-success"><span class="bi bi-cart"></span> Add to Cart</button>
            </div>
            <div class="carousel-item col-md-4 text-center">
                <img class="img-fluid mx-auto d-block" src="img/products/7.jpg" alt="slide 7">
                <p>Carhartt Script Black Sling Bag</p>
                <p>₱999</p>
                <button type="button" class="btn btn-success"><span class="bi bi-cart"></span> Add to Cart</button>
            </div>
            <div class="carousel-item col-md-4 text-center">
                <img class="img-fluid mx-2 d-block" src="img/products/8.jpg" alt="slide 7">
                <p>Supreme Mesh Mini Red Sling Bag</p>
                <p>₱999</p>
                <button type="button" class="btn btn-success"><span class="bi bi-cart"></span> Add to Cart</button>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-dark"></i>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-dark"></i>
        </a>
    </div>
  </div>
</div>
</section>
<div class="b-example-divider"></div>

<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4" style="width=100%">
    <!-- Section: Social media -->
    <section class="mb-4">
    <!-- FACEBOOK -->
      <a
        class="btn btn-link btn-floating btn-lg text-info m-1"
        href="https://www.facebook.com/paolo.porte.50"
        role="button"
        data-mdb-ripple-color="dark"
        ><span class="bi bi-facebook"></span></a>


      <!-- INSTAGRAM -->
      <a
        class="btn btn-link btn-floating btn-lg text-info m-1"
        href="https://www.instagram.com/_trippyvault/"
        role="button"
        data-mdb-ripple-color="dark"
        ><span class="bi bi-instagram"></span></a>

        <!-- PHONE -->
        <a
        class="btn btn-link btn-floating btn-lg text-info m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark">
        <span class="bi bi-telephone"></span></a>
        
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  
  <div class="text-right text-info p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   <span class="text-right  p-3">© 2023 Copyright: Trippy Vault</span>
   <span class="float-left  p-1"><span class="bi bi-geo-alt"></span> Pagbilao, Quezon</span>
  </div>
  <!-- Copyright -->
</footer>


  </body>
</html>
