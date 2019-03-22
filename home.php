<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<html>
<head>
<title>Home Page</title>

    <link rel="stylesheet" type="text.css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="win2.css" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheets" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<body>
     <div class="top-nav-bar">
     <div class="search-box">
     <a href="http://localhost/userregistration/login.php"><img class="Logo" src="./logo3.png" alt=""/></a>
     <input type="text" class="form-control">
     <span class="input-group-text"><i class="fas fa-search"></i></span>
    </div>
    <div  class="menu-bar">
      <ul>
        <li><a href=""><i class="fas fa-shopping-basket"></i>cart</a></li>
        <li><a href="">Sign Up</a></li>
        <li><a href="">Log In</a></li>
        <li><a href="">cart</a></li>
      </ul>
    </div>
    </div>
<div class="mass">
<a class="logout" href="logout.php"> LOGOUT </a>

<h1 class="welcome">Welcome! <?php echo $_SESSION['username']; ?></h1>

</div>

<!--------------------Single-Page----------------------------------------->

<section class="single-product">
   <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h1 class="SP">-Single Product-</h1>
    </div>
    </div>
    </div>
    <div class="slider">
        <a href="http://localhost/userregistration/login.php"><div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="nikon.jpg" class="sil" alt="">
              </div>
              <div class="carousel-item">
                  <img src="Product_Red-780x415 Cropped.jpg" class="sil" alt="">
              </div>
              <div class="carousel-item">
                  <img src="phone Cropped.png" class="sil" alt="">
              </div>
            </div>
          </div></a>
          <ol class="carousel-indicators">
              <li data-target="#slider" data-slide-to="0" class="active"></li>
              <li data-target="#slider" data-slide-to="1"></li>
              <li data-target="#slider" data-slide-to="2"></li>
            </ol>
            <div class="product_name">
                <p class="new">New<p>
              <h4>Nikkon Camera</h4>
              <p>Product Code: NC0010</p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <p>Price: ₱200</p>
              <p><b>Available</b></p>
              <p><b>Condition:</b>New</p>
              <p><b>Brand:</b>XYZ company</p>
              <label class="quantity">Quantity:</label>
              <input class="unit" type="text" value="1">
              <button class="btn btn-primary" type="submit">Add to cart</button>
            </div>
    </div>
    <div class="description">
      <h3>Description:</h3>
      <p>High definition camera with HD video buy 3 get 1 for free, limited offer. buy now! High definition camera with HD video buy 3 get 1 for free, limited offer. buy now
      High definition camera with HD video buy 3 get 1 for free, limited offer. buy now
      </p>
      <p>High definition camera with HD video buy 3 get 1 for free, limited offer. buy now! High definition camera with HD video buy 3 get 1 for free, limited offer. buy now
      High definition camera with HD video buy 3 get 1 for free, limited offer. buy now
      </p>
    </div>
  </section>


  <section class="on-sale">
      <div class="container">
        <div class="title-box">
          <h2>Similar</h2>
        </div>
        </div>
        <div class="nite">
          <div class="col-md-3">
            <div class="product-top">
              <img src="MyLOGO.jpg" alt=""><img>
              <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fas fa-eye"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add To Wish List"><i class="fas fa-heart"></i>
                </button>
                <button type="button" class="btn btn-secondary" title="Add To Cart"><i class="fas fa-shopping-cart"></i>
                </button>
              </div>
              <div class="product-bottom text-center">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <h3>Fitness Watch</h3>
                  <h5>200₱</h5> 
              </div>
              </div>
              </div>
              <div class="col-md-3">
                  <div class="product-top">
                    <img src="MyLOGO.jpg" alt=""><img>
                    <div class="overlay-right">
                      <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fas fa-eye"></i>
                      </button>
                      <button type="button" class="btn btn-secondary" title="Add To Wish List"><i class="fas fa-heart"></i>
                      </button>
                      <button type="button" class="btn btn-secondary" title="Add To Cart"><i class="fas fa-shopping-cart"></i>
                      </button>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <h3>Fitness Watch</h3>
                        <h5>200₱</h5> 
                    </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-top">
                          <img src="MyLOGO.jpg" alt=""><img>
                          <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fas fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add To Wish List"><i class="fas fa-heart"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add To Cart"><i class="fas fa-shopping-cart"></i>
                            </button>
                          </div>
                          <div class="product-bottom text-center">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                              <h3>Fitness Watch</h3>
                              <h5>200₱</h5> 
                          </div>
                          </div>
                          </div>
                          <div class="col-md-3">
                              <div class="product-top">
                                <img src="MyLOGO.jpg" alt=""><img>
                                <div class="overlay-right">
                                  <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fas fa-eye"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary" title="Add To Wish List"><i class="fas fa-heart"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary" title="Add To Cart"><i class="fas fa-shopping-cart"></i>
                                  </button>
                                </div>
                                <div class="product-bottom text-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <h3>Fitness Watch</h3>
                                    <h5>200₱</h5> 
                                </div>
                                </div>
                                </div>
      </div>
    </div>
    </section>

<!-------------------------FOOTER------------------------------------>

<section class="footer">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-3">
        <h1>Useful links</h1>
        <p>Privacy and policy</p>
        <p>Terms of Use</p>
        <p>Return Policy</p>
  </div>
    <div class="col-md-3">
        <h1>Company</h1>
        <p>About Us</p>
        <p>Contact Us</p>
  </div>
  <div class="col-md-3">
      <h1>Follow Us On</h1>
      <p><i class="fab fa-youtube"></i> Youtube</p>
      <p><i class="fab fa-facebook"></i></i> Facebook</p>
      <p><i class="fab fa-instagram"></i> Instagram</p>
      <p><i class="fab fa-twitter"></i> Twitter</p>
  </div>
  <div class="col-md-3 footer-image">
      <h1>Download</h1>
      <img src="playapp.jpg">
      <p></p>
  </div>
  </div>
  <hr>
  <p class="copyright">Made with by Ezekyle</p>
  </div>

  </section>


    <script>
      function openmenu()
      {
        document.getElementById("side-menu").style.display="block";
        document.getElementById("menu-btn").style.display="none";
        document.getElementById("close-btn").style.display="block";
      }
      function closemenu()
      {
        document.getElementById("side-menu").style.display="none";
        document.getElementById("menu-btn").style.display="block";
        document.getElementById("close-btn").style.display="none";
      }
    </script>
</body>
</html>